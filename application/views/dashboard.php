<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-lg-9 main-chart">

            <?php
foreach ($app as $key ) {
    echo "<div class='alert alert-info'><b>Application Name: </b>".$key->name." &nbsp;&nbsp;|&nbsp;&nbsp;<b>App Key: </b>".$key->appkey."</div>";
}
?>
        </div>
    </div>
</section>
</section>




