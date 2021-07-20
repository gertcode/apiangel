<?php
if(!empty($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {

$extension = pathinfo($_FILES['userImage']['name']); 
$extension = ".mbz"; 
$info = @getimagesize($_FILES['userImage']['tmp_name']); 
$var_rand=rand(10000,999999)* rand(10000,999999); 
$nombre_tem=md5($var_rand.$_FILES['userImage']['name']); 
$nombre=$nombre_tem.$extension; 
//move_uploaded_file($_FILES['Filedata']['tmp_name'], 'imagenes/a/'.$nombre); 

$sourcePath = "";//$_FILES['userImage']['tmp_name'];
$targetPath = "images/".$_FILES['userImage']['name'];
if(move_uploaded_file($_FILES['userImage']['tmp_name'], 'images/'.$nombre)) {

}
}
}
?>