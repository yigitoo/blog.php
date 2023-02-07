<?php
session_start();
$title = "Ana sayfa";
$is_logged = true;

include "db.php";
print_r($_SESSION);
include "header.php";

?>

<center>
Hello World!
</center>

<?php
include "footer.php";
?>
