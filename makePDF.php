<?php

// Load Composer's autoloader
require 'vendor/autoload.php';

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
   "you’re more fun than bubble wrap.",
   "you’re the person everyone wants on their team.",
   "you embody all the best qualities of each Hogwarts house, rolled into one.",
   "you're strong.  Never change that about you.",
   "you're a savvy problem-solver.",
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

$randomNumImg = rand(0,10);
$randomNumbComp = rand(0,9);
 
//grab variables from form
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$compliment = '<h2>' . $fname .', '. $comps[$randomNumbComp] .'</h2';

$jacobComp = '<h2>' . $fname .', '. $jacobComps[0] .'</h2';



//create new instance of Mdpf class
$mpdf = new \Mpdf\Mpdf();

$data = '';

//$data .= '<h1>Your Deets</h1>';

//add data
//$data .= '<strong>First Name: </strong>' . $fname . '<br />';
//$data .= '<strong> Last Name: </strong>' . $lname . '<br />';

if ($messgae) {
  $data .= '<br /><strong>Message</strong></br />' . $message;
}
if ($fname == "Jacob" and $lname = "Foster") {
  $data .= $jacobComp;
}
else {
  $data .= $compliment;
}

      
 



$mpdf->imageVars['myvariable'] = file_get_contents($imgs[$randomNumImg]);
$img_html = '<img text-align="center" src="var:myvariable" />';
$mpdf->WriteHTML($img_html);


// Write PDF
$mpdf->WriteHTML($data);

// Output to browser
$mpdf->Output();



?>
