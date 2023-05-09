<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <style>
        body{
            background-image: url('images/admin.jpg');
            background-repeat: no-repeat;
            background-size:cover;
            background-attachment: fixed;
            background-position: center;
            color: whitesmoke;
        }
    </style>

</head>
<body>

<br>
<br>
<br>
<div class="container-fluid border" id="login" style="background-color: rgba(128, 128, 128, 0.35)">
    
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
            <div class="form-group">
                <input type="checkbox">Forget Password
            </div>
            <input class="btn btn-primary w-100" type="submit" value="Submit" name="submit">
        </form>

    </div>


</body>
</html>
