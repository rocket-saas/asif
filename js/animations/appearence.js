import $  from 'jquery';
import 'waypoints/lib/jquery.waypoints.min.js';


function appearence(){
    $('.appear').each(function() {
        let el = $(this);
        let inview = el.waypoint(function(direction) {
            el.addClass('visible');
        }, {
            offset: '95%'
        });
    });
}

export { appearence };