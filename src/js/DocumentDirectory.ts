import api from './api';
import DocumentDownloader from './DocumentDownloader';
import LoaderQueue from './LoaderQueue';

const $ = jQuery;
const {
    rootClassName,
    searchFormClassName,
    filterClassName,
    downloadClassName,
    loaderClassName,
    pagerClassName,
    clearSearchClassName
} = window.documentDirectoryProps;

class DocumentDirectory extends LoaderQueue {
    private currentUrl: URL;
    private $clearSearch?: JQuery;

    constructor(private $elem: JQuery) {
        super();

        this.currentUrl = new URL(window.location.href);

        this.attach();
        this.queryDom();
    }
    queryDom() {
        this.$elem.find(`.${filterClassName}`).select2({
            /* Sort data using lowercase comparison */
            sorter: data => data.sort((a,b) => a.text.toLowerCase() > b.text.toLowerCase() ? 0 : -1)
       
       });
        this.$loader = this.$elem.find(`.${loaderClassName}`);
        this.$clearSearch = this.$elem.find(`.${clearSearchClassName}`);
    }
    setUrlParam(name: string, value: string) {
        if (value) {
            this.currentUrl.searchParams.set(name, value);
        } else {
            this.currentUrl.searchParams.delete(name);
        }

        this.currentUrl.href = this.currentUrl.href.replace(/\/page\/\d+/, '');

        history.pushState(null, '', this.currentUrl);
    }
    setUrl(url: string) {
        this.currentUrl = new URL(url);
        history.pushState(null, '', this.currentUrl);
    }
    onFilterChange({ target }: JQuery.ChangeEvent) {
        const $target = $(target);
        const multiple = $target.prop('multiple');
        const name: string = $target.prop('name');

        $target.select2('close');

        if (!name) {
            return;
        }

        const value: string = multiple
            ? $target
                  .find<HTMLOptionElement>('option:selected')
                  .map((_, { value }) => value)
                  .get()
                  .join(',')
            : target.value;

        if (!name) {
            return;
        }

        if (name !== 'language') {
            this.setUrlParam(name, value);
            this.reload();
        } else {
            this.startLoading();
            window.location.href = value;
        }
    }
    onSearchFormSubmit(e: JQuery.SubmitEvent) {
        e.preventDefault();

        const { target } = e;
        const $form = $(target);
        const $input = $form.find('input:text');
        const value = $input.prop('value');

        if (!value) {
            return;
        }

        this.setUrlParam('s', value);
        this.reload();
    }
    onSearchFormPress(e: any) {
        if (!this.$clearSearch) {
            return;
        }

        const { target } = e;
        const $input = $(target);
        this.$clearSearch.toggle(!!$input.val());
    }
    onClearSearchClick(e: JQuery.ClickEvent) {
        e.preventDefault();
        this.$elem.find(`.${searchFormClassName} input:text`).val('');
        this.setUrlParam('s', '');
        this.reload();
    }
    onPagerClick(e: JQuery.ClickEvent) {
        e.preventDefault();

        const { target } = e;
        const $link = $(target);
        const url = $link.prop('href');

        if (!url) {
            return;
        }

        this.setUrl(url);
        this.reload();
    }
    reload() {
        this.startLoading();

        api.get(this.currentUrl.toString())
            .then((result) => {
                this.stopLoading();

                const $page = $(result);
                const $root = $page.find(`.${rootClassName}`);

                if (!$root.length) {
                    return;
                }

                this.$elem.html($root.html());
                this.queryDom();
            })
            .catch((err) => console.error('An error occured: ', err));
    }
    onDownloadClick(e: JQuery.ClickEvent) {
        e.preventDefault();

        const $target = $(e.target);
        const docId = $target.closest('[data-document-id]').data('document-id');

        if (!docId) {
            return;
        }

        const downloader = new DocumentDownloader(Number(docId), $target);
        downloader.$loader = this.$loader;
        downloader.request();
    }
    onSelect2Unselect(e: Select2.Event<HTMLSelectElement, any>) {
        if (!e.params.originalEvent) {
            return;
        }

        e.params.originalEvent.stopPropagation();
    }
    onWinPopState() {
        this.currentUrl = new URL(window.location.href);
        this.reload();
    }
    attach(): void {
        this.$elem.on('change', `.${filterClassName}`, this.onFilterChange.bind(this));
        this.$elem.on('submit', `.${searchFormClassName}`, this.onSearchFormSubmit.bind(this));
        this.$elem.on(
            'input',
            `.${searchFormClassName} input:text`,
            this.onSearchFormPress.bind(this)
        );
        this.$elem.on('click', `.${clearSearchClassName}`, this.onClearSearchClick.bind(this));
        this.$elem.on('click', `.${pagerClassName}`, this.onPagerClick.bind(this));
        this.$elem.on('click', `.${downloadClassName}`, this.onDownloadClick.bind(this));
        $(window).on('popstate', this.onWinPopState.bind(this));
        this.$elem.on('select2:unselect', this.onSelect2Unselect.bind(this));
    }
}

export default DocumentDirectory;
