<?php include 'navBarIn.php'; ?>

<?php


if (!isset($_SESSION['isUserLoggedIn'])) {
  echo "<script>alert('Please signin to enter this page');</script>";
  echo "<script>window.location.href='signin.php ? user_not_loggedin';</script>";
}







$id = $_GET['id'];
$dataFetchQuery = "SELECT * FROM `resource` WHERE id = '$id'";
$run = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($run);

if($data['image'] != "")
{
    $dataimge = $data['image'];
};

if($data['pdf'] != "")
{
    $datapdf = $data['pdf'];
};

if($data['video'] != "")
{
    $datavideo = $data['video'];
};

?>

<style>
    .container h1{
        color:black;
    }
</style>

<link rel="stylesheet" href="style/resource.css">


<div class="container text-center mt-3">
    <?php
        echo "<h1 class='fw-bold'>$data[topic]</h1>
            <h6>Course Code: $data[course_title]</h6>
        <hr>

        <p id='myexample' hidden>$datavideo</p>
    
        <div class='w-100  m-auto mb-5'>
            <img src='$dataimge' alt='' class='imgview img-thumbnail border'>
        </div>

        <div>
            <a href='$datapdf' id='example' class='btn' download>$datapdf</a>
        </div>

        <div id='videoexample' style='margin-top:-4rem'>
        <video width='400' controls>
            <source src='$datavideo' 'type='video/mp4'>
        </video>        
        </div>
        
        ";
    ?>
</div>


<script>
  var text = document.getElementById("example").innerHTML;
  if(text == 'pdf/')
  {
    var word = 'pdf/';
    var newText = text.replace(word, "");
    document.getElementById("example").innerHTML = newText;

  } else{
    document.getElementById("example").style.backgroundColor = "#004643";
    document.getElementById("example").style.color = "white";
    document.getElementById("example").innerHTML = "Download PDF";
  }

  var textvideo = document.getElementById("myexample").innerHTML;
  if(textvideo == 'video/')
  {
    var word = 'video/';
    var newText = text.replace(word, "");
    document.getElementById("videoexample").style.display = "none";
  } 
  
</script>