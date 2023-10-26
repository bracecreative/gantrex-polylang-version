import api from './api';

const $ = jQuery;

const { containerClassName } = window.locationSelectorProps;
const { placeholderClassName } = window.findUsCardProps;

interface QueryCardData {
    location: number;
}

class FindUsCard {
    private $locationSelector: JQuery;
    private $placeholder: JQuery;
    private $card?: JQuery;

    constructor(private $elem: JQuery) {
        this.$locationSelector = this.$elem.find(`.${containerClassName}`);
        this.$placeholder = this.$elem.find(`.${placeholderClassName}`);

        this.attach();
    }
    queryCard(_: JQuery.TriggeredEvent, location: number) {
        const locationSelector = this.$locationSelector.data('location-selector');

        if (locationSelector.startLoading) {
            locationSelector.startLoading('team-card');
        }

        api.post<QueryCardData>('location_team_member_card', { location })
            .then((result) => {
                if (locationSelector.stopLoading) {
                    locationSelector.stopLoading('team-card');
                }

                if (!result.success) {
                    throw new Error(result.data);
                }

                if (!result.data.markup) {
                    return;
                }

                this.$card = $(result.data.markup);
                this.$placeholder.empty().append(this.$card);
            })
            .catch((err) => console.error('An error occured: ', err));
    }
    clearCard() {
        this.$placeholder.empty();
    }
    attach(): void {
        this.$locationSelector.on('granulated', this.queryCard.bind(this));
        this.$locationSelector.on('change', this.clearCard.bind(this));
    }
}

export default FindUsCard;
