
<html>
<?php
include ('conn.php');
?>

<head>

    <title> Mega Inventory </title>
    <script src="jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><b>Mega Inventory</b> <span class="glyphicon glyphicon-log-in"></span></a></li>

            </ul>
        </div>
    </nav>
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="margin-top:100px;">
            <div class="col-sm-offset-4 col-sm-4">
                <div class="row">
                    <div class="col-sm-offset-4 col-sm-5">
                        <img src="1.jpg" class="img-responsive" alt="Cinque Terre">
                    </div>
                </div>
                <form class="form-horizontal" action="page1_insert.php" method="post" >
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="User Name">User Name:</label>
                        <div class="col-sm-9">
                            <input type="user name" class="form-control" name="user_name" id="User Name" placeholder="User Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="pwd">Password:</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit"  class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>