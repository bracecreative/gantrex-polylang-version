import api from './api';
import LoaderQueue from './LoaderQueue';

const $ = jQuery;

const { popupCloseClass } = window;

class DocumentDownloader extends LoaderQueue {
    private $form?: JQuery;

    constructor(private id: number, private $target: JQuery) {
        super();
    }
    request() {
        this.startLoading();
        const token = window.localStorage.getItem('doc-data-capture');

        api.post('document_download_url', { id: this.id, token })
            .then((result) => {
                this.stopLoading();

                if (!result.success) {
                    throw new Error(result.data);
                }

                if (result.data.form) {
                    return this.presentForm(result.data.form);
                }

                if (result.data.url) {
                    return this.download();
                }
            })
            .catch((err) => console.error('An error occured: ', err));
    }
    presentForm(markup: string) {
        this.$form = $(markup);
        this.$form.find(`.${popupCloseClass}`).on('click', this.closeForm.bind(this));

        $(document).one('gform_confirmation_loaded', this.onConfirmationLoaded.bind(this));

        $('body').append(this.$form);
    }
    closeForm() {
        if (!this.$form) {
            return;
        }

        this.$form.remove();
    }
    onConfirmationLoaded(e: any, formId: number) {
        const { dataCaptureResultToken } = window;

        if (!dataCaptureResultToken) {
            return;
        }

        window.localStorage.setItem('doc-data-capture', dataCaptureResultToken);
        this.request();
        this.closeForm();
    }
    download() {
        const url = window.ajaxUrl + '?action=document_download&id=' + this.id;

        const $iframe = $('<iframe />', {
            src: url
        }).css({
            visibility: 'hidden',
            display: 'none'
        });

        $iframe.appendTo(this.$target);
    }
}

export default DocumentDownloader;
