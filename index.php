<?php

define('ROOT', realpath('Controller/Rooter.php'));
define('CONTROLLER', realpath('Controller/Controller.php'));
define('STYLE', realpath('Public/css/style.css'));
define('IMAGE', realpath('Public/images'));
define('MODEL', realpath('Model'));
define('VIEW', realpath('View'));

require ROOT;

$dispatcher = new Rooter();