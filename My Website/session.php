<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $user="";$email="";
 session_start();
if(isset($_POST['btnlogin']))
{
$_SESSION['user']=$_POST['usesess'];
$_SESSION['email']=$_POST['emailsess'];

}
if(isset($_POST['btnget']))
{

    $user=$_SESSION['usesess'];
    $email=$_SESSION['emailsess'];

    print($user);
}

if(isset($_POST['p1']))
{
    header("location: file.php");
}


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
<div class=" container-fluid bg-light divsighn ">
<br><br><br>

<form method="POST" class="was-validated">
<div class="display-4 text-center">Sign Up Form</div>
<div class="form-group">
<label>User Name</label>
<input class="form-control"  placeholder="Enter your username here..." type="text" name="usesess" >
<div class="valid-feedback">Valid UserName</div>
<div class="invalid-feedback">Invalid UserName</div>
</div>
<div class="form-group">
<label>Email</label>
<input class="form-control" placeholder="Enter your email here..." type="email" name="emailsess" >
<div class="valid-feedback">Valid Email</div>
<div class="invalid-feedback">Invalid Email</div>
</div>


<button  style="width: 100%;" class="btn btn-primary" name="btnlogin">Login</button><br><br>
<button  style="width: 100%;" name="btnget" class="btn btn-success">Get Session</button><br><br>
<button style="width: 100%;" class="btn btn-danger" name="p1">Page 1</button><br><br>

</form>

</div>




</body>



</html>

