<?php

require_once 'Model/post.php';

$Post = new Post();

$id = 1;
$Post->setId($id);
echo $Post->getId();

?>