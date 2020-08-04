<?php

use Jenssegers\Blade\Blade;


function render($tpl, $obj=[])
{
$blade= new Blade('app/View','cache');
echo $blade->make($tpl,$obj)->render();


}