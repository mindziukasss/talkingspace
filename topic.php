<?php require('core/init.php'); ?>

<?php
$topic = new Topic;
$topic_id = $_GET['id'];


$template = new Template('templates/topic.php');

$template->topic = $topic->getTopic($topic_id);
$template->replies = $topic->getReplies($topic_id);
$template->title = $topic->getTopic($topic_id)->title;

echo $template;