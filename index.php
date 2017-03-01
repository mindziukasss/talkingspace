<?php require('core/init.php'); ?>

<?php

$template = new Template('templates/frontpage.php');
$template->heading = 'This is the template heading';

echo $template;