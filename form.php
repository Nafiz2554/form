 <?php
   if(isset($_POST['btn'])){
     $name = $_POST['name']; 
     $subject = $_POST['subject']; 
     $email = $_POST['email']; 
     $message = $_POST['message']; 
    //Error checking
     $error = [];

     if (empty($_POST['name'])){
         $error['name']= 'Insert Your Name';
     }
     if (empty($_POST['subject'])){
        $error['subject']= 'Insert Your subject';
    }
    if (empty($_POST['email'])){
        $error['email']= 'Insert Your Email';
    }
    if (empty($_POST['message'])){
        $error['message']= 'Insert Your Message';
    }
    //Mail
    $to='fuadnafiz2554@gmail.com';
    $from='From'.$email;
    $subject='Subject'.$subject;
    $body='Name: '.$name.'\n Subject: '.$subject.'\n Email: '.$email.'\n
    Message: '.$message;

    mail($from, $subject, $body);
 
   }
?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Form</title>
     <link rel="stylesheet" href="style.css">
 </head>
 <body>
     <div class="main">
         <form action="" method="POST">
            <h2>Contact Form</h2>
             <div class="single-form">
                 <label>NAME</label>
                 <input type="text" name="name" placeholder="Your Name" value="
                 <?php
                 if(isset($name)) echo $name;
                 ?>"
                 >
                 <span>
                     <?php
                     if(isset($error['name'])){
                         echo $error['name'];
                     }
                     ?>
                 </span>
             </div>
             <div class="single-form">
                 <label>SUBJECT</label>
                 <input type="text" name="subject" placeholder="Your subject" value="
                 <?php
                 if(isset($subject)) echo $subject;
                  ?>"
                 >
                 <span>
                     <?php
                     if(isset($error['subject'])){
                         echo $error['subject'];
                     }
                     ?>
                 </span>
             </div>
             <div class="single-form">
                 <label>EMAIL</label>
                 <input type="email" name="email"placeholder="Your email" value="
                 <?php
                 if(isset($email)) echo $email;
                  ?>"
                  >
                 <span>
                     <?php
                     if(isset($error['email'])){
                         echo $error['email'];
                     }
                     ?>
                 </span>
             </div>
             <div class="single-form">
                 <label>MESSAGE</label>
                 <textarea name="message" placeholder="Write your message" value="
                 <?php
                 if(isset($message))  echo $message;
                  ?>"
                 ></textarea>
                 <span>
                     <?php
                     if(isset($error['message'])){
                         echo $error['message'];
                     }
                     ?>
                 </span>
             </div>
             <div class="single-form">
                 <input type="submit" value="Send Message" name="btn">
             </div>

         </form>

     </div>
     
 </body>
 </html>