
<?php
include('show.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $status = $_POST['status'];
    $id = $_POST['id'];
    $sql = "UPDATE `collegetable2` SET `status`='$status' WHERE `sno`= '$id' ";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("location:table.php");
    }else{
        echo "not done";
    }
}else{
    $ids = $_GET['id'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change status</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Roboto Slab', serif;
        }
        .bg{
            width: 100%;
            height: 100vh;
            border: 1px solid rgba(0,0,0,0.1);
            background: rgba(0,0,0,0.2);
        }
        
        .container{
            width: 50%;
            height: 45%;
            margin: auto;
            margin-top: 10%;
            background: #fff;
            box-shadow: 0 0 10px 0 rgb(0, 0, 0);
            
        }
        .content{
            margin-top: 0px;
        }
        .heading{
            background-color: blue;
            color: #fff;
            text-transform: capitalize;
            margin-top: 0px;
            padding: 1.1rem 0;
            font-size: 1rem;
            margin-bottom: 4%;
        }
        h1{
            margin-left: 3%;
            font-size: 1.6rem;
        }
        label{
            text-transform: capitalize;
            font-size: 1rem;
            font-weight: 900;
            margin-left: 4%;
            width: 10rem;
            padding-right: 2rem;
        }
        input[type=number]{
            width: 40%;
            padding: 0.5rem 0;
            margin-bottom: 5%;
            border-radius: 10px;
            margin-left: 3%;
            font-size: 1.1rem;
            border: blue 0.1pc solid;
            text-align: center;
        }
        ::placeholder{
            font-size: 1.1rem;
            font-weight: 900;
            text-align: center;
            color: black;
        }
        
        button{
            background: blue;
            padding: 0.5rem 1.5rem;
            border-radius: 8px;
            color: #fff;
            font-size: 1.3rem;
            font-weight: 1000;
            margin-left: 3%;
            margin-top: 6%;
        }
    </style>
</head>
<body>
    <form action="status.php" method="post">
        <div class="bg">
            <div class="container">
                <div class="content">
                    <div class="heading"><h1>change  status</h1></div>
                    <label for="id">ID</label>
                     <input type="number" name="id" id="id" value="<?php echo $ids?>" placeholder="ID" required><br>
                    <label for="processing" style="color: blue;">processing</label><input type="radio" name="status" id="processing" value="processing" required>
                    <label for="alloted" style="color: green;">alloted</label><input type="radio" name="status" id="alloted" value="alloted">
                    <label for="cancelled" style="color: red;">cancelled</label><input type="radio" name="status" id="cancelled" value="cancelled">
                    <br>
                    <button type="submit">save</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>

<?php
include('show.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $status = $_POST['status'];
    $id = $_POST['id'];
}

$sql = "UPDATE `mytable` SET `status`='$status' WHERE `sno`= '$id' ";
$result = mysqli_query($conn, $sql);
if($result){
    header("location:table.php");
}

?>
        