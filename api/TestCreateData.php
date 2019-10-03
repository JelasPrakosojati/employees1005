<?php
include_once(__DIR__."/../lib/Employee.php");
include_once(__DIR__."/../lib/DataFormat.php");
header("Access-Control-Allow-Origin:*");

$employee = new Employee();

$employee->setValue(1707051005, 'Jelas', 'Prakosojati', 'jelas.prakosojati1@gmail.com', '081277217318', '2019-10-03', 1, 10000000, 3, 9, 2);

$result=$employee->create();

$format= new DataFormat();

echo $format->asJSON($result);