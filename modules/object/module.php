<?php
$Module = array('name' => 'object');

$ViewList = array();
$ViewList['edit'] = array(
    'script' => 'edit.php',
    'functions' => array('edit'),
    'params' => array('object_id')
);

/*
$ViewList['completion_details'] = array(
    'script' => 'completion_details.php',
    'functions' => array('show'),
    'params' => array('object_id')
);
*/

$FunctionList = array();
$FunctionList['edit'] = array();
//$FunctionList['show'] = array();

?>
