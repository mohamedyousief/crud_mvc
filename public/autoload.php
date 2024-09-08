<?php

use PSpell\Config;

define("DS", DIRECTORY_SEPARATOR);
define("ROOT_PATH", dirname(__DIR__) . DS);
define("APP", ROOT_PATH . "app" . DS);
define("CORE", APP . "core" . DS);
define("CONFIG", APP . "config" . DS);
define("CONTROLLERS", APP . "controllers" . DS);
define("MODELS", APP . "models" . DS);
define("VIEWS", APP . "views" . DS);
define("LIBS", APP . "Libs" . DS);
define("UPLOADS", ROOT_PATH . "public" . DS . "uploads" . DS);


require_once(CONFIG . 'config.php');
require_once(CONFIG . 'helper.php');

$modules = [ROOT_PATH, APP, CORE, CONFIG, CONTROLLERS, MODELS, VIEWS, UPLOADS, LIBS];
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));
spl_autoload_register('spl_autoload', true);
new App();
