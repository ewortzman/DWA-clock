<?php

date_default_timezone_set("America/New_York");

$hour = date("H");

if ($hour>=5 && $hour<11){
   $timeOfDay = "morning";
   $background = "#865f86";
} else if($hour>=11 && $hour<16){
   $timeOfDay = "afternoon";
   $background = "#2c87c8";
} else if($hour>=16 && $hour<20){
   $timeOfDay = "evening";
   $background = "#c7b02f";
} else {
   $timeOfDay = "night";
   $background = "#180629";
}