<?php

if (!function_exists('classActivePath')) {
	function classActivePath($path)
	{
		return Request::is($path) ? ' class="active"' : '';
	}
}

if (!function_exists('classActiveSegment')) {
	function classActiveSegment($segment, $value)
	{
		if(!is_array($value)) {
			return Request::segment($segment) == $value ? ' class="active"' : '';
		}
		foreach ($value as $v) {
			if(Request::segment($segment) == $v) return ' class="active"';
		}
		return '';
	}
}

if (!function_exists('w')) {
    function w($str = null)
    {
        echo '<pre>';
        var_dump($str);
        echo '<pre>';
    }
}

if (!function_exists('we')) {
function we($str = null)
    {
        echo '<pre>';
        var_dump($str);
        echo '<pre>';
        exit;
    }
}