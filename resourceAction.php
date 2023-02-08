<?php
include 'config.php';


$title = $_POST['course_title'];
$topic= $_POST['topic'];
$description = $_POST['description'];
$image = $_FILES['image'];
$pdf = $_FILES['pdf'];
$pdf_name = $pdf['name'];
$pdf_tmp_name = $pdf['tmp_name'];
$pdf_size = $pdf['size'];
$pdf_error = $pdf['error'];

$imageLocation = $image['tmp_name'];
$imageName = $image['name'];

$imageDes = 'resourseImage/' . $imageName;

move_uploaded_file($imageLocation, $imageDes);


$pdf_ext = explode('.', $pdf_name);
$pdf_ext = strtolower(end($pdf_ext));

$allowed = array('pdf');

if (in_array($pdf_ext, $allowed)) {
    if ($pdf_error === 0) {
        if ($pdf_size <= 2097152) {
            $pdf_new_name = uniqid('', true) . '.' . $pdf_ext;
            $pdf_destination = 'pdf/' . $pdf_new_name;
            move_uploaded_file($pdf_tmp_name, $pdf_destination);

            $pdf = $pdf_destination;
            $pdf = mysqli_real_escape_string($conn, $pdf);

            $sql = "INSERT INTO `resource`(`course_title`, `topic`, `description`, `image`, `pdf`) VALUES ('$title','$topic','$description','$imageDes', '$pdf')";

            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Successfully Inserted')</script>";
                echo "<script>location.href = 'resource.php'</script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            } else {
                echo "<script>alert('File size is too big. Max size is 2 MB.')</script>";
                echo "<script>location.href = 'addResource.php'</script>";
            }
        } else {
            echo "<script>alert('Error uploading file. Please try again.')</script>";
            echo "<script>location.href = 'addResource.php'</script>";
        }
    } 