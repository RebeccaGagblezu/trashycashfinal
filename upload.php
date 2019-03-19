<?php

//echo "you r here";

    include_once('connection.php');

   if(isset($_POST['save']))

            {

                // echo "entered";

                // var_dump($fname =mysqli_real_escape_string($db,$_POST['first_name']));
               $fname= $_POST['first_name'];
               $fname = mysqli_real_escape_string($db,$fname);

               $lname =$_POST['last_name'];
                $email =$_POST['email'];
                $mobile = $_POST['mobile'];
                $pname =$_POST['prod_name'];
                $pcat =$_POST['prod_cat'];
                var_dump($location =$_POST['Tralocation_name']) ;
                $location = mysqli_real_escape_string($db, $location);
                /////////           image          //////////////////////
                $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                $filename = $_FILES["photo"]["name"];
                $filetype = $_FILES["photo"]["type"];
                $filesize = $_FILES["photo"]["size"];
                $folder="uploads/";
        // $idd = var_dump('trashy_'.random_int(100, 999));
                $ext = pathinfo($filename, PATHINFO_EXTENSION);

                do {
                var_dump($random_number = mt_rand());
                $query_object = mysqli_query($db, "SELECT 1 FROM my_table WHERE rand_num = $random_number");
                $query_record = mysqli_fetch_array($query_object);
                if(! $query_record) {
                 break;
                }
                } while(1);

               var_dump($random_number = 'tras'.$random_number) ;
            

                if (!$fname) {
                    echo "Enter your first name";
                    return;
                }

                elseif (!$lname) {
                    echo "Enter your last name";
                    return;
                }

                elseif (!$email) {
                    $email = "none";

                }

                elseif (!$mobile) {
                    echo "Enter your phone number";
                    return;
                }

                elseif (!$pname) {
                    echo "Enter product name";
                    return;
                }

                elseif (!$pcat) {
                    echo "Enter product category";
                    return;
                }
                elseif (!$location) {
                    echo "Enter your location";
                    return;
                }

                if(!array_key_exists($ext, $allowed)){
                    echo "The image format ".$ext. " is not allowed. Please upload an image with jpg,jpeg ,gif, png" ;
                }
                else{

                    
                  move_uploaded_file($_FILES["photo"]["tmp_name"], "$folder" . $_FILES["photo"]["name"]);

                             var_dump($sql = "INSERT INTO trash ( refID,firstname,lastname,phone,email,prodname,prodcat,prodimage,prodPath) VALUES ('$random_number','$fname','$lname','$mobile','$email','$pname','$pcat', '$folder','$filename')"     )   ;

                           var_dump($result= $db ->query($sql) ) ;


                
 }

         if($result == true){
                    // echo "<script type='text/javascript'>alert(\"Upload is successful\");
                    // window.location.href='index.html';
                    // </script>" ;
                    //header("Location: index.html");
                }
                else{
                    echo "Cannot upload";
           
                      } 
        }

        else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
   
    

?>


  