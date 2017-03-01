<?php require('core/init.php'); ?>

<?php

$topic = new Topic;

$template = new Template('templates/frontpage.php');
$template->topics = $topic->getAllTopics();
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();


echo $template;