<?php include 'header1.php'?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<div class="jumbotron">
        <div class="panel panel-default">
            <div class="panel-body"><h1><center>Credit Management System</center></h1></div>
        </div>
    </div>
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card-group">
        <div class="card" style="margin-left: 20px;border-radius: 20px;">
            <div class="card text-dark bg-white">
                <div class="card-body">
                    <img class="card-img-top" src="2.png">
                    <div class="card-img-overlay">
                    <center><i class="fa fa-fw fa-address-book" style="padding-top: 6px;"></i></center>
                    </div>
                    <center>
                    <div><h3><b>Users</b></h3></div>
                    </center>
                </div>
                <a class="card-footer text-dark clearfix small z-1" href="viewuserstable.php">
                    <span class="float-left"><h5><b>View all users</b></h5></span>
                    <span class="float-right">
                    <i class="fa fa-angle-right fa-3x"></i>
                    </span>
                </a>
            </div>
        </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card-group">
        <div class="card" style="margin-left: 20px;border-radius: 20px;">
            <div class="card text-dark bg-white">
                <div class="card-body">
                    <img class="card-img-top" src="2.png">
                    <div class="card-img-overlay">
                    <center><i class="fa fa-fw fa-file" style="padding-top: 6px;"></i></center>
                    </div>
                    <center>
                    <div><h3><b>Records</b></h3></div>
                    </center>
                </div>
                <a class="card-footer text-dark clearfix small z-1" href="transferrecords.php">
                    <span class="float-left"><h5><b>Transfer Records</b></h5></span>
                    <span class="float-right">
                    <i class="fa fa-angle-right fa-3x"></i>
                    </span>
                </a>
            </div>
        </div>
        </div>
    </div>
</div>
<?php include 'footer.php'?>