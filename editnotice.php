<?php include 'navBarIn.php'; ?>

<?php


if (!isset($_SESSION['isUserLoggedIn'])) {
  echo "<script>alert('Please signin to enter this page');</script>";
  echo "<script>window.location.href='signin.php ? user_not_loggedin';</script>";
}
if($data['role'] == 'teacher')
    {
        $id = $_GET['id'];
        $dataFetchQuery = "SELECT * FROM `notice` WHERE id = '$id'";
        $run = mysqli_query($conn, $dataFetchQuery);
        $data = mysqli_fetch_array($run);
        
        
    }
    

?>



<link rel="stylesheet" href="style/notice.css">
  <main>
    

    <div class="container mt-5">
        <h1 class="add_notice">Add Notice</h1>
        <div class="jum">
        <form action="editnoticeAction.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" value="<?php echo $data['title'] ?>" name="title" id="title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description"  id="description" class="form-control"><?php echo $data['description'] ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="name">
                </div>
                
            <div>
                <input type="text" name="oldImage" value="<?php echo $data['image'] ?>" class="form-control" hidden>
            </div>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <button type="submit" class="btn submitbtn col-12">Submit</button>
        </form>
        </div>
    


    </div>

 

</main>

  