<?php
include_once(__DIR__."/../lib/Employee.php");
include_once(__DIR__."/../lib/DataFormat.php");
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods: GET");

$employee = new Employee();

if(isset($_GET['kode'])){
    $data=$employee->getEmployee($_GET['kode']);
} else {
    $data=$employee->getAll();
}
$format=new DataFormat();

error_reporting(E_ALL ^ E_NOTICE);
if ($_GET['view']=='xml') {
	header("Content-Type: application/xml; charset=utf-8");
	echo $format->asXML($data, 'Employee');
}
else if ($_GET['view']=='json') {
	header("Content-Type: application/json");
	echo $format->asJSON($data);
}
else {
	echo $format->asHTML($data);
}