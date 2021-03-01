<?php
 $name="";$email="";$password="";$country="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
 
  if(isset($_POST['username']))
{
$name=$_POST['username']."<br>";
}
if(isset($_POST['email']))
{
$email=$_POST['email']."<br>";
}
if(isset($_POST['password']))
{
$password=$_POST['password']."<br>";
}
if(isset($_POST['country']))
{
$country=$_POST['country']."<br>";
}
print($name."<br>"."     ".$email."<br>"."     ".$password."<br>"."     ".$country."<br>"."     ");

}

















?>
<?php
include 'file.php';

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
<input class="form-control"  placeholder="Enter your username here..." type="text" name="username" required>
<div class="valid-feedback">Valid UserName</div>
<div class="invalid-feedback">Invalid UserName</div>
</div>
<div class="form-group">
<label>Email</label>
<input class="form-control" placeholder="Enter your email here..." type="email" name="email" required>
<div class="valid-feedback">Valid Email</div>
<div class="invalid-feedback">Invalid Email</div>
</div>
<div class="form-group">
<label>Password</label>
<input class="form-control" placeholder="Enter password here..." type="password" name="password" required>
<div class="valid-feedback">Valid password</div>
<div class="invalid-feedback">Invalid password</div>
</div>
<label>Country</label>
<select class="form-control" name="country" required>
<option value="Jordan">Jordan</option>
<option value="egypt">Egypt</option>
<option value="iraq">Iraq</option>




</select><br><br><br>
<button  style="width: 100%;" class="btn btn-primary">Sign Up</button><br><br>
<button type="reset" style="width: 100%;" class="btn btn-success">Clear</button>

</form>

</div>





</body>



</html>

