import $  from 'jquery';

import { diagnosis } from './template-parts/acf-blocks/diagnosis';
import { darkLightStats } from './template-parts/acf-blocks/darkLightStats';


$(document).ready(function(){
    diagnosis();
    darkLightStats();
});

