import '../sass/select2/core.scss';

import DocumentPicker from './DocumentPicker';

jQuery(($) => {
    const $documentPickers = $(`.${window.documentPickerProps.rootClassName}`);

    $documentPickers.each((_, el) => {
        const $el = $(el);
        $el.data('document-picker', new DocumentPicker($el));
    });
});
