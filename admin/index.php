<?php

//commons
require_once "../commons/env.example.php";
require_once "../commons/helper.php";
require_once "../commons/connect-db.php";
require_once "../commons/model.php";
//controllers, models

require_file(PATH_CONTROLLER_ADMIN);
require_file(PATH_MODEL_ADMIN);

//Điều hướng act
$act = $_GET['act'] ?? '/';

// Kiểm tra xem user đã đăng nhập chưa
// middleware_auth_check($act);

match ($act) {
    '/' => dashboard(),

    // Login
    'login' => authenShowFormLogin(),
    'logout' => authenLogout(),
};

require_once "../commons/disconnect-db.php";