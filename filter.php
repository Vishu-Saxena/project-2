<?php
include('show.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script2.js" defer></script>
    <title>data from db</title>
    <style>
        body{
            background: linear-gradient(rgba(96, 126, 248, 0.7),rgba(255, 90, 90,0.9));
            background-repeat:no-repeat;
            background-size: cover;
            height:100vh;
        }
        #filter{
           box-shadow: 0 0 10px 0 #fff;
           width:35%;
           height:40vh;
           margin:auto;
           background:rgb(248, 248, 248);
           border-radius:5px;
           padding-bottom:0.4rem;
           position:relative;
           top:25%;
           background:linear-gradient(rgba(255, 162, 178, 0.7),rgba(96, 126, 248, 0.7));;
       }
       h2{
           text-align:center;
           font-size: 1.8rem;
           color:black;
           padding:4% 0;
           text-transform:none;
           margin-left:3%;
           font-size:1.3rem;
           text-shadow: 1px 2px 2px gray;
       }
       form{
           margin-top:5%;
           border-radius:15px;
           
       }
       form div{
           display:flex;
           margin-left:15%;
           margin-top:1%;
       }
       form div div{
           width:50%;
           font-size:1.2rem;
           font-weight:800;
           text-transform:capitalize;
       }
       #btn{
           padding:0.4rem 1rem;
           color:#fff;
           background:blue;
           margin-left:42%;
           border-radius:5px;
           font-weight:bolder;
           margin-top:6%;
       }
       #a{
           color:green;
       }
       #p{
           color:blue;
       }
       #c{
           color:red;
       }
       #all{
           color:#fff;
       }

       @media screen and (min-width:1025px) {
           #filter{
               width: 40%;
               height:50vh;
           }
       }
       @media screen and (max-width:1024px) {
           h2{
               font-size:1.2rem;
               padding-bottom:2%;
           }
           form div div{
           font-size:1rem;
           }
           form div{
               margin-top:1%;
           }
       }
       @media screen and (max-width:800px) {
        #filter{
           width:40%;
        }
           h2{
               font-size:1rem;
               padding-top:0%:
           }
           form div div{
           font-size:0.9rem;
           }
           form div{
               margin-top:2%;
           }
           #btn{
               margin-top:9%;
               padding: 0.2rem 0.6rem;
           }
       }
       @media screen and (max-width:550px) {
           #filter{
               width:70%;
               height: 45vh;
           }
       }
       @media screen and (max-width:425px) {
           #filter{
               height:40vh;
           }
       }
       @media screen and (max-width:320px) {
           #filter{
               width:80%;
           }
           #filter div div{
               width:55%;
           }
           #filter div{
               margin-left:10%;
           }
           #btn{
               margin-left:34%;
           }
       }
    </style>
</head>
<body>
    <div id= "filter">
        <form action="table.php" method="post">
            <h2>Select status of certificates:-</h2>
            <div><div id="all">all</div><input type="radio" name="st" id="all" value="all" checked></div>
            <div><div id="a">alloted</div><input type="radio" name="st" id="alloted" value="alloted"></div>
            <div><div id="p">processing</div><input type="radio" name="st" id="processing" value="processing"></div>
            <div><div id="c">cancelled</div><input type="radio" name="st" id="cancelled" value="cancelled"></div>
            <button type="submit" id='btn'>Continue</button>
        </form>
    </div>
</body>
</html>