<?php
    include('../show.php');
    $sn = $_GET['id'];
    //echo $sn;
    $status = "rejected";
    $sql = "SELECT * FROM `collegetable2` WHERE sno= '$sn' ";

    $sql2 = "UPDATE `collegetable2` SET `TransferCertificate`= '$status' WHERE sno = '$sn' ";

    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_assoc($result);
    $rowcheck= mysqli_num_rows($result);

    if($result2)
    {
        $email= $row['email'];
        $to = "$email";
        $subject = "mail from college";
        $name = $row['FirstName'] . " ".$row['LastName'];
        $message = "your applicatin for Transfer Certificate is rejected.";
        $message2 = "This is an autogenerated email please donot reply to it.";
        $txt =" Name = ". $name ."\r\n FatherName = " . $row['FatherName'] ."\r\n contact = " . $row['ContactNumber'] ."\r\n Email = " . $row['email'] ."\r\n Enrollment No = " . $row['EnrollmentNo'] ."\r\n College Rollno. = " . $row['RollNo'] ."\r\n course = " . $row['course'] ."\r\n department = " . $row['department'] ."\r\n applied for certificate = " . "Transfer Certificate"  . "\r\n " .  $message  . "\r\n " . $message2;
        $headers = "From: bhaskar acharya college of applied science";
        if($email!=NULL){
            mail($to,$subject,$txt,$headers);
            header("Location: ../table.php");
        }else{
            header("Location: ../crossed.html");
        }
    }
?>