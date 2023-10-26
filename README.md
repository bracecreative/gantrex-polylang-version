# Gantrex

[WIP]

## Available Shortcodes

-   `[find-us-card /]` - Display the location selector dropdown field(s) which, when fully drilled
    down, will display the corresponding team-members card.
-   `[{document_type} products="clips,pads" /]` - Dynamic shortcode. Display language dropdown which
    when selected, displays a list of filtered datasheets for the given language.

## Available Templates

Each template has been prototyped, but needs modifying/styling in accordance with the website's
design.

### Common

-   `template-parts/common/loader.php` - The loading spinner that will appear whilst AJAX requests
    are being made

### Find us card

-   `template-parts/location-selector/container.php` - The location selector field's containing
    element.
-   `template-parts/location-selector/select-field.php` - The location selector field itself, with
    wrapper. This template may be displayed multiple times depending on the number of times a
    location can be "drilled" into.

### Location selector

-   `template-parts/find-us-card/container.php` - The find us card's containing element.
-   `template-parts/find-us-card/card.php` - The card to be displayed for a given team member when a
    corresponding location is selected
-   `template-parts/find-us-card/card-no-results.php` - The markup to be displayed when no
    corresponding team member card is available for the given location

### Document directory

-   `archive-document.php` - The main document directory template
-   `template-parts/document-archive/filters.php` - The dropdown (select2) filters
-   `template-parts/document-archive/item-row.php` - Individual document table rows
-   `template-parts/document-archive/loader.php` - The loading spinner that appears when ajax
    requests are processing. This also currently prevents the user from interacting during a loading
    state.
-   `template-parts/document-archive/search-form.php` - The document directory's search form
-   `template-parts/document-archive/table-headers.php` - The headings of the document directory
    table

## Available Filters

-   `find_us_card_classes` - Allows modification of the classes used for the find us card.
    (Defaults: `.find-us-wrap`, `.find-us-card`, `.find-us-placeholder`.)
-   `location_selector_classes` - Allows modification of the classes used for the location selector.
    (Defaults: `.location-selector-wrap`, `.location-selector-item`, `.location-selector`.)
-   `document_directory_classes` - Allows modification of the classes used for the document
    directory. (Defaults: `.document-directory`, `.document-directory-search`,
    `.document-directory-loader`, `.document-directory-filter`, `.page-numbers`)
-   `team_member_card_args` - Allows modification of the arguments provided to the
    `template-parts/find-us-card/card` template. Accepts one extra argument that is the team member
    post object. Example usage:

        add_filter('team_member_card_args', function(array $args, WP_Post $team_member){
            $args['age'] = get_field('age', $team_member->ID);

            return $args;
        }, 10, 2)

## Document directory

-   There are document-directory-specific settings to complete in Settings -> Gantrex. These
    settings are different for each language.
-   The document directory path will always default to `/documents` if no path is provided.
-   It is important that for both the documents post type and any taxonomies or post types that act
    as filters, the first "Translatable" column is selected under WPML -> Settings -> Post Types
    Translation and WPML -> Settings -> Taxonomies Translation respectively.

## Document picker

-   The document picker shortcode is dynamically registered based on the terms for the "Document
    Type" taxonomy. For example, creating the "Brochures" term (with the "brochures" slug) will
    allow for the [brochures /] shortcode to be used. Likewise, deleting the term will stop the
    shortcode from being registered.
-   The attributes for the registered shortcodes may be any one of the taxonomies associated with
    the document post type and it's slug, or any related post type (which at this time, is just
    "products") and it's slug. Some examples are `[brochures document_category="blue" /]` or
    `[datasheets products="clips" /]`
