<?php 

if(isset($_POST["firstname"] )&& isset($_POST["lastname"] )&& isset($_POST["conEmail"] )&& isset($_POST["message"])){

   var_dump($firstname = $_POST['firstname']);
    $lastname = $_POST['lastname'];
    var_dump($vistor_email = $_POST['conEmail']) ;
    var_dump($message = $_POST['message']) ;

    $email_from ='Trashycash.com';

    $email_subject = "New Contact Form Submission";

    $email_body = "Name : $name.\n".
                  "Email : $vistor_email.\n".
                  "Message : $message.\n";

$to = "rebeccagagblezu@gmail.com";

$headers = "From: $email_from \r\n";

$headers.="Reply-To: $vistor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");
}
// echo "here";
//   if (isset($_POST["sendCon"])) {
//     var_dump($firstname = $_POST['firstname']);
//     $lastname = $_POST['lastname'];
//    var_dump($email = $_POST['subject']) ;
//    var_dump($message = $_POST['message']) ;
//     $subject = 'Trashy cash contact form';
//    var_dump($from = 'Trashy cash') ; 
//     $to = 'rebeccagagblezu@gmail.com'; 
    
    
//   var_dump($body = "From: $firstname\n $lastname\n E-Mail: $email\n Message:\n $message") ;
 
//     // Check if name has been entered
//     if (!$firstname) {
//       $errName = 'Please enter your firstname';
     
//     }

//     elseif (!$lastname) {
//       $errName = 'Please enter your lastname';
      
//     }
    
//     // Check if email has been entered and is valid
//     elseif (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
//       $errEmail = 'Please enter a valid email address';
     
//     }
//     //var_dump('this an error4');
//     //Check if message has been entered
//     elseif (!$_POST['message']) {
//       $errMessage = 'Please enter your message';
//     }
//     //Check if simple anti-bot test is correct
//     // if ($human !== 5) {
//     //   $errHuman = 'Your anti-spam is incorrect';
//     // }
//     else{
//           var_dump(mail ($to, $subject, $body, $from));
//           echo "Message sent";

//     }
//   }
 
// If there are no errors, send the email
// if (!$errFName && !$errLName && !$errEmail && !$errMessage ) {
//   if (mail ($to, $subject, $body, $from)) {
//     $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
//   } else {
//     $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
//   }
// }

//   }


//include_once('../connection.php');

// $email = $_POST['email'];
// $firstname = $_POST['firstname'];
// $lastname = $_POST['lastname'];
//  $subjectname = $_POST['lastname'];
//  $text =$_POST['message'];


// if (isset($_POST['submitted'])) {
// // Initialize error array.
//   $errors = array();
//   // Check for a proper First name
//   if (!empty($_POST['firstname'])) {
//   $firstname = $_POST['firstname'];
//   $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
//   if (preg_match($pattern,$firstname)){ $firstname = $_POST['firstname'];}
//   else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
//   } else {$errors[] = 'You forgot to enter your First Name.';}
  
//   // Check for a proper Last name
//   if (!empty($_POST['lastname'])) {
//   $lastname = $_POST['lastname'];
//   $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
//   if (preg_match($pattern,$lastname)){ $lastname = $_POST['lastname'];}
//   else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
//   } else {$errors[] = 'You forgot to enter your Last Name.';}

//   //check email

  

//   if (!empty($_POST['email'])) {
//   $email = $_POST['email'];
//   $pattern = "/([w-]+@[w-]+.[w-]+)/";// This is a regular expression that checks if the name is valid characters
//   if (preg_match($pattern,$email)){ $email = $_POST['email'];}
//   else{ $errors[] = 'Enter a valid email address.';}
//   } else {$errors[] = 'You forgot to enter your Last Name.';}
  
  //Check for a valid phone number
  // if (!empty($_REQUEST['phone'])) {
  // $phone = $_REQUEST['phone'];
  // $pattern = "/^[0-9\_]{10,20}/";
  // if (preg_match($pattern,$phone)){ $phone = $_REQUEST['phone'];}
  // else{ $errors[] = 'Your Phone number can only be numbers.';}
  // } else {$errors[] = 'You forgot to enter your Phone number.';}
  
  // if (!empty($_REQUEST['redmapleacer']) || !empty($_REQUEST['chinesepistache']) || !empty($_REQUEST['raywoodash'])) {
  // $check1 = $_REQUEST['redmapleacer'];
  // if (empty($check1)){$check1 = 'Unchecked';}else{$check1 = 'Checked';}
  // $check2 = $_REQUEST['chinesepistache'];
  // if (empty($check2)){$check2 = 'Unchecked';}else{$check2 = 'Checked';}
  // $check3 = $_REQUEST['raywoodash'];
  // if (empty($check3)){$check3 = 'Unchecked';}else{$check3 = 'Checked';}
  // } else {$errors[] = 'You forgot to enter your Phone number.';}
  // }
  //End of validation 

  //send email if validation passes
//   if (isset($_POST["submit"])) {
//   if (empty($errors)) { 
//   $from = "From: Trash cash"; //Site name
//   // Change this to your email address you want to form sent to
//   $to = "rebeccagagblezu@gmail.com"; 
//   $subject = "Subject: " . $subjectname . "";
  
//   $message = "Message from " . $firstname . " " . $lastname . " 
//    text: " . $text ."" ;
//   // Red Maple Acer: " . $check1 ."
//   // Chinese Pistache: " . $check2 ."
//   // Raywood Ash: " . $check3 ."";
//   mail($to,$subject,$message,$from);
//   header('Location: index.html');
//   }
// }


 
//   //Print Errors
//   if (isset($_POST['submit'])) {
//   // Print any error messages. 
//   if (!empty($errors)) { 
//   echo '<hr /><h3>The following occurred:</h3><ul>'; 
//   // Print each error. 
//   foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
//   echo '</ul><h3>Your mail could not be sent due to input errors.</h3><hr />';}
//    else{echo '<hr /><h3 align="center">Your mail was sent. Thank you!</h3><hr /><p>Below is the message that you sent.</p>'; 
//   echo "Message from " . $firstname . " " . $lastname . " 
// text: ".$text." " ;
//   }
//   }
// }
// //End of errors array
 ?>