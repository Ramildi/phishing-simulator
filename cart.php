<?php
file_put_contents("log.txt", print_r($_POST, true), FILE_APPEND);
header("Location: index.html");
exit;
?>
