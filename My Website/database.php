<?php
$text="";
 
if($_SERVER['REQUEST_METHOD']=='POST')
{
if(isset($_POST['regbase']))
{
$host="localhost";
$user="root";
$password="";
$db="testdata";
$conn = mysqli_connect($host,$user,$password,$db);

$insert="insert into login values('Ali Hayajneh','123456','Bahaahayajneh3@gmail.com')";
$update="update login set Email='bahaahayajneh123@gmail.com' where Username='Bahaa Hayajneh'";
$delete="delete from login   where Username='Bahaa Hayajneh'";
$select="select *from login";
$query=mysqli_query($conn,$select);

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

<input id="myInput" class="form-control" placeholder="Search..." name="myInput" type="text">

  

  <table id="myTable" class="table table-hover table-striped border">
  <tr class="bg-dark text-light">
  <th>User Name</th>
  <th>Password</th>
  <th>Email</th>
  </tr>
  <?php
  $tbl=mysqli_num_rows($query);
  print("The Number of rows is  : ".$tbl);
  while($row=mysqli_fetch_array($query))
  {
    
print("<tr>");
print("<td>". $row['Username'] ."</td>");
print("<td>". $row['Password'] ."</td>");
print("<td>". $row['Email'] ."</td>");
print("</tr>");
  }
?>
</table>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<div >
<form method="POST">
<br><br><br><br><br><br>
    <div class="display-4 text-center">FORM REGISTER</div>
    <label>UserName</label>

<br><br>
<tr>


</tr>
<button name="regbase" style="width: 100%;" class="btn btn-primary">Register</button>

</form>

</div>


</div>

</body>



</html>

