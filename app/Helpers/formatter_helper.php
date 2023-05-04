<?php

if (!function_exists('sexeFormatter')){
	function sexeFormatter($value){
	    return $value == "M" ? "Masculin" : "Féminin";
    }
}

if (!function_exists('avatarFormatter')){
	function avatarFormatter($value){
		if($value !="") {
	    	$url = 'avatars/'. $value;
		} else {
			$url = 'avatars/default_avatar.jpg';
		}
		return '<img src="'. img_url($url) . '" class="table-image" alt="Photo"/>';
    }
}

if (!function_exists('aptitudeFormatter')){
	function aptitudeFormatter($value){
		if($value == 1) {
	    	return "Inapte";
		} else {
			return "Apte";
		}
    }
}

if (!function_exists('listFormatter')){
	function listFormatter($value){
		if(count($value) > 0) {
			$list = '<ul>';
	    	foreach($value as $row) {
				$list .= "<li><em class='fa fa-arrow-alt-from-left'></em> &nbsp;". $row->designation . "</li>";
			}
			$list .= "</ul>";
			return $list;
		} else {
			return "";
		}
    }
}

if (!function_exists('dateTimeFormatter')){
	function dateTimeFormatter($value){
		if($value != null && $value !="") {
	    	$date = new DateTime($value);
			return $date->format('d / m / Y - H:i:s');
		}
		return '';
    }
}

if (!function_exists('dateFormatter')){
	function dateFormatter($value){
		if($value != null && $value !="") {
	    	$date = new DateTime($value);
			return $date->format('d / m / Y');
		}
		return '';
    }
}
