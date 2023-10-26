import api from './api';
import DocumentDownloader from './DocumentDownloader';
import LoaderQueue from './LoaderQueue';

const $ = jQuery;
const { documentLoaderClassName, languageLoaderClassName, languageClassName, selectClassName } =
    window.documentPickerProps;

type DocumentPickerFilters = Record<string, string>;

interface QueryDocumentPickerData {
    language: string;
    filters: DocumentPickerFilters;
}

class DocumentPicker extends LoaderQueue {
    private filters: DocumentPickerFilters;
    private $language?: JQuery;
    private $select?: JQuery;
    private $button: JQuery;
    private currentDocId?: number;

    constructor(private $elem: JQuery) {
        super();

        this.filters = this.$elem.data('filters') || {};
        this.$button = this.$elem.find('button[type="button"]');
        this.$loader = this.$elem.find(`.${languageLoaderClassName}`);
        this.setCurrentDoc();

        this.attach();
        this.queryDom();
    }
    queryDom() {
        this.$language = this.$elem.find(`.${languageClassName}`);
        this.$language.find('select').select2();

        this.$select = this.$elem.find(`.${selectClassName}`);
        this.$select.find('select').select2();
    }
    onLangChange({ target }: JQuery.ChangeEvent) {
        const $target = $(target);
        const language = String($target.val());

        this.setCurrentDoc();

        if (this.$select) {
            this.$select.hide();
        }

        this.startLoading();

        api.post<QueryDocumentPickerData>('document_picker', { language, filters: this.filters })
            .then((result) => {
                if (!result.success) {
                    throw new Error(result.data);
                }

                if (this.$select) {
                    this.$select.replaceWith($(result.data.markup));
                }

                this.queryDom();
                this.stopLoading();
            })
            .catch((err) => console.error('An error occured: ', err));
    }
    onDocumentChange({ target }: JQuery.ChangeEvent) {
        const value = $(target).val();

        this.setCurrentDoc(Number(value));
    }
    onButtonClick(e: JQuery.ClickEvent) {
        e.preventDefault();

        if (!this.currentDocId) {
            return;
        }

        const downloader = new DocumentDownloader(this.currentDocId, $(e.target));
        downloader.$loader = this.$elem.find(`.${documentLoaderClassName}`);
        downloader.request();
    }
    setCurrentDoc(id?: number) {
        this.currentDocId = Number(id);
        this.$button.toggle(!!this.currentDocId);
    }
    attach(): void {
        this.$elem.on('change', `.${languageClassName}`, this.onLangChange.bind(this));
        this.$elem.on('change', `.${selectClassName}`, this.onDocumentChange.bind(this));
        this.$button.on('click', this.onButtonClick.bind(this));
    }
}

export default DocumentPicker;
