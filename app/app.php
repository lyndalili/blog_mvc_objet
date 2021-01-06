<?php

if (!isset($_GET["module"])){
    $module = DEFAULT_MODULE;
}else {
    $module = $_GET["module"];
}
$file = "app/controller/" . $module . ".php"; //cree le chemin 
if(file_exists($file)){
include($file);
new Controller ();
}else{
    die("module " . $module . "  inexistant!");
}