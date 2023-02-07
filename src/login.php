<?php
$title = "Main page | Yigit's blog";
include "db.php";

$is_logged = true;
include 'header.php';
?>

<?php
$msg = '';
if (isset($_POST['login']) && !empty($_POST['username']) 
  && !empty($_POST['password'])) {				
  if ($_POST['username'] == 'admin' && 
    $_POST['password'] == 'templekiller09') {
    $_SESSION['valid'] = true;
    $_SESSION['timeout'] = time();
    $_SESSION['username'] = 'tutorialspoint';
      echo 'You have entered valid use name and password';
  }else {
    $msg = 'Wrong username or password';
  }
}
?>

<?php
include 'footer.php';
?>
