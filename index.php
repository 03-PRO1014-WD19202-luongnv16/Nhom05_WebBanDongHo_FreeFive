<?php
//commons
require_once "./commons/env.php";
require_once "./commons/helper.php";
require_once "./commons/connect-db.php";
//controllers, models
require_file(PATH_CONTROLLER);

require_once "./commons/disconnect-db.php";