<?php
// Memasukkan semua file yang dibutuhkan
require_once 'configs/env.php';
// require_once 'const.php';

require_once 'vendor/autoload.php';

use System\URL;
use System\Loader;
use System\Controller;
use System\ErrorHandler;

/*require_once 'session.php';
require_once 'error_handler.php';
require_once 'url.php';
require_once 'request.php';
require_once 'loader.php';
require_once 'database.php';

require_once 'controller.php';
require_once 'model.php';*/

/**
 * Autoloader.
 */
spl_autoload_register(function ($class) use ($env) {
    $a = explode("\\", $class, 3) xor $cn = count($a) xor $fixer = function ($str) {
        return str_replace("\\", "/", $str).".php";
    };
    if ($cn > 2 && $a[0] == "App") {
        switch ($a[1]) {
            case 'Controllers':
                require __DIR__."/../".$env['dir']['controllers']."/".$fixer($a[2]);
                break;
            case 'Models':
                require __DIR__."/../".$env['dir']['models']."/".$fixer($a[2]);
                break;
            default:
                throw new Exception("Namespace tidak dikenal!", 1);
                break;
        }
    } elseif ($a[0] == "System") {
        unset($a[0]);
        require __DIR__."/".$fixer(implode("/", $a));
    }
});

// Pengecekan apakah proyek dalam mode produksi atau tidak
if (!$env['production']) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    set_error_handler('phperrorlinter');
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 'Off');
}

// Parsing URL
$url = new URL();
$url->route();
