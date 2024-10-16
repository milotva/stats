<?php
require_once(__dir__ . "/lessc.inc.php");
// https://github.com/leafo/lessphp

$less = new lessc;
$dir = __dir__;

$compileFrom = $dir . "/assets/main.less";
$compileTo = $dir . "/resources/css/main.css";

$compileFrom2 = $dir . "/assets/tables.less";
$compileTo2 = $dir . "/resources/css/tables.css";


file_put_contents($compileTo, $less->compileFile($compileFrom));
file_put_contents($compileTo2, $less->compileFile($compileFrom2));

?>