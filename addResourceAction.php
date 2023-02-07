<?php
    if(isset($_POST['submit'])){
        $file = $_FILES['file'];

        // $fileName = $_FILES['file']['name'];
        // $fileTmpName = $_FILES['file']['tmp_name'];
        // $fileSize = $_FILES['file']['size'];
        // $fileError = $_FILES['file']['error'];
        // $fileType = $_FILES['file']['type'];

        #num of files
        $num_of_img = count($file['name']);

        for($i = 0; $i < $num_of_img; $i++){
            $image_name = $file['name'][$i];
            $image_name = $file['tmp_name'][$i];
            $image_name = $file['error'][$i];

            #if there is no error occur while uploading
            if($error === 0){
                #get img ext store in var
                $img_ext = pathinfo($image_name, PATHINFO_EXTENSION);
                echo $img_ex. "<br>";
            } else {
                $em = "unknown error occur while uploading";
            }
        }
        


        // $fileExt = explode('.', $fileName);
        // $fileActualExt = strtolower(end($fileExt));

        // $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        // if(in_array($fileActualExt, $allowed)){
        //     if($fileError === 0){
        //         if($fileSize < 5000000) {
        //             $fileNameNew = uniqid('', true).".".$fileActualExt;
        //             $fileDestination = 'uploads/'.$fileNameNew;
        //             move_uploaded_file($fileTmpName, $fileDestination);
        //             header("Location: addResource.php?upload_success");
        //         } else {
        //             echo "Your file is too large!";
        //         }
        //     } else {
        //         echo "There was an error uploading your file!";
        //     }
        // } else {
        //     echo "you cannot upload files of this type!";
        // }
    }
?>