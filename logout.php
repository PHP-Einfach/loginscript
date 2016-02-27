<?php 
session_start();
session_destroy();
unset($_SESSION['userid']);

require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");

include("templates/header.inc.php");
?>

<div class="container main-container">
Der Logout war erfolgreich. <a href="login.php">Zurück zum Login</a>.
</div>
<?php 
include("templates/footer.inc.php")
?>