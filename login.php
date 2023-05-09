<?php include("include/header.php"); ?>
<?php session_start(); ?>

<br>
<div class="container-fluid border" id="login">
    
        <h1 class="text-center">Login</h1>
        
        <form class="needs-validation" method="post" action="">
            <div class="form-group">
                <label class="form-label" for="email">Email address</label>
                <input name="stu_user" class="form-control" type="email" id="email" pattern="+@gmail.com$" required>
           </div>
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input name="stu_pass" class="form-control" type="password" id="password" minlength="8" required>
            </div>
            <input class="btn btn-success w-100" type="submit" value="Submit" name="submit">
        </form>

    </div>
<br>
<?php

$conn = new mysqli('localhost', 'root', '', 'geubca');
    if ($conn->connect_error) {
        die('Connection Failed');
    }else{

if(isset($_POST['submit'])) {
    
    
    $stu_user = $_POST['stu_user'];
    $stu_pass1 = $_POST['stu_pass'];
    $stu_pass = hash('sha512', $stu_pass1);

    $sql = "SELECT * FROM signup WHERE stu_user='$stu_user'";
    $query_result = mysqli_query($conn, $sql);

    if (!$query_result) {
        die('Error executing query: ' . mysqli_error($conn));
    }

    if (mysqli_num_rows($query_result) > 0) {
        $row = mysqli_fetch_assoc($query_result);
        $stored_pass = $row['stu_pass'];
        if ($stu_pass === $stored_pass) {
            $_SESSION['userlogin']=$stu_user;
            echo "<script>window.location.href = 'student_access/dashboard.php';</script>";
        } else {
            echo "<script>alert('Invalid password');</script>";
        }
    } else {
        echo "<script>alert('Invalid username');</script>";
    }
    }
}
?>
<?php include("include/footer.php"); ?>;