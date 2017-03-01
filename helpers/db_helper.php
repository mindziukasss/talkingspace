<?php 

function replyCount($topic_id){
  $db = new Database;
  $db->query('SELECT * FROM replies WHERE topic_id = :topic_id');
  $db->bind(':topic_id', $topic_id);

  $rows = $db->resultset();

  return $db->rowCount();
}


function getCategories(){
  $db = new Database;
  $db->query('SELECT * FROM categories');

  $results = $db->resultset();
  return $results;
}