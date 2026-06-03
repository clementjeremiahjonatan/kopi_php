<?php
include "security.php";

$username = $_SESSION['username'];

echo "welcome, " . $username;
?>
<br>
<a href="courses/index.php">manajemen kelas</a>
<br>
<a href="logout.php">Logout</a>