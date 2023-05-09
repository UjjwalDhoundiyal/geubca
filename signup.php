<?php include("include/header.php"); ?>

    <div class="text-center p-3">
      <h1>Sign Up</h1>
    </div>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stu_firstname = $_POST['stu_firstname'];
    $stu_middlename = $_POST['stu_middlename'];
    $stu_lastname = $_POST['stu_lastname'];
    $stu_user = $_POST['stu_user'];
    $phone = $_POST['phone'];
    $stu_sid = $_POST['stu_sid'];
    $stu_pass1 = $_POST['stu_pass'];
    $stu_pass=hash('sha512', $stu_pass1);
    $stu_pass2 = $_POST['stu_pass2'];
    $stu_course = $_POST['stu_course'];
    $stu_sem = $_POST['stu_sem'];
    $alu_stu = $_POST['alu_stu'];

    


    // Database Connection
    $conn = new mysqli('localhost', 'root', '', 'geubca');
    if ($conn->connect_error) {
        die('Connection Failed');
    } else {
        $stmt = $conn->prepare("insert into signup (stu_firstname,stu_middlename,stu_lastname,stu_user,phone,stu_sid,stu_pass,stu_course,stu_sem,alu_stu) values(?,?,?,?,?,?,?,?,?,?)");

        $stmt->bind_param("ssssiissss", $stu_firstname, $stu_middlename, $stu_lastname, $stu_user, $phone, $stu_sid, $stu_pass, $stu_course, $stu_sem, $alu_stu);

        $stmt->execute();
        echo "<script>alert('Sign Up Success');</script>";
        $stmt->close();
        $conn->close();
    }
}
?>

    <section class="container my-2 bg-dark text-light w-50" style="border-radius: 20px;">
        <form id="myform" class="row g-3 p-3" method="post" onsubmit="return validatePassword()">
              <div class="col-md-4">
                <label for="fname" class="form-label">First name</label>
                <input name="stu_firstname" type="text" class="form-control" id="fname" placeholder="Ujjwal" required>
              </div>
              <div class="col-md-4">
                <label for="mname" class="form-label">Middle Name (Optional)</label>
                <input name="stu_middlename" type="text" class="form-control" id="mname" >
              </div>
              <div class="col-md-4">
                <label for="lname" class="form-label">Last name</label>
                <input name="stu_lastname" type="text" class="form-control" id="lname" placeholder="Dhoundiyal" required>
              </div>
            <div class="col-md-12">
              <label for="email" class="form-label">Email</label>
              <div class="input-group">
                <span class="input-group-text" id="email"><i class="fa-solid fa-at"></i></span>
                <input name="stu_user" type="email" class="form-control" id="email" pattern="[a-zA-Z0-9._%+-]+@gmail\.com$" required>
              </div>
            </div>
            <div class="col-md-6">
              <label for="phone" class="form-label">Mobile Number</label>
              <div class="input-group">
                <span class="input-group-text" id="number"><i class="fa-solid fa-phone"></i></span>
                <input name="phone" type="tel" class="form-control" id="phone" placeholder="1800 3258 21" pattern="[0-9]{10,15}" minlength="10"  maxlength="15" required>
              </div>
            </div>
            <div class="col-md-6">
              <label for="stu_id" class="form-label">Student ID</label>
              <div class="input-group">
                <span class="input-group-text" id="stu_id"><i class="fa-solid fa-graduation-cap"></i></span>
                <input name="stu_sid" type="tel" class="form-control" id="stu_id" placeholder="20151032" pattern="[0-9]{7,9}" minlength="7" maxlength="9" required>
              </div>
            </div>
            <div class="col-md-6">
              <label for="pass" class="form-label">Password</label>
              <div class="input-group">
                <span class="input-group-text" id="pass"><i class="fa-solid fa-lock"></i></span>
                <input name="stu_pass" type="password" class="form-control" id="stu_pass" minlength="8" maxlength="32" required>
              </div>
            </div>
            <div class="col-md-6">
              <label for="pass2" class="form-label">Confirm Password</label>
              <div class="input-group">
                <span class="input-group-text" id="pass2"><i class="fa-solid fa-key"></i></span>
                <input type="password" class="form-control" id="stu_pass2" minlength="8" maxlength="32" name="stu_pass2" required>
              </div>
            </div>
            <div class="col-md-4">
              <label for="course" class="form-label">Course</label>
              <div class="input-group">
                <select name="stu_course" id="course" class="form-select" required>
                  <option value="" selected disabled>Choose...</option>
                  <option value="course-bca">BCA</option>
                  <option value="course-bsc.it">BSC.IT</option>
                  <option value="course-bsc.cs">BSC.CS</option>
                  <option value="course-mca">MCA</option>
                  <option value="course-mca.it">MCA.IT</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
                <label for="state" class="form-label">Semester</label>
                <div class="input-group">
                  <select name="stu_sem" id="course" class="form-select" required>
                    <option value="" selected disabled>Choose...</option>
                    <option value="sem-1">1 Semester</option>
                    <option value="sem-2">2 Semester</option>
                    <option value="sem-3">3 Semester</option>
                    <option value="sem-4">4 Semester</option>
                    <option value="sem-5">5 Semester</option>
                    <option value="sem-6">6 Semester</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <label for="alu-stu" class="form-label">Alumini/Student</label>
                <div class="input-group">
                  <select name="alu_stu" id="alu_stu" class="form-select" required>
                    <option value="" selected disabled>Choose...</option>
                    <option value="Alumini">Alumini</option>
                    <option value="Student">New Student</option>
                  </select>
                </div>
              </div>
            
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="tick">
                <label class="form-check-label" for="tick">By Clicking this you are accepting the <a href="">Terms</a> and <a href="">Condition</a></label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="tick2" required>
                <label class="form-check-label" for="tick2">Can we send you updates by mail</label>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" value="Submit"  class="btn btn-primary" style="width: 100%;   border-radius: 20px;">Sign Up</button>
            </div>
          </form>
       </section>


       <script>
          function validatePassword() {
            var password = document.getElementById("stu_pass").value;
            var confirmPassword = document.getElementById("stu_pass2").value;
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
              }
              return true;
          }

       </script>

       <div class="text-center">
        <a href="login.php">Go to the Login Page</a>
       </div>



<?php include("include/footer.php"); ?>;