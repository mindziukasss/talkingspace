<?php

function formatDate($date){
  $date = date("F j, g:i a",strtotime($date));
  return $date;
}


function urlFormat($str){
  $str = preg_replace('/\s*/', '', $str);
  $str = strtolower($str);
  $str = urldecode($str);
  return $str;
}

function is_active($category){
    if(isset($_GET['category'])){
      if($_GET['category'] == $category){
        return 'active';
      } else {
        return '';
      }
    } else {
        if($category == null){
          return 'active';
        }
    }
}