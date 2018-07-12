
<?php


    function getW($schoolyear, $teacherid, $subject, $gender, $writtennum, $grading){
   
    $nameArray = array();
    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());    
    $scores = $conn->query ("SELECT * FROM `enrollstudent` INNER JOIN `test` ON `enrollstudent`.`name` = `test`.`name` where `enrollstudent`.`teacher_id` = '$teacherid' && `enrollstudent`.`subject_name` = '$subject' && `enrollstudent`.`gender` = '$gender' && `test`.`school_year` = '$schoolyear' && `written_num` = '$writtennum'  && `grading` = '$grading'") or die(mysqli_error());
     
        while($fetch1 = $scores->fetch_array()){
            $nameArray[] = $fetch1['score'];
        }
       
        $columnCount = count($nameArray);
        if($columnCount != 0){
            return $nameArray;
        }
          
    }
    function gettotal($schoolyear, $teacherid, $subject, $gender, $grading){
   //kung may unod e return ya
    $scoreArray = array();
    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());    
    $scores = $conn->query ("SELECT * FROM `enrollstudent` INNER JOIN `test` ON `enrollstudent`.`name` = `test`.`name` where `enrollstudent`.`teacher_id` = '$teacherid' && `enrollstudent`.`subject_name` = '$subject' && `enrollstudent`.`gender` = '$gender' && `test`.`school_year` = '$schoolyear' && `grading` = '$grading'") or die(mysqli_error());
     
        while($fetch1 = $scores->fetch_array()){
            $scoreArray[] = $fetch1['score'];
        }
       
        $columnCount = count($scoreArray);
       return $columnCount;
          
    }
      
    function gethps($schoolyear, $teacherid, $subject ,$grading){

    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());    
    $scores = $conn->query ("SELECT * FROM `highestpossiblescores` WHERE `teacher_id` = '$teacherid' && `subject_name` = '$subject' && `school_year` = '$schoolyear' && `grading` = '$grading'") or die(mysqli_error());
     $hps = $scores ->fetch_array();
    return $hps;
    }
   


   

      

?>