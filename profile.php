<?php include 'navBarIn.php'; ?>


<?php


if (!isset($_SESSION['isUserLoggedIn'])) {
    echo "<script>window.location.href='signin.php ? user_not_loggedin';</script>";
}

// $user_data = "SELECT * FROM `users` WHERE email_id = '{$_SESSION['emailId']}'";
// $result = mysqli_query($conn, $user_data);
// $row = mysqli_fetch_array($result);

?>
<link rel="stylesheet" href="style/resource.css">

<style>
    .proimage
    {
        width:15rem;
        height:15rem;
        object-fit:cover;
    }
   
  .col-lg-4
  {
    margin-bottom: 2rem;
  }
  .card-block
  {
    height:100%;
 
  }
  .resource
  {
    text-decoration:none;
  }
  .card h3, h6{
    color:black;
  }

</style>

<link rel="stylesheet" href="">


    <div class="bg">
        <div class="container">
           

            <main id="main" class="p-5">
                <?php

                $user_data = "SELECT * FROM `users` WHERE email_id = '{$_SESSION['emailId']}'";
                $result = mysqli_query($conn, $user_data);
                $row = mysqli_fetch_array($result);
                $myid = $row['id'];
                // print_r($row);


                // while ($row = mysqli_fetch_array($result)) {

                    echo "<div class='row'>
                    <div class='col-md-4 col-12 mb-5'>
                        <img src='$row[image]' alt='image' height='300px' width='300px' class='rounded-circle border border-secondary img-thumbnail proimage'>
                    </div>
                    <div class='col-md-6 text-dark'>
                        <div class='col-12 col-md-6'>
                            <h2>$row[full_name]</h2>
                            <p style='font-size: 20px';>$row[designation]</p>
                        </div>
                        <div class='details mt-5'>
                        
                            <div class='row'>
                                <div class='col-md-3'>
                                    <p>Department</p>
                                </div>
                                <div class='col-md-9'>
                                    <h5>$row[department]</h5>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-3'>
                                    <p>Institution</p>
                                </div>
                                <div class='col-md-9'>
                                    <h5>$row[inst]</h5>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-3'>
                                    <p>Email</p>
                                </div>
                                <div class='col-md-9'>
                                    <h5>$row[email_id]</h5>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-3'>
                                    <p>Phone</p>
                                </div>
                                <div class='col-md-9'>
                                    <h5>$row[mbl_num]</h5>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-3'>
                                    <p>Research Interest</p>
                                </div>
                                <div class='col-md-9'>
                                    <h5>$row[ri]</h5>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-3'>
                                    <p>Courses</p>
                                </div>
                                <div class='col-md-9'>
                                    <h5>$row[crs]</h5>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class='col-md-2 float-end button'>
                    <a href='updateProfile.php'><button type='submit' class='btn btn-info mb-2 pe-4 ps-4'>Edit</button></a>
                    <a href='signout.php'><button type='submit' class='btn btn-danger pe-4 ps-4'>Signout</button></a>
                    </div>
                </div>";
                // }
                ?>
            </main>

        

            <div class="container mt-5">
      <!--   <div class="card card-block mb-2">
                    <h4 class="card-title">Card 1</h4>
                    <p class="card-text">Welcom to bootstrap card styles</p>
                    <a href="#" class="btn btn-primary">Submit</a>
        
                  </div>   -->
      <?php
      if($data['role'] == 'teacher')
      {
        echo "
        <hr>
        <h3 class='text-dark mb-4 mt-5'>My Resources</h3>
   
        ";
      }
       
      ?>
     
      <div class="row">

      <?php
        
        $alldata = mysqli_query($conn, "SELECT * FROM `resource` WHERE user_id = '$myid'");

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



            <footer>
                <hr style="height:2px; width:100%; border-width:0; color:white; background-color:white">
                <div class="row mt-5">
                    <div class="col-md-4 text-light">
                        <h3>LuResource</h3>
                        <p>Keep all your files safe with powerful online cloud storage </p>
                    </div>
                    <div class="col-md-4">
                        <p class="mb-3 text-light fw-bold">Products</p>
                        <div class="d-flex gap-3 text-light">
                            <p>Home</p>
                            <p>About us</p>
                            <p>Resources</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>


