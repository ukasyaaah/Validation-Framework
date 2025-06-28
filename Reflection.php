<?php

require_once 'exception/ValidationException.php';
require_once 'helper/ValidationUtil.php';
require_once 'Request.php';

$login = new LoginRequest();
$login->username = null;
$login->password = 's';

ValidationUtil::validateReflection($login);

$register = new RegisterRequest();
$register->username = null;
$register->email = null;

ValidationUtil::validateReflection($register);