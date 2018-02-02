<?php
declare(strict_types=1);

/**
 * Include necessary files
 */
include_once '../sys/core/init.inc.php';

/**
 * Load the calendar for January
 */
$cal = new Calendar($dbo, '2016-01-01 12:00:00');

/**
 * Set up the page title and CSS files
 */
$page_title = 'Events Calendar';
$css_files = array('style.css');

/**
 * Include the header
 */
include_once 'assets/common/header.inc.php';

// if (is_object($cal)) {
//   echo "<pre>", var_dump($cal), "</pre>";
// }

?>
<div id="content">
  <?php
  echo $cal->buildCalendar();
  ?>
</div>
<?php
/**
 * Include the footer
 */
include_once 'assets/common/footer.inc.php';
?>
