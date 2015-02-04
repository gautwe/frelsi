<?php
  // First, include what we need.
  include("inc/header.php");
  include("inc/top.php");
  include("inc/lang.php");
  
  // With lang.php, we need to redirect to a ?sprak.
  if(!asset($_GET['sprak'])){header('Location: index?sprak=en');}
  
