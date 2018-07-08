<?php
require 'require/logincheck.php';
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
        $query = $conn->query("SELECT * FROM `tbluser` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <div class="page-container">
            <?php require 'require/teachersidebar.php'?>
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
                                    <h3 class="panel-title">Assigned Subjects</h3>                              
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead> 
                                            <tr class="warning">
                                                <th>Subject</th>
                                                <th>Grade</th>
                                                <th>Section</th>
                                                <th>SY</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
    require 'connection.php';
            $query = $conn->query("select * from `sub_assign` where `teacher_id` = '$_SESSION[user_id]' order by `sy` DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                            ?>                                      
                                            <tr>
                                                <td><?php echo $fetch['subject_name']?></td>
                                                <td><?php echo $fetch['grade']?></td>
                                                <td><?php echo $fetch['section']?></td>
                                                <td><?php echo $fetch['sy']?></td>
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
                            $query = $conn->query("select * from `tblteacher` where `teacher_id` = '$_SESSION[user_id]'") or die(mysqli_error());
                            $fetch = $query->fetch_array();
                            ?>
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Personal Information</h3>         
                                </div>
                                <div class="panel-body">                               
                                    <h6>Complete Name</h6>
                                    <p><?php echo $fetch['teacher_name']. " " .$fetch['teacher_mid']. " " .$fetch['teacher_last']?></p>
                                    <h6>Birthdate</h6>
                                    <p><?php echo $fetch['teacher_bday']?></p>
                                    <h6>TIN Number</h6>
                                    <p><?php echo $fetch['teacher_tin']?></p>                                 
                                    <h6>Position</h6>
                                    <p><?php echo $fetch['teacher_position']?></p> 
                                    <h6>Plantilla Number</h6>
                                    <p><?php echo $fetch['teacher_plantilla']?></p>  
                                    <h6>Business Partner Number</h6>
                                    <p><?php echo $fetch['teacher_bp']?></p> 
                                    <h6>Highest Educational Attainment</h6>
                                    <p><?php echo $fetch['teacher_attainment']?></p>                                
                                </div>
                            </div>
                            <!-- END NEWS WIDGET -->

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






