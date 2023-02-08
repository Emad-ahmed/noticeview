<?php include 'navBarIn.php'; ?>

    <?php

    $id = $_GET['id'];
    $datafetchquery = mysqli_query($conn, "SELECT * FROM `faculty` WHERE id = '$id'");
    $data = mysqli_fetch_array($datafetchquery);
    $name = $data['name'];

    ?>

<style>
  .col-lg-4
  {
    margin-bottom: 2rem;
  }
  .card-block
  {
    height:10rem !important;
    width:100% !important;
    padding-left: 1rem;
 
  }
  .resource
  {
    text-decoration:none;
  }
  .card h3, h6{
    color:black;
  }
</style>
  
    <link rel="stylesheet" href="style/style.css">
    

    <?php
    echo "<div class='container bg-light p-3' width='100%'>
    <div class='row'>
        <img class='img-thumbnail col-4 col-lg-2' src='$data[image]'
            alt='' srcset=''>
        <div class='row d-flex justify-content-between col-8'>
            <div class='col-lg-6'>
                <h3>$data[name]</h3>
                <p>$data[role]</p>
                <p>$data[department]</p>
            </div>
            <div class='col-lg-6'>
                <h3>Contact Information</h3>
                <p><strong>Cell Phone: </strong>0$data[cell_phone]</p>
                <p><strong>E-mail: </strong>$data[email]</p>
                
            </div>
        </div>
    </div>
    <div class='mt-3'>
        <div class='mt-5'>
            <h4>Biography</h4>
            <p>$data[biography]</p>
        </div>
       
    </div>
</div>"

   
    ?>

<div class="container mt-5">
      <!--   <div class="card card-block mb-2">
                    <h4 class="card-title">Card 1</h4>
                    <p class="card-text">Welcom to bootstrap card styles</p>
                    <a href="#" class="btn btn-primary">Submit</a>
                  </div>   -->
        <?php
       echo "<h3 class='text-dark mb-4'>$name Resources</h3>";
      ?>
      <hr>
      <div class="row">

      <?php
        
        $alldata = mysqli_query($conn, "SELECT * FROM `resource` WHERE teacher_name = '$name'");

        while ($row = mysqli_fetch_array($alldata)) {
        echo "
        <div class='col-lg-4 col-md-3 col-sm-6 allshow'>
        <a href='resourceshow.php?id=$row[id]' class='resource'>
          <div class='card card-block'>
            <img src='images/cloudcomp-2.png' alt=''>
            <h3 class='card-title m-1'>$row[topic]</h3>
            <h6 class='card-text m-1'>Course Code: $row[course_title]</h6>
            <a class='text-left text-hyperlink m-2' href='#' class='resource'><strong>Explore resources</strong></a>
          </div>
          </a>
        </div>";
        }
       

        ?>



      </div>

      </div>
   