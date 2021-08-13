import $  from 'jquery';
import { TweenMax } from "gsap/all";
import 'waypoints/lib/jquery.waypoints.min.js';

function barChart(){

    $('.stat-bar__item').each(function(){
        let el = $(this);
        let chart = $(this).find('.stat-bar__item__bar__inner');
        let percent = el.data('percent');

        chart.css('width','0%');

        let waypoints = el.waypoint(function(direction) {
            
            TweenMax.to(chart, 2, {width: percent+'%'});

            this.destroy()
        }, {
            offset: '80%'
        })
       
    })

    $('.livingAxspa__activityBar').each(function(){
        let el = $(this);
        let chart = $(this).find('.livingAxspa__activityBar--filled');
        let percent = el.data('percent');

        chart.css('width','0%');

        let waypoints = el.waypoint(function(direction) {
            
            TweenMax.to(chart, 2, {width: percent+'%'});

            this.destroy()
        }, {
            offset: '80%'
        })
       
    })

}

function barChartHorizontal(){
    $('.pre-diagnosis__stat__item__bar').each(function(){
        let el = $(this);
        let chart = $(this).find('.pre-diagnosis__stat__item__bar__inner');
        let text = $(this).find('.pre-diagnosis__stat__item__bar__txt');
        let percent = el.data('percent');

        chart.css('height','0%');
        text.css('bottom','0%');

        let waypoints = el.waypoint(function(direction) {
            
            console.log('animation');
            TweenMax.to(chart, 2, {height: percent+'%'});
            TweenMax.to(text, 2, {bottom: percent+'%'});

            this.destroy()
        }, {
            offset: '80%'
        })
       
    })
}

export { barChart , barChartHorizontal };