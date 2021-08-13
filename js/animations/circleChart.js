import $  from 'jquery';
import { TweenMax } from "gsap/all";
import 'waypoints/lib/jquery.waypoints.min.js';

function circleChart(){

    $('.circle-chart').each(function(){
        let el = $(this);
        let chart = $(this).find('.circle-chart__round__circle');
        let totalLength = chart.data('total');
        let length = chart.data('length');
        var waypoints = el.waypoint(function(direction) {
            this.destroy()
            TweenMax.to(chart, 2, {strokeDasharray: length+','+totalLength});
        }, {
            offset: '80%'
        })
       
    })
}

export { circleChart };