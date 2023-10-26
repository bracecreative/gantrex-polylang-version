import FindUsCard from './FindUsCard';

jQuery(($) => {
    const $findUsCards = $(`.${window.findUsCardProps.containerClassName}`);

    $findUsCards.each((_, el) => {
        const $el = $(el);
        $el.data('find-us-cards', new FindUsCard($el));
    });
});
