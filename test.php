<?php


header('content-type:image/jpeg');
//$image=imagecreatefromjpeg("certificate.jpg");




require('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->Image("certificate.jpg",0,0,210,150);
$pdf->Output();
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
$mail->addAddress("mansisaxena670@gmail.com");
$mail->isHTML(true);
$mail->Subjet="Certificate Generated";
$mail->Body="Certificate Generated";
$mail->addAttachment("certificate/1588786846.pdf");
$mail->SMTPOptions=array("ssl"=>array(
    "verify_peer"=>false,
    "verify_peer_name"=>false,
    "allow_self_signed"=>false,
));
/*if($mail->send()){
    echo "Send";
}else{
    echo $mail->ErrorInfo;
}*/
?>