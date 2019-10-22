<?php

// print_r($_REQUEST);
$Arr = [];
$key = $_REQUEST['name'];
$data = array_merge($Arr,array($_REQUEST['name']=>$_REQUEST['company']));
// array_push($Arr, $_REQUEST['company']);
// print_r($Arr);
$htmlvar = '';
// for ($i=0; $i < count($Arr); $i++) { 
// }
foreach ($data as $key => $value) {
	# code...
	$htmlvar .= '<tr><td>'.$key.'</td><td>'.$value.'<span style="    float: right; color: red;font-size: 36px;margin-top: -18px;">×</span></td></tr>';
}
echo $htmlvar;
?>