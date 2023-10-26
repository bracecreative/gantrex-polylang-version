
var $ = require('jquery');
var jQueryBridget = require('jquery-bridget');
var Isotope = require('isotope-layout');
// make Isotope a jQuery plugin
jQueryBridget( 'isotope', Isotope, $ );

        var $container = $('.news-archive-wrap').isotope({
            itemSelector: '.news-card',
            layoutMode: 'fitRows'

        });

        var $checkboxes = $('#news-filters input');
        
        $checkboxes.change( function() {
            // map input values to an array
            var filterArray = [];
            // inclusive filters from checkboxes
            $checkboxes.each( function( i, elem ) {
                // if checkbox, use value if checked
                if ( elem.checked ) {
                filterArray.push( elem.value );
                }
            });
            // combine inclusive filters
            var filterValue = filterArray.length ? filterArray.join(', ') : '*';

            $container.isotope({ filter: filterValue })
        });
