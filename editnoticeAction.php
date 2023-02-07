<?php
include 'config.php';
$id = $_POST['id'];


$title = $_POST['title'];
$description = $_POST['description'];
$image = $_FILES['image'];
$oldImage = $_POST['oldImage'];


$imageLocation = $image['tmp_name'];
$imageName = $image['name'];
$imageDes = "noticeImage/" . $imageName;


if (strlen($imageDes) > 10) {
    $updateQuery = "UPDATE `notice` SET `title`='$title',`image`='$imageDes',`description`='$description' WHERE id='$id'";
    move_uploaded_file($imageLocation, $imageDes);
} else {

    $updateQuery = "UPDATE `notice` SET `title`='$title',`image`='$oldImage',`description`='$description' WHERE id='$id'";
    move_uploaded_file($imageLocation, $oldImage);
}


if (!mysqli_query($conn, $updateQuery)) {

    die("Not updated!");
} else {

    echo "<script>alert('Data updated!!')</script>";
    echo "<script>location.href='notice.php'</script>";
}
