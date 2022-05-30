<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</html>
<?php
include('show.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $passwd = $_POST['password'];
}
$sql = "SELECT * FROM `admin2` WHERE email= '$email' && password='$passwd'"; 
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if($num==1){
    $login= true;
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['username']=$email;
    header("location:table.php");
}
else{
    echo'<div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>
      Invalid creadentials.
    </div>
  </div>';
}
?>