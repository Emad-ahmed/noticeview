<?php include 'navBarIn.php'; ?>

    <?php

    $id = $_GET['id'];
    $datafetchquery = mysqli_query($conn, "SELECT * FROM `faculty` WHERE id = '$id'");
    $data = mysqli_fetch_array($datafetchquery);
    

    ?>
    
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

    <hr>
   