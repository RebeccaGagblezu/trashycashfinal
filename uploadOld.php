<?php


    var_dump(include_once('connection.php'));

   if(isset($_POST['save']))

            {

                // echo "entered";

                // var_dump($fname =mysqli_real_escape_string($db,$_POST['first_name']));
                var_dump($fname = $_POST['first_name']);

                var_dump($lname =$_POST['last_name']);
                var_dump($email =$_POST['email']);
                var_dump($mobile = $_POST['mobile']);
                var_dump($pname =$_POST['prod_name']);
                var_dump($pcat =$_POST['prod_cat']);
                /////////           image          //////////////////////
                $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                $filename = $_FILES["photo"]["name"];
                $filetype = $_FILES["photo"]["type"];
                $filesize = $_FILES["photo"]["size"];
                $folder="/xampp/htdocs/trashycash/uploads/";
        // $idd = var_dump('trashy_'.random_int(100, 999));
                $ext = pathinfo($filename, PATHINFO_EXTENSION);

            

                if (!$fname) {
                    echo "Enter your first name";
                }

                elseif (!$lname) {
                    echo "Enter your last name";
                }

                elseif (!$email) {
                    echo "Enter your email";
                }

                elseif (!$mobile) {
                    echo "Enter your phone number";
                }

                elseif (!$pname) {
                    echo "Enter product name";
                }

                elseif (!$pcat) {
                    echo "Enter product category";
                }

                if(!array_key_exists($ext, $allowed)){
                    echo "The image format".$ext. "is not allowed. Please upload an image with jpg,jpeg ,gif, png" ;
                }
                else{

                    echo "insertion here now";
                   var_dump(move_uploaded_file($_FILES["photo"]["tmp_name"], "$folder" . $_FILES["photo"]["name"])) ;

                                var_dump($sql = "INSERT INTO trash (firstname,lastname,phone,email,prodname,prodcat,prodimage,prodPath) VALUES ('$fname','$lname','$mobile','$email','$pname','$pcat', '$folder','$filename')"    )   ;

                                var_dump($result= $db ->query($sql)) ;


                
 }

         if($result== true){
                    echo "Upload is successful";
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


    <!-- // Verify file extension -->
    <!--                     
                        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
                        // Verify file size - 5MB maximum
                        // $maxsize = 5 * 1024 * 1024;
                        // if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
                        // Verify MYME type of the file
                        if(in_array($filetype, $allowed)){
                         // Check whether file exists before uploading it
                         if(file_exists("upload/" . $_FILES["photo"]["name"])){
                             echo $_FILES["photo"]["name"] . " is already exists.";
                                 } 
                                else{
                                move_uploaded_file($_FILES["photo"]["tmp_name"], "$folder" . $_FILES["photo"]["name"]);

                                $sql = "INSERT INTO trash (firstname,lastname,phone,email,prodname,prodcat,prodimage,prodPath) VALUES ('$fname','$lname','$mobile','$email','$pname','$pcat', '$folder','$filename')"   ;      
        
                    //$id = mysqli_insert_id($db);


                 var_dump($result= $db ->query($sql))   ;
            //var_dump($id =  $db->lastInsertId('upload'));

             // var_dump($sql1="INSERT INTO images(image_upload,image,name) VALUES ('$idd','$folder','$filename')");
             //     var_dump($result1 = $db->query($sql1));
                //echo "Your file was uploaded successfully.";
            


                if($result ){
                    echo "Upload is successful";
                    //header("Location: index.html");
                }
                else{
                    echo "SOMETHING WENT WRONG";
           
                                    } 
        } -->
<!-- } -->