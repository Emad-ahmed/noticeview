<?php include 'navBarIn.php'; ?>

<?php


if (!isset($_SESSION['isUserLoggedIn'])) {
  echo "<script>alert('Please signin to enter this page');</script>";
  echo "<script>window.location.href='signin.php ? user_not_loggedin';</script>";
}

?>

<style>
  .col-lg-4
  {
    margin-bottom: 2rem;
  }
  .card-block
  {
    height:100%;
 
  }
</style>
<link rel="stylesheet" href="style/resource.css">
  <main>
    <section class="sec_section mt-5 ">
      <div class="container drop ">
        <div class="dropdown mx-2 bg-white">
          <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <small>Course</small><br>
            <b> All courses-</b>
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">course-code</a></li>
            <li><a class="dropdown-item" href="#">course-code</a></li>
            <li><a class="dropdown-item" href="#">course-code</a></li>
          </ul>
        </div>
        <div class="dropdown mx-2 bg-white">
          <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <small>File</small><br>
            <b> File types</b>
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">pdf</a></li>
            <li><a class="dropdown-item" href="#">docx</a></li>
            <li><a class="dropdown-item" href="#">pptx</a></li>
          </ul>
        </div>
        <?php 
        if ($data['role'] == 'teacher')
        {
          echo "<div class='dropdown mx-2 bg-white'>
          <a class='btn  dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
            <small>Add files</small><br>
            <b> All file types-</b>
          </a>
          <ul class='dropdown-menu'>
            <li><a class='dropdown-item' href='addResource.php'>Add Lecture Notes</a></li>
            <li><a class='dropdown-item' href='noticeUpdate.php'>Add Notice</a></li>
          </ul>
        </div>";
        }
        
        ?>
      </div>
    </section>

    <div class="container mt-5">
      <!--   <div class="card card-block mb-2">
                    <h4 class="card-title">Card 1</h4>
                    <p class="card-text">Welcom to bootstrap card styles</p>
                    <a href="#" class="btn btn-primary">Submit</a>
                  </div>   -->
      <div class="row">
        <div class="col-lg-4 col-md-3 col-sm-6">
          <div class="card card-block ">
            <img src="images/cloudcomp-2.png" alt="">
            <h5 class="card-title m-1">Protecting your content against cyber threats and data loss.</h5>
            <p class="card-text m-1">Protecting your sensitive files is a top priority.</p>
            <a class="text-left text-hyperlink m-2" href="#"><strong>Explore resources</strong></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-6">
          <div class="card card-block ">
            <img src="images/cloudcomp-2.png" alt="">
            <h5 class="card-title m-1"><strong>Protecting your content against cyber threats and data loss.</strong></h5>
            <p class="card-text m-1">Protecting your sensitive files is a top priority.</p>
            <a class="text-left text-hyperlink m-2" href="#"><strong>Explore resources</strong></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-6">
          <div class="card card-block ">
            <img src="images/cloudcomp-2.png" alt="">
            <h5 class="card-title m-1"><strong>Protecting your content against cyber threats and data loss.</strong></h5>
            <p class="card-text m-1">Protecting your sensitive files is a top priority.</p>
            <a class="text-left text-hyperlink m-2" href="#"><strong>Explore resources</strong></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-6">
          <div class="card card-block ">
            <img src="images/cloudcomp-2.png" alt="">
            <h5 class="card-title m-1"><strong>Protecting your content against cyber threats and data loss.</strong></h5>
            <p class="card-text m-1">Protecting your sensitive files is a top priority.</p>
            <a class="text-left text-hyperlink m-2" href="#"><strong>Explore resources</strong></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-6">
          <div class="card card-block ">
            <img src="images/cloudcomp-2.png" alt="">
            <h5 class="card-title m-1"><strong>Protecting your content against cyber threats and data loss.</strong></h5>
            <p class="card-text m-1">Protecting your sensitive files is a top priority.</p>
            <a class="text-left text-hyperlink m-2" href="#"><strong>Explore resources</strong></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-6">
          <div class="card card-block ">
            <img src="images/cloudcomp-2.png" alt="">
            <h5 class="card-title m-1"><strong>Protecting your content against cyber threats and data loss.</strong></h5>
            <p class="card-text m-1">Protecting your sensitive files is a top priority.</p>
            <a class="text-left text-hyperlink m-2" href="#"><strong>Explore resources</strong></a>
          </div>
        </div>




      </div>





      </section>



  </main>

  