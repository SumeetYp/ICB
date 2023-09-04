<?php
    include '../config.php';
    $username = $_GET['username']; // User name
    $email = $_GET['email']; // User email
    $caption = $_POST['caption']; // Caption of post
    $dateposted = date("Y-m-d"); // Date the post was made
    $file = $_FILES['file']; // File recieved variable
    $postfile = "../post-pics/".$email."/".$file['file']['name']."-".time(); //File path variable
    
    // fun uploadImage($file, $userEmail){
    //     include '../config.php';

    //     $fileName = 
    // }

    function uploadPost($file, $userEmail){
        include '../config.php';

        $fileName = $_FILES['file']['name'];    // File name
        $fileTmpName = $_FILES['file']['tmp_name']; // Temporary name of file
        $fileSize = $_FILES['file']['size']; // File Size in bytes
        $fileSizeKb = round($fileSize/1024); // Rounding the file size
        $fileError = $_FILEs['file']['error'];
        $fileType  = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowedExt = array('png', 'jpg', 'jpeg');

        $userFolder = "../../post-pics/".$userEmail."/";
        if (in_array($fileActualExt, $allowedExt)){
            if($fileError === 0){
                if($fileSizeKb<2048){
                    if(!is_dir($userFolder)){
                        mkdir($userFolder, 0755);
                    }
                    $newfileName = time().'-'.$fileName.".".$fileActualExt;
                    $fileDest = $userFolder.$newfileName;
                    $fileDestinationDb = "../post-pics/".$userEmail."/".$newfileName;
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$fileDest)) {  
                        // echo "File uploaded successfully!";  
                        $updateFilePath = "UPDATE publicstory SET postfile='$fileDestinationDb' WHERE userEmail='$userEmail'";
                        $result = mysqli_query($mysql, $updateFilePath);
                        header("Location: ../home.php");

                    } else{  
                        // echo "Sorry, file not uploaded, please try again!";  
                        header("Location: ../error.php");
                    }  
                }else{
                    echo 'Your files size is too big!';
                }
            }else{
                echo "Error in uploading file";
            }
        }
        else{
            echo 'You cannot upload files of this type!';
        }
    }

    $sql = "INSERT INTO publicstory (username, userEmail, caption, dateposted) VALUES ('$username', '$email', '$caption', '$dateposted')";
    $resultStory = mysqli_query($mysqli, $sql) or die ("SQL Failed");
    

    if($_FILES['file']['error']!=4){
        echo 'isset';
        print_r($_FILES['file']);
        // Checking if the same file exists
        // $statusquery = $mysqli->query("SELECT postfile FROM publicstory where username='".$username."' and postfile=".$postfile."';");
        // $statusPost = $statusquery->fetch_assoc();
        // if($statusPost!=NULL){
        //     echo 'You posted the same post!';
        // }else{
            uploadPost($file, $email);
        // }
    }


   
    mysqli_close($mysqli);
    header("Location: ../home.php");
?>