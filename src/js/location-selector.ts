import '../sass/select2/core.scss';

import LocationSelector from './LocationSelector';

jQuery(($) => {
    const $selects = $(`.${window.locationSelectorProps.containerClassName}`);

    $selects.each((_, el) => {
        const $el = $(el);
        $el.data('location-selector', new LocationSelector($el));
    });
});
