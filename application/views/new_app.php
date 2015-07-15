
<head>
    <title>Professional Practices</title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>


<?php echo form_open('newapp'); ?>
<div class="container">
    <div class="col-md-4 col-md-offset-4">
        <div class="card card-container">
            <br>
            <br>
            <h1>Donate <span class="label label-default">Me</span></h1>
            <br>
            <?php
            if ($lstappkey!=null){
                echo "<div class=\"alert alert-success\" role=\"alert\">Your New appkey is $lstappkey</div>";
            }
            ?>

            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">

                <label>AppName</label><input type="text" name="appname" id="appname" class="form-control" placeholder="Appname" required autofocus>
                <br>
                <label>Hashkey</label><input type="text" name="hashkey" id="hashkey" class="form-control" placeholder="Hashkey">
                <br>
                <label>Select Type</label>
                <br>
                <input type="checkbox" name="apptype[]" value="Kidney">Kidney
                <input type="checkbox" name="apptype[]" value="Eye">Eye
                <input type="checkbox" name="apptype[]" value="Heart">Heart
                <br>
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Create Appkey</button>
                <div><?php echo validation_errors(); ?></div>
            </form>
        </div>
    </div>
</div>