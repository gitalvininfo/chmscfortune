<?php
require 'require/studentlogincheck.php';
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Alijis Elementary School</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="img/alijis/logo.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-blue.css"/>
    </head>
    <body>
        <?php 
        $query = $conn->query("SELECT * FROM `enrollstudent` WHERE `lrn` = $_SESSION[lrn]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <div class="page-container">
            <?php require 'require/studentsidebar.php'?>
            <div class="page-content">
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-bars"></span></a>
                    </li>
                    <li class="xn-icon-button pull-right">
                        <a href="pages-login.html" class="mb-control" data-box="#mb-signout"><span class="glyphicon glyphicon-off"></span></a>                        
                    </li> 
                </ul>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="panel panel-primary">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title"><?php echo $_GET['subject_name']?> - <?php echo $_GET['school_year']?></h3>                              
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead> 
                                            <tr class="warning">
                                                <th>Written and Performance Task</th>
                                                <th>Score</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
    require 'connection.php';
            $query = $conn->query("select * from `test`, `enrollstudent` where enrollstudent.name = test.name  && enrollstudent.lrn = '$_SESSION[lrn]' && test.subject_name = '$_GET[subject_name]'") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                            ?>                                      
                                            <tr>
                                                <td><?php echo $fetch['written_num']?></td>
                                                <td><?php echo $fetch['score']?></td>

                                            </tr>
                                            <?php
            }
            $conn->close();
                                            ?>
                                        </tbody>
                                    </table>               
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <?php
                            require 'connection.php';
                            $query = $conn->query("select * from `enrollstudent` where `lrn` = '$_SESSION[lrn]'") or die(mysqli_error());
                            $fetch = $query->fetch_array();
                            ?>
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Personal Information</h3>         
                                </div>
                                <div class="panel-body">                               
                                    <h6>Complete Name</h6>
                                    <p><?php echo $fetch['name']?></p>
                                    <h6>Gender</h6>
                                    <p><?php echo $fetch['gender']?></p>
                                    <h6>Grade</h6>
                                    <p><?php echo $fetch['grade']?></p>                                 
                                    <h6>Section</h6>
                                    <p><?php echo $fetch['section']?></p> 
                                </div>
                            </div>
                            <!-- END NEWS WIDGET -->

                        </div>
                        <div class="col-md-3">
                            <div class="widget widget-info widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-bars"></span>
                                </div>
                                <div class="widget-data">

                                    <div class="widget-int num-count">
                                        100
                                    </div>
                                    <div class="widget-title">Initial</div>
                                    <div class="widget-subtitle">Grade</div>
                                </div>
                                <div class="widget-controls">
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget widget-info widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-bars"></span>
                                </div>
                                <div class="widget-data">

                                    <div class="widget-int num-count">
                                        100
                                    </div>
                                    <div class="widget-title">Quarter</div>
                                    <div class="widget-subtitle">Grade</div>
                                </div>
                                <div class="widget-controls">
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>                    
            </div>
        </div>            
        </div>

    <?php require 'require/logoutnotify.php'?>
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
    <script type="text/javascript" src="js/plugins/icheck/icheck.min.js"></script>        
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>                                
    <script type="text/javascript" src="js/plugins/moment.min.js"></script>
    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>        
    <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






