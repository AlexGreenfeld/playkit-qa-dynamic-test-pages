  <?php
//  error_reporting(E_ALL);
// ini_set('display_errors', 1);
?>
  <?php include 'pageSource/PlayerV3_test_page_head.php'; ?>
  <?php include 'config/UIConfigPlayerV3.php'; ?>
  <?php 
    if ($_GET['newConf'] == 'on') {
      include 'pageSource/PlayerV3_test_page_body.php';
    }else{
      include 'pageSource/PlayerV3_test_page_body_new_config.php';
    }
    ?>