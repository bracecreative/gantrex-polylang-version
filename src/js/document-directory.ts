import '../sass/select2/core.scss';

import DocumentDirectory from './DocumentDirectory';

jQuery(($) => {
    const $documentDirectory = $(`.${window.documentDirectoryProps.rootClassName}`);

    $documentDirectory.each((_, el) => {
        const $el = $(el);
        $el.data('document-directory', new DocumentDirectory($el));
    });
});
