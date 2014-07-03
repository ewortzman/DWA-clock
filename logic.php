<?php

date_default_timezone_set("America/New_York");

$hour = date("H");

if ($hour>=5 && $hour<11){
   $timeOfDay = "morning";
} else if($hour>=11 && $hour<16){
   $timeOfDay = "afternoon";
} else if($hour>=16 && $hour<20){
   $timeOfDay = "evening";
} else {
   $timeOfDay = "night";
}