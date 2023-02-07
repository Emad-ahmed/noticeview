<?php include 'navBarIn.php'; ?>
<?php

if(isset($_SESSION['isUserLoggedIn'])){
    echo "<script>window.location.href='home.php ? user_already_loggedin';</script>";
}

if (isset($_POST['signup'])) {
    // print_r($_POST);
    $query = "SELECT * FROM `users` WHERE email_id = '{$_POST['emailId']}'";
    $run = mysqli_query($conn, $query);
    
    $data = mysqli_fetch_array($run);
    echo $data;
    // print_r($_FILES['image']);

    if (mysqli_num_rows($run)) {
        echo "<script>window.location.href='signup.php ? user_already_exist'</script>";
    } else {
        
        $password = crypt($_POST['password'],"LuResource");
        $query = "INSERT INTO `users`(`full_name`, `email_id`,`department`,`password`,`role`) VALUES ('{$_POST['fullName']}','{$_POST['emailId']}','{$_POST['department']}','$password','student')";
        $run = mysqli_query($conn, $query);

        if ($run) {
            echo "<script>window.location.href='signin.php ? user_registered_successfully'</script>";
        }
    }
}
?>
<link rel="stylesheet" href="style/signinUp.css">
    <main>
        <section>
            <div class="parent-div">
                <div>
                    <img src="images/login-banner.jpg" alt="" class="img-design">
                </div>
                <div class="form-div">
                    <h1>Create Account</h1>
                    <p class="fw4">Fill in the details below to create an account</p>
                    <form id="form" method="post" enctype="multipart/form-data">
                        <div class="mb-3 txt_field">
                            <input type="text" id="name" name="fullName" placeholder="Name">
                        </div>
                        <div class="mb-3 txt_field">
                            <input type="email" id="email" name="emailId" placeholder="Email">
                        </div>
                        <div class="mb-3 txt_field">
                            <input type="text" id="department" name="department" placeholder="Department">
                        </div>
                        <!-- <div class="mb-3 txt_field">
                            <input type="number" id="number" name="mblNumber" placeholder="Mobile Number">
                        </div> -->
                        <div class="mb-3 txt_field">
                            <input type="text" id="npass" name="password" placeholder="Password">
                        </div>
                        <div class="mb-3 txt_field">
                            <input type="text" id="cpass" name="cpass" placeholder="Confirm Password">
                        </div>
                        <!-- <div class="mb-3 ">
                            <input class="form-control" type="file" id="image" name="image" placeholder="image">
                            <img src="" alt="">
                        </div> -->
                        <button type="submit" name="signup" class="btn-design">Sign Up</button><br>
                        <p class="d-inline">Already have an account?</p><a class="change-color" href="signin.php"> Sign In</a>
                    </form>
                </div>
            </div>
        </section>
        <hr id="hr1">
    </main>

    <footer>
        <div class="container-fluid m-0 p-0 ">
        <div class="d-flex foo">
            <div >
                <h4 class="fw5">Lu<span class="change-color">Resource</span></h4>
                <p>Keep all your files safe with <br> powerful online cloud storage</p>
            </div>
             <div class="ms-5">
                 <h5 class="mx-2">Navigate</h5>
                 <div class="d-flex">
                     <a href="#" class="mx-2">Home</a>
                     <a href="#" class="mx-2">About us</a>
                     <a href="#" class="mx-2">Resources</a>
                 </div>
             </div>
             
        </div>
    </div>
    </footer>

    <script>
        const firstName = document.getElementById("name");
        const email_id = document.getElementById("email");
        // const number = document.getElementById("number");
        const dept = document.getElementById("department")
        const pass = document.getElementById("npass");
        const confirmPass = document.getElementById("cpass");
        const form = document.getElementById("form");

        form.addEventListener("submit", (e) => {

            if (!/^[a-zA-Z .]+$/.test(firstName.value)) {
                alert("Name can not contain number or special character!");
                e.preventDefault();
            }

            if(!/^(cse|eee|law)_\d{10}@lus.ac.bd$/.test(email_id.value)){
                alert("Must be leading university edu mail");
                e.preventDefault();
            }

            if (!/^[a-zA-Z]+$/.test(dept.value)) {
                alert("Department can not contain number or special character!");
                e.preventDefault();
            }

            // if (!/^(\+88-|\+88)?01[3-9]\d{8}$/.test(number.value)) { /// +88
            //     alert("Must be a Bangladeshi number");
            //     e.preventDefault();
            // }

            if (!/([0-9a-zA-Z]){6,}/.test(pass.value)) {
                alert("Password must be 6 digit or more!");
                e.preventDefault();
            }

            if (pass.value != confirmPass.value) {
                alert("Password and confirm password does not match!!");
                e.preventDefault();
            }
        })
    </script>

    