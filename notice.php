<?php include 'navBarIn.php'; ?>

<?php


if (!isset($_SESSION['isUserLoggedIn'])) {
  echo "<script>alert('Please signin to enter this page');</script>";
  echo "<script>window.location.href='signin.php ? user_not_loggedin';</script>";
}

?>

<style>
    .notice
    {
        text-decoration:none;
    }
    .card
    {
        width:100%;
        height:100%;
        padding-left: 0.6rem;
        padding-right: 0.6rem;
    }
    .card h5{
        font-weight:bolder;
        color:black;
    }
    .card a:hover{
        color:#004643;
    }
</style>

<link rel="stylesheet" href="style/resource.css">
  <main>
    

    <div class="container mt-5">
        <?php
            if($data['role'] == 'student')
            {
                echo "<a href='addnotice.php' class='btn btn-info text-white'>Add Notice</a>";
            }
        ?>
      
      <div class="row mt-5">
      <?php
        if($data['role'] != 'teacher')
        {
        $alldata = mysqli_query($conn, "SELECT * FROM `notice` ORDER BY id DESC");

        while ($row = mysqli_fetch_array($alldata)) {
        echo "<div class='col-lg-6 col-md-6 col-sm-12 mb-4'>
        <a href='noticeshow.php?id=$row[id]' class='notice'>
          <div class='card card-block'>
            <img src='images/cloudcomp-2.png' alt=''>
            <h5 class='card-title m-1'>$row[title]</h5>
            <a class='text-left text-hyperlink m-2' href='noticeshow.php?id=$row[id]'><strong>Explore Notice</strong></a>
          </div>
          </a>
        </div>";

        }
        }
        
        ?>

        <?php
        if($data['role'] == 'teacher')
        {
        $alldata = mysqli_query($conn, "SELECT * FROM `notice` ORDER BY id DESC");

        while ($row = mysqli_fetch_array($alldata)) {
        echo "<div class='col-lg-6 col-md-6 col-sm-12 mb-4'>
        <a href='noticeshow.php?id=$row[id]' class='notice'>
          <div class='card card-block'>
            <img src='images/cloudcomp-2.png' alt=''>
            <h5 class='card-title m-1'>$row[title]</h5>
            <a class='text-left text-hyperlink m-2' href='noticeshow.php?id=$row[id]'><strong>Explore Notice</strong></a>
            <div class='d-felx mt-3'>
                <a href='editnotice.php?id=$row[id]' class='btn btn-info'>Edit</a>
                <a href='deletenotice.php?id=$row[id]' class='btn btn-danger'>Delete</a>
            </div>
          </div>
          </a>
        </div>";

        }
        }
        
        ?>
        
        
        

      </div>

      </section>

</main>

  