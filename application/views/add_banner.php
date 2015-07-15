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


<?php echo form_open_multipart('upload/do_upload');?>
<div class="container">
    <div class="col-md-4 col-md-offset-4">
        <div class="card card-container">
            <br>
            <br>
            <h1>Donate <span class="label label-default">Me</span></h1>
            <br>
            <p id="profile-name" class="profile-name-card"></p>

            <?php
            if ($error!=null){

               echo  "<div class=\"alert alert-danger\" role=\"alert\"> <a href=\"#\" class=\"alert-link\"> $error</a></div>";
            }
            ?>

            <form class="form-signin">

                <label>Banner Name</label><input type="text" name="banname" id="banname" class="form-control" placeholder="Banner Name" required autofocus>
                <br>
                <label>Start Date</label><input type="date" name="sdate" id="sdate" class="form-control" placeholder="Sdate" required>
                <br>
                <label>End Date</label><input type="date" name="endate" id="endate" class="form-control" placeholder="Edate" required>
                <br>
                <label>Contact No</label><input type="text" name="cnno" id="cnno" class="form-control" placeholder="ContactNo" required>
                <br>
                <label>Banner File</label><input type="file" name="userfile" id="userfile" class="form-control" placeholder="File" required>
                <br>
                <label>Select Type</label>
                <br>
                <input type="radio" name="apptype" value="Kidney">Kidney
                <input type="radio" name="apptype" value="Eye">Eye
                <input type="radio" name="apptype" value="Heart">Heart
                <br>
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Submit Banner</button>
                <div><?php echo validation_errors(); ?></div>
            </form>
        </div>
    </div>
</div>


</body>