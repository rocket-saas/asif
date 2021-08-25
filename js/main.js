import $  from 'jquery';

import { anchorScroll , scrollDown } from './animations/anchorScroll';
import { counter  } from './animations/counter';
import { circleChart  } from './animations/circleChart';
import { barChart,barChartHorizontal } from './animations/barChart';
import { appearence } from './animations/appearence';

import { horizontalNav } from './template-parts/page-nav/horizontal-nav';
import { verticalNav } from './template-parts/page-nav/vertical-nav';



import { diagnosisBubbles , diagnosisMap } from './template-parts/acf-blocks/diagnosis';
import { darkLightStats } from './template-parts/acf-blocks/darkLightStats';
import { involvedMap } from './template-parts/acf-blocks/involvedMap';
import { comorbidities } from './template-parts/acf-blocks/comorbidities';



$(document).ready(function(){
    anchorScroll();
    counter();
    scrollDown();
    horizontalNav();
    verticalNav();
    appearence();

    diagnosisBubbles();
    diagnosisMap();
    darkLightStats();
    involvedMap();
    circleChart();
    barChart();
    barChartHorizontal();
    comorbidities();
    
    $("body").find('p').each(function() {
        $(this).html($(this).html().replace(/&#8232;/g," "));
    });
});

