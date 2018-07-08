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
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-power-off"></span></a>                        
                    </li> 
                </ul>
                <ul class="breadcrumb">
                    <li><a href="hometeacher.php">Home</a></li>
                    <li class="active">Class Record</li>
                </ul>

                <div class="page-content-wrap">                
                    <div class="row">
                        <div class="col-md-3">
                            <div class="panel panel-primary">
                                <div class="panel-heading">      
                                    <?php
    require 'connection.php';
            $query = $conn->query("SELECT * FROM `sub_assign` where `teacher_id` = '$_GET[id]' && `subject_name` = '$_GET[subject_name]' && `sy` = '$_GET[school_year]'") or die(mysqli_error());
            $fetch = $query->fetch_array();    
                                    ?>
                                    <h6>Subject: <?php echo $fetch['subject_name']?></h6>
                                    <h6>Grade and Section: Grade <?php echo $fetch['grade']. "-" .$fetch['section']?></h6>
                                    <h6>School Year: <?php echo $_GET['school_year']?></h6>

                                </div>
                                <form id="enrollform" action="crud/addstudent.php" method="post" onsubmit="return confirm('Are you sure you want to add this student?');">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label>LRN</label>
                                            <input type="hidden" class="form-control" name="teacher_id" value="<?php echo $_GET['id'];?>" required>
                                            <input type="hidden" class="form-control" name="subject_name" value="<?php echo $fetch['subject_name'];?>" required>
                                            <input type="hidden" class="form-control" name="grade" value="<?php echo $fetch['grade'];?>" required>
                                            <input type="hidden" class="form-control" name="section" value="<?php echo $fetch['section'];?>" required>
                                            <input type="hidden" class="form-control" name="sy" value="<?php echo $_GET['school_year'];?>" required>
                                            <input data-toggle="tooltip" data-placement="bottom" title="LRN" type="text" class="form-control" name="lrn" required/>
                                        </div>

                                        <div class="form-group">
                                            <label>Student Name</label>
                                            <input data-toggle="tooltip" data-placement="bottom" title="Student Name" type="text" class="form-control" name="name"  required/>
                                        </div>

                                        <label>Gender</label>
                                        <div class="form-group ">
                                            <div class="col-md-12 col-xs-12">
                                                <select class="form-control select" name="gender" required>
                                                    <option disabled selected>Choose</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <button type="submit" class="btn btn-primary" name="addstudent"></span>Add Student</button>
                                    </div> 
                                </form>   
                        </div>

                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-primary">
                            <div class="panel-heading">                                
                                <h3 class="panel-title">List of Students</h3>
                                <div class="btn-group pull-right">
                                    <div class="pull-left">
                                        <a href="viewclassrecords.php?id=<?php echo $fetch['teacher_id']?>&subject_name=<?php echo $fetch['subject_name']?>&school_year=<?php echo $fetch['sy']?>" class="btn btn-primary btn-md">Go to Class Record</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table datatable">
                                    <thead> 
                                        <tr class="warning">
                                            <th>LRN</th>
                                            <th>Student Name</th>
                                            <th>Gender</th>
                                            <th>Grade</th>
                                            <th>Section</th>
                                            <th><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
    require 'connection.php';
                                           $query = $conn->query("SELECT * FROM `enrollstudent` where `teacher_id` = '$_SESSION[user_id]' && `subject_name` = '$_GET[subject_name]' order by `name` ASC") or die(mysqli_error());
                                           while($fetch = $query->fetch_array()){
                                               $teacher_id = $fetch['teacher_id'];
                                               $subject_name = $fetch['subject_name'];

                                        ?>                                      
                                        <tr>
                                            <td><?php echo $fetch['lrn']?></td>
                                            <td><?php echo $fetch['name']?></td>
                                            <td><?php echo $fetch['gender']?></td>
                                            <td><?php echo $fetch['grade']?></td>
                                            <td><?php echo $fetch['section']?></td>
                                            <td><center>
                                                <a href="#updatestudent<?php echo $fetch['enroll_id'];?>" data-target="#updatestudent<?php echo $fetch['enroll_id'];?>" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#deletestudent<?php echo $fetch['enroll_id'];?>" data-target="#deletestudent<?php echo $fetch['enroll_id'];?>" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a></center></center>
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
        </div>

        </div> 
    <!-- END PAGE CONTENT WRAPPER -->                                
    </div>    
<!-- END PAGE CONTENT -->
</div>



<!-- Delete Teacher-->
<?php
$conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `enrollstudent`") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div class="modal fade" id="deletestudent<?php echo $fetch['enroll_id'];?>" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="smallModalHead">Delete Teacher</h4>
            </div>
            <form role="form" class="form-horizontal" action="crud/deletestudent.php" method="post">
                <div class="modal-body">
                    <input type="hidden" class="form-control" name="teacher_id" value="<?php echo $fetch['teacher_id'];?>" required>
                    <input type="hidden" class="form-control" name="enroll_id" value="<?php echo $fetch['enroll_id'];?>" required>
                    <input type="hidden" class="form-control" name="subject_name" value="<?php echo $fetch['subject_name'];?>" required>
                    <input type="hidden" class="form-control" name="school_year" value="<?php echo $_GET['school_year'];?>" required>
                    Are you sure you want to delete this student?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="deletestudent"><span class="fa fa-ban"></span>Delete Student</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
                </div>
            </form>
        </div>
    </div>
</div> 
<?php
                                     }
$conn->close();
?> 
<!-- End Delete Teacher -->


<!-- Edit Teacher -->
<?php
$conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `enrollstudent`") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="updatestudent<?php echo $fetch['enroll_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="smallModalHead">Edit Student</h4>
            </div>
            <form role="form" class="form-horizontal" action="crud/editstudent.php" method="post" onsubmit="return confirm('Are you sure you want to edit this student?');">
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>LRN</label>
                                <input type="hidden" class="form-control" name="enroll_id" value="<?php echo $fetch['enroll_id'];?>" required>
                                <input type="hidden" class="form-control" name="teacher_id" value="<?php echo $fetch['teacher_id'];?>" required>
                                <input type="hidden" class="form-control" name="subject_name" value="<?php echo $fetch['subject_name'];?>" required>
                                <input data-toggle="tooltip" data-placement="bottom" title="LRN" type="text" class="form-control" name="lrn" value="<?php echo $fetch['lrn']?>" required/>
                            </div>

                            <div class="form-group">
                                <label>Student Name</label>
                                <input data-toggle="tooltip" data-placement="bottom" title="Student Name" type="text" class="form-control" name="name" value="<?php echo $fetch['name']?>" required/>
                            </div>

                            <label>Gender</label>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control select" name="gender" required>
                                        <option value="<?php echo $fetch['gender']?>"><?php echo $fetch['gender']?></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="editstudent"><span class="fa fa-check"></span>Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
                                     }
$conn->close();
?> 
<!-- End Edit Teacher-->

<?php require 'require/logoutnotify.php'?>
<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script> 
<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
<script type="text/javascript" src="js/settings.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>        
<script type="text/javascript" src="js/actions.js"></script>    
<script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
<script type='text/javascript' src='js/plugins/validationengine/jquery.validationEngine.js'></script>
<script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>
<script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
<script type="text/javascript">
    $("#enrollform").validate({
        ignore: [],
        rules: {
            lrn: {
                required: true,
            },
            name: {
                required: true,
            },
            gender: {
                required: true,
            }
        }
    });
</script>
</body>
</html>






