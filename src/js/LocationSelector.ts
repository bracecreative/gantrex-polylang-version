import api from './api';
import LoaderQueue from './LoaderQueue';

const $ = jQuery;
const { itemClassName, selectClassName, loaderClassName } = window.locationSelectorProps;

interface LocationSelectorData {
    parent: number;
}
class LocationSelector extends LoaderQueue {
    constructor(private $elem: JQuery) {
        super();

        this.attach();

        this.$loader = this.$elem.find(`.${loaderClassName}`);
        this.$elem.find(`.${selectClassName}`).select2();
    }
    onChange({ target }: JQuery.TriggeredEvent): void {
        if (!target) {
            return;
        }

        const $target = $(target);
        const $item = $target.closest(`.${itemClassName}`);
        const $field = $item.find(`.${selectClassName}`);
        const value = $target.val();
        const parent = Number(value);

        if (!$item.length || !parent || parent !== parent) {
            return;
        }

        this.startLoading('location-selection');
        $item.nextAll(`.${itemClassName}`).remove();

        const postUrl = new URL(window.ajaxUrl);
        postUrl.searchParams.append('action', 'location_selector_children');

        api.post<LocationSelectorData>('location_selector_children', { parent })
            .then((result) => {
                this.stopLoading('location-selection');

                if (!result.success) {
                    throw new Error(result.data);
                }

                if (!result.data.markup) {
                    this.$elem.trigger('granulated', parent);
                    return;
                }

                const $nextItem = $(result.data.markup);
                const $nextField = $nextItem.find(`.${selectClassName}`);

                $nextField.prop({
                    class: $field.prop('class'),
                    name: $field.prop('name')
                });

                $nextField
                    .select2()
                    .find('option')
                    .filter((_, el) => el.value === '')
                    .prop('value', value);

                $item.after($nextItem);
            })
            .catch((err) => console.error('An error occured: ', err));
    }
    attach(): void {
        this.$elem.on('change', `.${selectClassName}`, this.onChange.bind(this));
    }
}

export default LocationSelector;
