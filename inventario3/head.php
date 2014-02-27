<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    $url="error.php?msg_error=REQUIERE_LOGIN";
    header("Location:".$url);
}
echo "<div>";
echo "Usuario=".$_SESSION['usuario'];
echo "</div>";
echo "<div>";
echo "<a href=logout.php>Logout</a>";
echo "</div>";
?>