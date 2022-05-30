<?php
$name = $_POST['name'];
$email = $_POST['email'];
 require("fpdf.php");
 $pdf = new FPDF();
 $pdf -> AddPage();

 $pdf-> SetFont("Arial","" ,15);
 $pdf -> Cell(0,10,"Transfer Certificate",1,1,'C');
 $pdf -> Cell(95,10,"name     $name",1,0);
 $pdf -> Cell(95,10,"email    $email",1,1);

 $pdf -> Cell(95,10,$name,1,0);
 $pdf -> Cell(95,10,$email,1,1);
 $pdf-> output();
?>