<?php
if(ISSET($_POST['retrieve'])){
    $name = $_POST['name'];
    $grade = $_POST['grade'];
    $section = $_POST['section'];
    $teacher_id = $_POST['teacher_id'];
    $school_year = $_POST['school_year'];
    $subject_name = $_POST['subject_name'];
    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());

    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
    $query = $conn->query("SELECT * FROM `enrollstudent` WHERE BINARY `name` = '$name'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $valid = $query->num_rows;
    $lrn = $fetch['lrn'];
    $gender = $fetch['gender'];

    $q1 = $conn->query ("SELECT * FROM `enrollstudent` WHERE BINARY `name` = '$name' && `subject_name` = '$subject_name' && `sy` = '$school_year'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
    if($check > 0){
        echo "<script> alert ('Student already exist!')</script>";
        echo "<script>document.location='../studentslist.php?id=$teacher_id&subject_name=$subject_name&school_year=$school_year'</script>";  
    }
    else {

        $conn->query("INSERT INTO `enrollstudent` VALUES('', '$lrn', '$name', '$gender', '$subject_name', '$grade', '$section', '$school_year', '$teacher_id', 'Regular')") or die(mysqli_error());
        $conn->close();
        echo "<script type='text/javascript'>alert('Successfully added student record!');</script>";
        echo "<script>document.location='../studentslist.php?id=$teacher_id&subject_name=$subject_name&school_year=$school_year'</script>";  
    }






}
?>