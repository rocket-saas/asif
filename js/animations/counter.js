import $ from 'jquery';
import 'waypoints/lib/jquery.waypoints.min.js';

function counter(){
    $('.counter').each(function(){
        let element = $(this);
        let data = element.data('counter');
        let integer = element.data('integer');
        element.text('0');
        var waypoints = element.waypoint(function(direction) {
            this.destroy()
            
            $({ Counter: 0 }).animate({ Counter: data }, {
                duration: 3000,
                easing: 'swing',
                step: function () {
                    if(integer){
                        element.text(this.Counter.toFixed(0));
                    } else{
                        element.text(this.Counter.toFixed(1));
                    }
                },
                complete: function() {
                    element.text(this.Counter);
                }
            });


        }, {
            offset: '80%'
        })
    });
}

export { counter };