<?php include 'navBarIn.php'; ?>
<link rel="stylesheet" href="style/card.css">
<div class="wrapper">
    <div class="container">
      <h1 class="title">Faculty Member</h1>
      <div class="inner-wrapper">
      <?php



        $alldata = mysqli_query($conn, "SELECT * FROM `faculty`");

        while ($row = mysqli_fetch_array($alldata)) {
            echo " <div class='card'>
            <div class='inner-card'>
              <div class='img-wrapper'>
                <img src='$row[image]' alt=''>
              </div>
              <div class='content'>
                <h1>$row[name]</h1>
                <p>$row[role]</p>
                <p>$row[department]</p>
                <p>$row[email]</p>
              </div>
              <div class='btn-wrapper'>
                <a href='faculty-li-details.php?id=$row[id]' class='btn btn-info' >View</a>
              </div>
            </div>
          </div>";

        }

        ?>
        
        
      </div>
    </div>
  </div>



<script src="js/nav.js"></script>

   