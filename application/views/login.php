<!DOCTYPE html>
<html>
<head>
    <title>Professional Practices</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<?php echo form_open('verifylogin'); ?>
<div class="container">
    <div class="col-md-4 col-md-offset-4">
        <div class="card card-container">
            <br>
            <br>
            <h1>Donate <span class="label label-default">Me</span></h1>
            <br>
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">

                <input type="text" id="username" class="form-control" placeholder="Email address" required autofocus>
                <br>
                <input type="password" id="password" class="form-control" placeholder="Password" required>
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form>
        </div><!-- /card-container -->
    </div>
</div>

</body>
</html>