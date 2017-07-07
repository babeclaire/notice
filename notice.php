<?php
require('layout/header.php'); 
?>
<?php require('includes/db.php');?>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav pull-right">
                     <li><a href="#">Welcome <?php echo $_SESSION['username']; ?></a></li>
                       <li><a href="#">Users </a></li>
                        <li><a href="#">Notice </a></li>
                        <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="images/user.png" class="nav-avatar" />
                            <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Your Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </div>
        </div>
        <!-- /navbar-inner -->
    </div>
    <!-- /navbar -->
    <div class="wrapper">
        <div class="container">
            <div class="row">
                        <div class="module">
                            <div class="module-head">
                                <h3>
                                    All notice</h3>
                            </div>
                            <div class="module-option clearfix">
                                <form>
                                <div class="input-append pull-left">
                                    <input type="text" class="span3" placeholder="Filter by name...">
                                    <button type="submit" class="btn">
                                        <i class="icon-search"></i>
                                    </button>
                                </div>
                                </form>
                            </div>
                            <div class="col-md-6 center-block">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="media user">
                                            <div class="media-body">
                                                <h3 class="media-title">
                                                   Title</h3>
                                                <p>
                                                    <small class="muted">ddjhdjhdwhdjwhdjdwhjdw</small></p>
                                                <div class="media-option btn-group shaded-icon">
                                                    <button class="btn btn-small">
                                                        <i class="icon-share-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span6">
                                        <div class="media user">
                                            <div class="media-body">
                                                <h3 class="media-title">
                                                   Title</h3>
                                                <p>
                                                    <small class="muted">dwdddwd</small></p>
                                                <div class="media-option btn-group shaded-icon">
                                                    <button class="btn btn-small">
                                                        <i class="icon-share-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/.row-fluid-->
                                <br />
                                <div class="pagination pagination-centered">
                                    <ul>
                                        <li><a href="#"><i class="icon-double-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="icon-double-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
         
        <!--/.container-->
    </div>

<?php
//include header template
require('layout/footer.php');
?>
