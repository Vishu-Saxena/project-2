<?php
include('status.php');
if($status == "alloted"){
    $sql2 = "SELECT * FROM `mytable` WHERE `sno`= $id";
    $result1 = mysqli_query($conn, $sql2);
    //$msg = "are alloted \r\n you can collect it from college.";
    while($row = mysqli_fetch_assoc($result1)){
        $name = $row['FirstName']. $row['MiddleName'].$row['LastName'];
        $fathername = $row['FatherName'];
        $contact = $row['ContactNumber'];
        $email =$row['email'];
        $pin = $row['pincode'];
        $en = $row['EnrollmentNo'];
        $rn = $row['RollNo'];
        $dep = $row['department'];
        $course = $row['course'];
        $cer = $row['certificate'];
        echo $cer;
        if($cer == "Marksheet")
        {?>
            <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                    <title>marksheet</title>
                </head>
                <body>
                    <div class="cont">
                        <form action="status.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col">
                                    <label for="marksheet">attach marksheet</label><input type="file" name="marksheet" id="marksheet" placeholder="File">
                                    <br>
                                    <button type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </body>
              
                </html>
                <?php
                    $filenameee =  $_FILES['file']['name'];
                    $fileName = $_FILES['file']['tmp_name'];
                    $subject ="marksheet";
                    $fromname ="BCAS";
                    $fromemail = 'vishusaxena3110.com'; 
                    $mailto = '$email';
                    $content = file_get_contents($fileName);
                    $content = chunk_split(base64_encode($content));
                    $separator = md5(time());
                    // carriage return type (RFC)
                    $eol = "\r\n";
                    // main header (multipart mandatory)
                    $headers = "From: ".$fromname." <".$fromemail.">" . $eol;
                    $headers .= "MIME-Version: 1.0" . $eol;
                    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
                    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
                    $headers .= "This is a MIME encoded message." . $eol;
                    $body = "--" . $separator . $eol;
                    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
                    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
                    //$body .= $message . $eol;
                    // attachment
                    $body .= "--" . $separator . $eol;
                    $body .= "Content-Type: application/octet-stream; name=\"" . $filenameee . "\"" . $eol;
                    $body .= "Content-Transfer-Encoding: base64" . $eol;
                    $body .= "Content-Disposition: attachment" . $eol;
                    $body .= $content . $eol;
                    $body .= "--" . $separator . "--";
                    //SEND Mail
                    if (mail($mailto, $subject, $body, $headers)) {
                            /*echo '<div class="alert alert-success" role="alert">
                            Certificate has been sent succussefully!
                        </div>';*/
                        header("Location:checked.html");
                        
                    }else{
                        header("Location:crossed.html");
                    }
                ?>
        <?php
        }
        ?>
    <?php   
    }
   ?>
<?php   
}
?>