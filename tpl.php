<?php

use Jenssegers\Blade\Blade;

function Render($tpl, $obj=[])
{
$blade= new Blade('app/View','cache');
echo $blade->make($tpl,$obj)->render();


}