<?php include("include/header.php"); ?>
<br>
<div class="container-fluid border" id="login">
    
        <h1 class="text-center">Login</h1>
        
        <form class="needs-validation">
            <div class="form-group">
                <label class="form-label" for="email">Email address</label>
                <input class="form-control" type="email" id="email" pattern="+@gmail.com$" required>
           </div>
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" id="password" minlength="8" required>
            </div>
            <input class="btn btn-success w-100" type="submit" value="SIGN IN">
        </form>

    </div>
<br>
<?
// PHP

// $con=mysqli_connect('localhost','root','','ask_stu') or die(mysqli_error())
// if(isset($_POST['submit']) && $_POST['submit']=='Submit')
// {

// if($con)
// {
//     $stu_user=$_POST['stu_user'];
//     $stu_pass=$_POST['stu_pass'];

// $query="insert into stu set stu_user='$stu_user', stu_pass='$stu_pass'"  ;
// mysqli_query($con, $query) or die(mysqli_error($con));  
// //header('location:.php');
// }
// }
?>

<?php include("include/footer.php"); ?>;