<?php

function no_accent($str_accent) {
   $pattern = Array("/�/", "/�/", "/�/", "/�/", "/�/", "/�/", "/�/", "/�/", "/�/", "/�/", "/ /");
   // notez bien les / avant et apr�s les caract�res
   $rep_pat = Array("e", "e", "e", "c", "a", "a", "i", "i", "u", "o", "");
   $str_noacc = preg_replace($pattern, $rep_pat, $str_accent);
   return $str_noacc;
}


$uploaddir = '../../../../uploads/'; 
$file = $uploaddir . basename($_FILES['uploadfile']['name']);

$file = no_accent($file);
 
if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file)) { 
  //echo "success";
	echo basename($file);
} else {
	echo "error";
}
?>