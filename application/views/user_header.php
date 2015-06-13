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
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('home') ?>">Donate Me</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav nav-pills navbar-left" style="line-height: 20px;margin-top: 8px">
                <li role="presentation" class='<?=($this->uri->segment(1)=="home")?"active":"nonactive"?>'><a href"<?php echo base_url('home') ?>">Dashboard</a></li>
                <li role="presentation"><a href="#">New App</a></li>

            </ul>
            <p class="navbar-text navbar-right">Signed in as <?php echo "$username";?>&nbsp;&nbsp;<img src="https://lh4.googleusercontent.com/-e6ZeX6FeSkY/U5B86kHSYUI/AAAAAAAAAc0/Z4z84nNYk-4/s315-no/DSC_0158-2.jpg" alt="<?php echo "$username";?>" style="border-radius:50%;max-width:30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" onclick="location.href='<?php echo base_url();?>home/logout'">Logout</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        </div>
    </div>
</nav>
<br>
<br>
<br>
<br>

