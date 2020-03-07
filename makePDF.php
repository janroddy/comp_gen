<?php
require('fpdf/fpdf.php');


$imgs = array(
  "img/shark.jpg", 
  "img/lion.jpg", 
  "img/cat.jpg", 
  "img/sheep.jpg", 
  "img/fox.jpg", 
  "img/dog.jpg", 
  "img/cat.jpg",
  "img/cheetah.jpg",
  "img/dog2.jpg",
  "img/cheetah.jpg",
  "img/zebra.jpg"
);

$comps = array(
  "your cousins refer to you as the cool cousin.", 
  "your prom date still thinks about you.",
   "I bet you make babies smile.", 
   "you are more fun than bubble wrap.",
   "you are the person everyone wants on their team.",
   "you embody all the best qualities of each Hogwarts house, rolled into one.",
   "you are strong.  Never change that about you.",
   "you are savvy problem-solver.",
   "is there anything you CAN’T do?",
   "If you were cloned, you'd be the better looking one."
 );

$jacobComps = array (
"Jan LOVES YOU!",
"You don't look too funny in a gi.",
"Your ears could be uglier",
"Your lasso/ spider guards are improving.",
"You're a great partner"
);


$randomNumImg = rand(0,9);
$randomNumbComp = rand(0,9);
$randJacob = rand(0,4);
 
//grab variables from form
$fname = $_POST['fname'];
$lname = $_POST['lname'];

$compliment =  $fname .', '. $comps[$randomNumbComp];

$jacobComp = $fname .', '. $jacobComps[$randJacob];


$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Image($imgs[$randomNumImg],10,10,-300);
$pdf->SetXY(50, 100);


$pdf->SetY(-5);
      // Arial italic 8
$pdf->SetFont('Arial','B',16);
      // Page number
$pdf->Cell(20, 20,$compliment);
$pdf->Output();
?>
