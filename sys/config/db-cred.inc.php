<?php
declare(strict_types=1);

$config = array(
  'DB_HOST' => 'localhost:8889',
  'DB_USER' => 'root',
  'DB_PASS' => 'root',
  'DB_NAME' => 'php-jquery_example'
);

// initializing    $C as an empty array is a safeguard against any tainted pieces of data being stored in $Cand 
// defined as constants. this is a good habit, especially when dealing with sensitive data.

// $config = array();

// /** 
//  * The database host URL
//  */
// $config['DB_HOST'] = 'localhost:8889';

// /**
//  * The database username
//  */
// $config['DB_USER'] = 'root';

// /**
//  * The database password
//  */
// $config['DB_PASS'] = 'root';

// /**
//  * The name of the database to work with
//  */
// $config['DB_NAME'] = 'php-jquery_example';