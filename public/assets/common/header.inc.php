<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $page_title ?></title>
  <?php foreach ($css_files as $css): ?>
  <link rel="stylesheet" href="assets/css/<?php echo $css ?>">
  <?php endforeach ?>
</head>
<body>