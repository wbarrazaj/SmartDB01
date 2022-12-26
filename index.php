<?php
set_time_limit(60);

include "common/config.php";
include "template/class.TemplatePower.inc.php";

if(!isset($_GET["controller"])) $_GET["controller"] = constant("DEFAULT_CONTROLLER");
if(!isset($_GET["action"])) $_GET["action"] = constant("DEFAULT_ACTION");

$controller_path = RUTA_TEMPLATES.$_GET["controller"].'.tpl';

/* Check if controller exists */
if(!file_exists($controller_path)) $controller_path = RUTA_TEMPLATES.constant("DEFAULT_CONTROLLER").'.tpl';


$tpl = new TemplatePower( $controller_path );
//$tpl = new TemplatePower( RUTA_TEMPLATES."index.tpl" );

$tpl->assignInclude("menu_left", RUTA_TEMPLATES."menu-left.tpl");
$tpl->assignInclude("menu_top", RUTA_TEMPLATES."menu-top.tpl");


switch ($_GET["controller"]) {
    case "index": {

        
        $tpl->assignInclude("tamano_bdd", RUTA_TEMPLATES."bdd_tamano.tpl");
        $tpl->assignInclude("version_bdd", RUTA_TEMPLATES."bdd_version.tpl");
        $tpl->assignInclude("uptime_bdd", RUTA_TEMPLATES."bdd_uptime.tpl");
        $tpl->assignInclude("sort_scan_bdd", RUTA_TEMPLATES."bdd_sort_scan.tpl");
        $tpl->assignInclude("sort_rows_bdd", RUTA_TEMPLATES."bdd_sort_rows.tpl");
        $tpl->assignInclude("sql_commands_bdd", RUTA_TEMPLATES."bdd_sql_commands.tpl");
        $tpl->assignInclude("threads_errors_bdd", RUTA_TEMPLATES."bdd_threads_errors.tpl");
        $tpl->assignInclude("network", RUTA_TEMPLATES."network.tpl");
        $tpl->assignInclude("telemetria", RUTA_TEMPLATES."telemetria.tpl");
        $tpl->assignInclude("log", RUTA_TEMPLATES."log.tpl");

       

        break;
    }
    case "index2": {

        break;
    }
    case "index3": {

        break;
    }
    default:
        

}

 $tpl->assignInclude("footer", RUTA_TEMPLATES."footer.tpl");
$tpl->prepare();

$tpl->assign("TITULO_PAGINA", TITULO);
$tpl->printToScreen();

?>

