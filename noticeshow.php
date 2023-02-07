<?php include 'navBarIn.php'; ?>

<?php


if (!isset($_SESSION['isUserLoggedIn'])) {
  echo "<script>alert('Please signin to enter this page');</script>";
  echo "<script>window.location.href='signin.php ? user_not_loggedin';</script>";
}

$id = $_GET['id'];

$dataFetchQuery = "SELECT * FROM `notice` WHERE id = '$id'";
$run = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($run);


if($data['image'] != "")
{
    $dataimage = $data['image'];
}


?>

<link rel="stylesheet" href="style/notice.css">


<link rel="stylesheet" href="style/resource.css">
  
<div class="container">
    <?php
    echo "<div class='jumbotron'>
        <h1>$data[title]</h1>
        <hr>
        <div>
            <img src='$dataimage' alt=''>
        </div>
        <hr>
        <div>
            <p>$data[description]</p>
        </div>
    </div>

    </div>";

    ?>


  