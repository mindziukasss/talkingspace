<?php require('core/init.php'); ?>

<?php

$topic = new Topic;


$category = isset($_GET['category']) ? $_GET['category'] : null;


$user_id = isset($_GET['user']) ? $_GET['user'] : null;


$template = new Template('templates/topics.php');

if(isset($category)){
  $template->topics = $topic->getByCategory($category);
  $template->title = 'Posts In "'.$topic->getCategory($category)->name.'"';
}


if(isset($user_id)){
  $template->topics = $topic->getByUser($user_id);
 
}


if(!isset($category) && !isset($user_id)){
  $template->topics = $topic->getAllTopics();
}

$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();


echo $template;