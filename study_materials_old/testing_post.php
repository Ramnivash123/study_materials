
<head>
<title>study_materials</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="styles.css">
<style>
        .centered-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>








<?php
require_once("db.php");


$su1=$_POST['su1'];

$cl1 = $_POST['cl1'];

$un1=$_POST['un1'];

$cp1=$_POST['cp1'];






$img=$_FILES['img']['name'];
$img1=$_FILES['img']['size'];
$img2=$_FILES['img']['tmp_name'];
$dir="materials/".$img;
$im=move_uploaded_file($img2,$dir);
if($im)

{
	echo " ";
	echo " ";
}
else{
	echo "sorry";
	echo " ";
}
$status=1;

$sql="INSERT INTO `study_materials`(`subject`, `grade`, `unit`, `chapter`, `material`, `status`) 
VALUES ('$su1','$cl1','$un1','$cp1','$img','$status')";
$qry=mysqli_query($conn,$sql);


if($qry)
{
	echo '<div class="centered-content"><strong>UPLOADED SUCCESSFULLY</strong></div>';
	echo " ";
	
}
else{
	echo"sorry";
	echo" ";

}



?>