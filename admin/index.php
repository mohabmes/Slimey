<?php
require_once('admin-ini.php');
$b = new Blog();
$postCount = $b->getPostsCount();
$allposts = $b->getFrom(0, $postCount);

if(isset($_SESSION['msg'])){
  echo error($_SESSION['msg']);
  unset($_SESSION['msg']);
}

require_once(VIEW .'panel.php');
