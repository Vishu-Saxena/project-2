<?php
include('show.php');
if(isset($_POST['name'])){
	$font= __DIR__.'/AGENCYR.TTF';
	//header('content-type:image/jpeg');
	$image=imagecreatefromjpeg("certificate.jpg");
	//echo $image;
	$color=imagecolorallocate($image,19,21,22);
	//$name="Vishal Gupta";
	imagettftext($image,50,0,365,420,$color,$font,$_POST['name']);
	$date="6th may 2020";
	imagettftext($image,20,0,450,595,$color,$font,$date);
	$file=time();
	$file_path="certificate/".$file.".jpg";
	$file_path_pdf="certificate/".$file.".pdf";
	imagejpeg($image,$file_path);
	imagedestroy($image);

	require('fpdf.php');
	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->Image($file_path,0,0,210,150);
	$pdf->Output($file_path_pdf,"F");

	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer();
	$mail->isSMTP();
	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="vishusaxena3110@gmail.com";
	$mail->Password="saxena3110";
	$mail->setFrom("vishusaxena3110@gmail.com");
	$mail->addAddress($_POST['email']);
	$mail->isHTML(true);
	$mail->Subjet="Transfer Certificate";
	$mail->Body="Certificate Generated";
	$mail->addAttachment($file_path_pdf);
	$mail->SMTPOptions=array("ssl"=>array(
		"verify_peer"=>false,
		"verify_peer_name"=>false,
		"allow_self_signed"=>false,
	));

	$rollno = $_POST['rn'];

	if($mail->send()){
		//making changes is status of certificate only for tc
		$sql = "UPDATE `collegetable2` SET `TransferCertificate`='alloted' WHERE RollNo = '$rollno' ";
		$result = mysqli_query($conn, $sql);
		if($result){
			header("Location:checked.html");
		}
		
	}else{
		header("Location:crossed.html");
	}
}
?> 
