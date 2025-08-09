<?php
 require_once('../../app/helpers.php');
require_once('../../app/config.php');
 session_destroy();
 redirect(URL."/admin/auth/login.php");

