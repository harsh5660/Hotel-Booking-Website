<?php

include 'connect.php';

setcookie('admin_id', '', time() - 1, '/');

header(header: 'location:../ADMIN/login.php');

?>