<?php
include('../show.php');
$sn = $_GET['id'];
$sql = "SELECT * FROM `collegetable2` WHERE `sno`= $sn";
$query = mysqli_query($conn,$sql);
$rows = mysqli_fetch_assoc($query);
$name = $rows['FirstName']." ".$rows['MiddleName']." ".$rows['LastName'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cerificate</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto Slab', serif;
        }
        body{
            width: 100%;
            height: 100vh;
            background:rgba(6, 56, 255, 0.5);
        }
        h2{
            text-align:center;
            margin:1rem 0;
            color:rgb(6, 56, 255);
            text-transform:capitalize;
        }
        .wrapper{
            display: flex;
            justify-content: space-evenly;
        }
        .main{
            width: 32%;
            height: auto;
            margin-top: 5%;
            background:#fff;
            border-radius:10px;
            box-shadow: 0 0 10px 0 rgb(0, 0, 0);
            padding:0 0.3rem;
            padding-bottom:1rem;
        }
        .w1{
            display:flex;
            justify-content : space-evenly;
        }
        .ww1{
            margin-top:3%;
            width:47%;
        }
        label{
            margin-left:3%;
        }
        input{
            padding:0.4rem;
            border-radius:7px;
            width:95%;
            font-size:14px;
            font-weight:550;
            text-transform:capitalize;
            border:1px black solid;
            text-align:center;
        }
        #email{
            text-transform:none;
        }
        #btn{
            display:flex;
            justify-content:center;
        }
        #btn button{
            padding:0 1rem;
            color:#fff;
            border-radius:5px;
            background:green;
            margin:3% 0;
            font-weight: bolder;
        }
        #done{
            padding:0.7rem 1.6rem;
            color:blue;
            border-radius:5px;
            background:#fff;
            margin:auto;
            margin-left:1%;
            margin-top:3%;
        }
        #done a{
            text-decoration:none;
            color:blue;
            text-transform:capitalize;
            font-weight: bolder;
        }
        #btn1,#btn2{
            padding:0.3rem 1.2rem;
            margin:auto;
            color:#fff;
            background:green;
            border-radius:5px;
            margin-left:5%;
        }
        @media screen and (max-width:930px){
            .wrapper{
                flex-direction:column;
            }
            .main{
                margin-left:25%;
                width:55%;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper"> 
        <div class="main" id="ac">
            <!-------------------achievment_certificate STARTS---------------------- -->
            <form action="../form_certificate.php" method="post"  enctype ="multipart/form-data">
                <div class="content">
                    <div class="row">
                        <div class="heading">
                            <h2>Achievement_Certificate</h2>
                        </div>
                        <div>
                        <div class="w1">
                                <div class="ww1">

                                    <label for="name">Name</label><br>
                                    <input type="text" value="<?php echo $name;?>" name="name" id="name" placeholder="name" required><br>
                                </div>
                                <div class="ww1">
                                    <label for="father">Father's Name</label><br>
                                    <input type="text" value="<?php echo $rows['FatherName']?>" name="father" id="father" placeholder="email" required> <br>
                                </div>

                            </div>

                            <div class="w1">
                                <div class="ww1">
                                    <label for="email">Email</label><br>
                                    <input type="text" value="<?php echo $rows['email']?>" name="email" id="email" placeholder="email" required> <br>
                                </div>
                                <div class="ww1">
                                    <label for="">ContactNumber</label><br>
                                    <input type="number" value="<?php echo $rows['ContactNumber']?>" name="num" placeholder="num" required> <br>
                                </div>
                            </div>
                            
                            <div class="w1">
                                <div class="ww1">
                                    <label for="">pincode</label><br>
                                    <input type="number" value="<?php echo $rows['pincode']?>" name="pc" id="pc" placeholder="contact number" required> <br>
                                </div>
                                <div class="ww1">
                                    <label for="">EnrollmentNo</label><br>
                                    <input type="number" value="<?php echo $rows['EnrollmentNo']?>" name="en" id="en" placeholder="en" required> <br>
                                </div>
                            </div>

                            <div class="w1">
                                <div class="ww1">
                                    <label for="">Rollno</label><br>
                                    <input type="number" value="<?php echo $rows['RollNo']?>" name="rn" id="rn" placeholder="RollNo" required> <br>
                                </div>
                                <div class="ww1">
                                    <label for="">Department</label><br>
                                    <input type="text" value="<?php echo $rows['department']?>" name="department" id="dep" placeholder="Department" required> <br>
                                </div>
                            </div>

                            <div class="w1">
                                <div class="ww1">
                                    <label for="">Course</label><br>
                                    <input type="text" value="<?php echo $rows['course']?>" name="co" id="co" placeholder="Course" required><br>
                                </div>
                                <div class="ww1" id="btn">
                                    <button type="submit">send</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
            <!-------------------achievement_certificate ENDS---------------------- -->
        </div>
    </div>
    <button id="done"><a href="../status.php?id=<?php echo $rows['sno']; ?>">done</a></button>
</body>
</html>
