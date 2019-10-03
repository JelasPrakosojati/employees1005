<?php
include_once(__DIR__."/lib/Employee.php");
include_once(__DIR__."/lib/DataFormat.php");
header("Access-Control-Allow-Origin:*");
$employee = new Employee();
$employee->setValue(1707051005, 'Jelas', 'Prakosojati', 'jelas.prakosojati1@gmail.com', '081277217318', '2019-10-03', 1, 10000000, 3, 9, 2);

//echo $employee->kode_matakuliah;

$result=$employee->create();
//$result=$employee->delete();

$format= new DataFormat();

//print_r($result);

echo $format->asJSON($result);


//$employee = new Employee();
//$data=$employee->getEmployee('1707051005');
//$format=new DataFormat();
//if ($_GET['view']=='xml') {
	//header("Content-Type: application/xml; charset=utf-8");
	//echo $format->asXML($data, 'Employee');
//}
//else if ($_GET['view']=='json') {
	//header("Content-Type: application/json");
	//echo $format->asJSON($data);
//}
//else if ($_GET['view']=='html') {
	//echo $format->asHTML($data);
//}