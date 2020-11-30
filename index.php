<?php
  require 'vendor/autoload.php';

  use Cocur\Slugify\Slugify;

  $slugify = new Slugify();
  echo $slugify->slugify('Hello World!!!');

  echo "<br>";
  echo $slugify->slugify('Hello World!!!', '_');

 ?>
