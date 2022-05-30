<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
  .alert{
    display:flex;
    justify-content:space-between;
  }
  
  a{
    text-decoration:none;
    color:black;
  }
</style>
</html>
<?php
  include('show.php');
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $npassword = $_POST['npassword'];
    $cnpassword = $_POST['cnpassword'];
  }
  $sql = "SELECT * FROM `admin2` WHERE `email` = '$email'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
    if($num==1){
      $row = mysqli_fetch_assoc($result);
      error_reporting(0);
      if($row['password']==$password){
        if($npassword == $cnpassword){
          $sql2 = "UPDATE `admin2` SET `password` ='$npassword' WHERE `email` = '$email'";
          $result2 = mysqli_query($conn, $sql2);
          if($result2){
            echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Password changed successfuly.</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><a href="signin.html">ok</a></span>
            </button>
          </div>';
          }else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Password not changed successfuly.</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><a href="changepasswrd.html">ok</a></span>
            </button>
          </div>';
          }
        }else{
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>confirm password doesnot match.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"><a href="changepasswrd.html">ok</a></span>
        </button>
      </div>';
        }
      }else{
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Previous Password match not found please enter right password.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"><a href="changepasswrd.html">ok</a></span>
        </button>
      </div>';
      }
    }else{
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>wrong email entered.</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"><a href="changepasswrd.html">ok</a></span>
      </button>
    </div>';
    }
?>