<script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-Yqyo3JrC39pBOy0xU6m8U6Y/YhBObl5UShQoNYJz9D/2zwUNnE/9oz74WTxNlBp75wYIdLZnG61Z/kd9q5rKw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</script>

<section class="container my-2 w-50">
        <form id="myform" class="row g-3 p-3">
            <div class="col-md-4">
              <label for="session" class="form-label">Session</label>
              <div class="input-group">
                <select name="stu_session" id="session" class="form-select" required>
                  <option value="" selected disabled>Choose...</option>
                  <option value="">2019-20</option>
                  <option value="">2020-21</option>
                  <option value="">2021-22</option>
                  <option value="">2022-23</option>
                  <option value="">2023-24</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <label for="course" class="form-label">Course</label>
              <div class="input-group">
                <select name="stu_course" id="course" class="form-select" required>
                  <option value="" selected disabled>Choose...</option>
                  <option value="">BCA</option>
                  <option value="">MCA</option>
                  <option value="">BSC.IT</option>
                  <option value="">BSC.CS</option>
                  <option value="">MSC</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
                <label for="semester" class="form-label">Semester</label>
                <div class="input-group">
                  <select name="stu_sem" id="semester" class="form-select" required>
                    <option value="" selected disabled>Choose...</option>
                    <option value="">1 Semester</option>
                    <option value="">2 Semester</option>
                    <option value="">3 Semester</option>
                    <option value="">4 Semester</option>
                    <option value="">5 Semester</option>
                    <option value="">6 Semester</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <label for="section" class="form-label">Section</label>
                <div class="input-group">
                  <select name="stu_sec" id="section" class="form-select" required>
                    <option value="" selected disabled>Choose...</option>
                    <option value="sem-1">A</option>
                    <option value="sem-2">B</option>
                    <option value="sem-3">C</option>
                    <option value="sem-4">D</option>
                    <option value="sem-5">E</option>
                    <option value="sem-6">F</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <label for="alu-stu" class="form-label">Student</label>
                <div class="input-group">
                  <select name="alu-stu" id="alu-stu" class="form-select" required>
                    <option value="" selected disabled>Choose...</option>
                    <option value="">Alumini</option>
                    <option value="">New Student</option>
                    
                  </select>
                </div>
              </div>
            
            <div class="text-center">
              <button type="submit" value="Submit"  class="btn btn-primary" style="width: 100%;   border-radius: 20px;">Sign Up</button>
            </div>
          </form>
       </section>