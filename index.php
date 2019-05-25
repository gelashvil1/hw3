<?php
require_once 'template.php';
$temp = new template('default.php');
$temp->assign('username', 'givi');
$temp->assign('age', '19');
$temp->render();
?>