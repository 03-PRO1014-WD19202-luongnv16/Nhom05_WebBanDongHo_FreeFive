<?php
//commons
require_once "./commons/env.php";
require_once "./commons/helper.php";
require_once "./commons/connect-db.php";
require_once "./commons/model.php";
//controllers, models
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

//Điều hướng act
$act = $_GET['act'] ?? '/';

match ($act) {
    
};
require_once "./commons/disconnect-db.php";