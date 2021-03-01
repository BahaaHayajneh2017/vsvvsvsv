<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$myfile=$_FILES['myupload'];
print($myfile['name']);
print($myfile['type']);
print($myfile['tmp_name']);
print($myfile['error']);
print($myfile['size']);
copy($myfile['tmp_name'],$myfile['name']);

}




?>




<!DOCTYPE html>
<html>
<head>
<meta name="author" content="Bahaa Hayajneh">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<meta charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery-3.5.1.slim.min.js"></script>
<script src="popper.min.js"></script>
<link rel="stylesheet" href="mystyle.css">
<style>

</style>

</head>

<body>


<br><br><br><br><br><br>


<div class="divsighn container-fluid bg-light">
<form method="POST" enctype="multipart/form-data">
<br><br><br><br><br><br>
    <div class="display-4 text-center">FORM REGISTER</div>
    
<input  placeholder="Enter Your User Name Here ...." name="myupload" type="file"><br><br>

<button style="width: 100%;" class="btn btn-primary">UPLOAD FILE</button>

</form>

</div>


</div>

</body>



</html>

