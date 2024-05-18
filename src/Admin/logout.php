<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('KeyEncrypt', '', time() - 605800);
setcookie('Key1', '', time() - 605800);
setcookie('Key2', '', time() - 605800);
setcookie('Key3', '', time() - 605800);

header("Location: /admin/login");
exit;