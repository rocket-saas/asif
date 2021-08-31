import $  from 'jquery';
import { TweenMax } from "gsap/all";
import 'waypoints/lib/jquery.waypoints.min.js';

function comorbidities(){

    $('.comorbidities__chart').each(function(){
        let el = $(this);
        let line1 = $(this).find('.comorbidities__chart__svg__line--1');
        let line2 = $(this).find('.comorbidities__chart__svg__line--2');
        let line3 = $(this).find('.comorbidities__chart__svg__line--3');



        let waypoints = el.waypoint(function(direction) {
            
            if($(window).width() > 768){
                TweenMax.to(line1, 2, {strokeDashoffset: 0 , delay: 0.2});
                TweenMax.to(line2, 2, {strokeDashoffset: 0, delay: 0.4});
                TweenMax.to(line3, 2, {strokeDashoffset: -760, delay: 0.6, onComplete: function(){
                    el.addClass('loaded');
                }});
            } else{
                el.addClass('loaded');
            }
            

            this.destroy()
        }, {
            offset: '80%'
        })
       
    })

}

export { comorbidities };