<?php
$subject = $_GET['subject_name'];
$teacherid = $_GET['id'];
$schoolyear = $_GET['school_year'];
$grading = $_GET['grading'];

 function checkexist($schoolyear, $teacherid, $subject, $writtennum, $grading){
    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());    
    $exist = $conn->query ("SELECT COUNT(`test`.`written_num`) AS total FROM `test` INNER JOIN `enrollstudent` ON `enrollstudent`.`name` = `test`.`name` where `enrollstudent`.`teacher_id` = '$teacherid' && `enrollstudent`.`subject_name` = '$subject' && `test`.`school_year` = '$schoolyear' && `written_num` = '$writtennum' && `grading` = '$grading'") or die(mysqli_error());
     $totalexist = $exist ->fetch_array();
     $total = $totalexist['total'];
     if($total == 0){ 
        
         return 'false';
     }else{
        
         return 'true';
     }
     
 }
 function checkscore($schoolyear, $teacherid, $subject, $writtennum, $grading){
   
     //check if written work col is not null
    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());    
    $scores = $conn->query ("SELECT * FROM `enrollstudent` INNER JOIN `test` ON `enrollstudent`.`name` = `test`.`name` where `enrollstudent`.`teacher_id` = '$teacherid' && `enrollstudent`.`subject_name` = '$subject' && `test`.`school_year` = '$schoolyear' && `written_num` = '$writtennum' && `grading` = '$grading'") or die(mysqli_error());
        $scoreArray = array();
        while($fetch1 = $scores->fetch_array()){
        if($fetch1['score'] !=''){
            $scoreArray[] = $fetch1['score'];
        }
                 }
       
        $columnCount = count($scoreArray);
        if($columnCount != ''){
     
            return 'true';
        }else{
       
            return 'false';
            
        }
     
    }







if(ISSET($_POST['submit'])){
    $w1 = $_POST["w1"];
    $w2 = $_POST["w2"];
    $w3 = $_POST["w3"];
    $w4 = $_POST["w4"];
    $w5 = $_POST["w5"];
    $w6 = $_POST["w6"];
    $w7 = $_POST["w7"];
    $w8 = $_POST["w8"];
    $w9 = $_POST["w9"];
    $w10 = $_POST["w10"];
    $gw1 = $_POST["gw1"];
    $gw2 = $_POST["gw2"];
    $gw3 = $_POST["gw3"];
    $gw4 = $_POST["gw4"];
    $gw5 = $_POST["gw5"];
    $gw6 = $_POST["gw6"];
    $gw7 = $_POST["gw7"];
    $gw8 = $_POST["gw8"];
    $gw9 = $_POST["gw9"];
    $gw10 = $_POST["gw10"];
    $qa1 = $_POST["qa1"];
    $gqa1 = $_POST["gqa1"];
    $name = $_POST['name'];
    $gname = $_POST['gname'];
    $teacher_id = $_POST['teacher_id'];
    $subject_name = $_POST['subject_name'];
    $school_year = $_POST['school_year'];
    $new = "";
    $igrade = $_POST["initialgrade"];
    $qgrade = $_POST["quartergrade"];
    $igrade1 = $_POST["initialgrade1"];
    $qgrade1 = $_POST["quartergrade1"];
    
    
    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
  //------initial 1    
   if(checkscore($schoolyear,$teacherid,$subject,'igrade',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'igrade', $grading) == 'false'){
  
    foreach(array_combine($name,$igrade) as $new => $value){
     
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'igrade', '$grading')") or die(mysqli_error());
       
        }
    }else{
     
         foreach(array_combine($name,$igrade) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'igrade' && `grading` = '$grading'") or die(mysqli_error());
        }
    }
//------quarter 1   
     if(checkscore($schoolyear,$teacherid,$subject,'qgrade',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'qgrade',$grading) == 'false'){
  
    foreach(array_combine($name,$qgrade) as $new => $value){
     
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'qgrade',$grading)") or die(mysqli_error());
       
        }
    }else{
     
         foreach(array_combine($name,$qgrade) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'qgrade' && `grading` = '$grading'") or die(mysqli_error());
        }
    }
 //------initial 2    
   if(checkscore($schoolyear,$teacherid,$subject,'igrade1',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'igrade1',$grading) == 'false'){

    foreach(array_combine($gname,$igrade1) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'igrade1',$grading)") or die(mysqli_error());
       
        }
    }else{
     
         foreach(array_combine($gname,$igrade1) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'igrade1' && `grading` = '$grading'") or die(mysqli_error());
        }
    }
//------quarter 2 
 
     if(checkscore($schoolyear,$teacherid,$subject,'qgrade1',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'qgrade1',$grading) == 'false'){
  
    foreach(array_combine($gname,$qgrade1) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'qgrade1',$grading)") or die(mysqli_error());
       
        }
    }else{
     
         foreach(array_combine($gname,$qgrade1) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'qgrade1' && `grading` = '$grading'") or die(mysqli_error());
        }
    }  
    
    
    //======= male
    if(checkscore($schoolyear,$teacherid,$subject,'w1',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'w1',$grading) == 'false'){
  
    foreach(array_combine($name,$w1) as $new => $value){
     
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'w1',$grading)") or die(mysqli_error());
       
        }
    }else{
     
         foreach(array_combine($name,$w1) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'w1' && `grading` = '$grading'") or die(mysqli_error());
        }
    }
    
     if(checkscore($schoolyear,$teacherid,$subject,'w2',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'w2',$grading) == 'false'){

    foreach(array_combine($name,$w2) as $new => $value){
        
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'w2',$grading)") or die(mysqli_error());
    }
          }else{

           foreach(array_combine($name,$w2) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new'  && `test`.`school_year` = '$schoolyear' && `written_num` = 'w2' && `grading` = '$grading'") or die(mysqli_error());
           }
    }
    

     if(checkscore($schoolyear,$teacherid,$subject,'w3',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'w3',$grading) == 'false'){
        
         foreach(array_combine($name,$w3) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'w3',$grading)") or die(mysqli_error());
    }
       }else{  
            
      foreach(array_combine($name,$w3) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'w3' && `grading` = '$grading'") or die(mysqli_error());
           }
    }    
         
    if(checkscore($schoolyear,$teacherid,$subject,'w4',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'w4',$grading) == 'false'){  
     foreach(array_combine($name,$w4) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'w4',$grading)") or die(mysqli_error());
    }
        }else{  
      foreach(array_combine($name,$w4) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'w4' && `grading` = '$grading'") or die(mysqli_error());
           }
    }  
     if(checkscore($schoolyear,$teacherid,$subject,'w5',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'w5',$grading) == 'false'){

     foreach(array_combine($name,$w5) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'w5',$grading)") or die(mysqli_error());
    }
    }else{  
      foreach(array_combine($name,$w5) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'w5' && `grading` = '$grading'") or die(mysqli_error());
           }
    }         
     if(checkscore($schoolyear,$teacherid,$subject,'w6',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'w6',$grading) == 'false'){     
     foreach(array_combine($name,$w6) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'w6',$grading)") or die(mysqli_error());
    }
    }else{  
      foreach(array_combine($name,$w6) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'w6' && `grading` = '$grading'") or die(mysqli_error());
           }
    }
     if(checkscore($schoolyear,$teacherid,$subject,'w7',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'w7',$grading) == 'false'){
     foreach(array_combine($name,$w7) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'w7',$grading)") or die(mysqli_error());
    }
        }else{  
      foreach(array_combine($name,$w7) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'w7' && `grading` = '$grading'") or die(mysqli_error());
           }
    } 
     if(checkscore($schoolyear,$teacherid,$subject,'w8',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'w8',$grading) == 'false'){
     foreach(array_combine($name,$w8) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'w8',$grading)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($name,$w8) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'w8' && `grading` = '$grading'") or die(mysqli_error());
           }
    }  
     if(checkscore($schoolyear,$teacherid,$subject,'w9',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'w9',$grading) == 'false'){
     foreach(array_combine($name,$w9) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'w9',$grading)") or die(mysqli_error());
    }
       }else{  
      foreach(array_combine($name,$w9) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'w9' && `grading` = '$grading'") or die(mysqli_error());
           }
    }
     if(checkscore($schoolyear,$teacherid,$subject,'w10',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'w10',$grading) == 'false'){
     foreach(array_combine($name,$w10) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'w10',$grading)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($name,$w10) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'w10' && `grading` = '$grading'") or die(mysqli_error());
           }
    }   
    if(checkscore($schoolyear,$teacherid,$subject,'qa1',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'qa1',$grading) == 'false'){
     foreach(array_combine($name,$qa1) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'qa1',$grading)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($name,$qa1) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'qa1' && `grading` = '$grading'") or die(mysqli_error());
           }
    }   
//////========================female
    if(checkscore($schoolyear,$teacherid,$subject,'gw1',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gw1',$grading) == 'false'){
    foreach(array_combine($gname,$gw1) as $new => $value){
       
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gw1',$grading)") or die(mysqli_error());
    }
        }else{  
      foreach(array_combine($gname,$gw1) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gw1' && `grading` = '$grading' ") or die(mysqli_error());
           }
    }
     if(checkscore($schoolyear,$teacherid,$subject,'gw2',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gw2',$grading) == 'false'){
    foreach(array_combine($gname,$gw2) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gw2',$grading)") or die(mysqli_error());
        
    }
         }else{  
      foreach(array_combine($gname,$gw2) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gw2' && `grading` = '$grading'") or die(mysqli_error());
           }
    }  
     if(checkscore($schoolyear,$teacherid,$subject,'gw3',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gw3',$grading) == 'false'){
     foreach(array_combine($gname,$gw3) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gw3',$grading)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($gname,$gw3) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gw3' && `grading` = '$grading'") or die(mysqli_error());
           }
    } 
     if(checkscore($schoolyear,$teacherid,$subject,'gw4',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gw4',$grading) == 'false'){
     foreach(array_combine($gname,$gw4) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gw4',$grading)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($gname,$gw4) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gw4' && `grading` = '$grading'") or die(mysqli_error());
           }
    } 
     if(checkscore($schoolyear,$teacherid,$subject,'gw5',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gw5',$grading) == 'false'){
     foreach(array_combine($gname,$gw5) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gw5',$grading)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($gname,$gw5) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gw5' && `grading` = '$grading'") or die(mysqli_error());
           }
    } 
     if(checkscore($schoolyear,$teacherid,$subject,'gw6',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gw6',$grading) == 'false'){
     foreach(array_combine($gname,$gw6) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gw6',$grading
)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($gname,$gw6) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gw6' && `grading` = '$grading'") or die(mysqli_error());
           }
    } 
     if(checkscore($schoolyear,$teacherid,$subject,'gw7',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gw7',$grading) == 'false'){
     foreach(array_combine($gname,$gw7) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gw7',$grading)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($gname,$gw7) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gw7' && `grading` = '$grading'") or die(mysqli_error());
           }
    }  
     if(checkscore($schoolyear,$teacherid,$subject,'gw8',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gw8',$grading) == 'false'){
     foreach(array_combine($gname,$gw8) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gw8',$grading)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($gname,$gw8) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gw8' && `grading` = '$grading'") or die(mysqli_error());
           }
    }   
     if(checkscore($schoolyear,$teacherid,$subject,'gw9',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gw9',$grading) == 'false'){
     foreach(array_combine($gname,$gw9) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gw9',$grading)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($gname,$gw9) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gw9' && `grading` = '$grading'") or die(mysqli_error());
           }
    }  
     if(checkscore($schoolyear,$teacherid,$subject,'gw10',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gw10',$grading) == 'false'){
     foreach(array_combine($gname,$gw10) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gw10',$grading)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($gname,$gw10) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gw10' && `grading` = '$grading'") or die(mysqli_error());
           }
    }   
    if(checkscore($schoolyear,$teacherid,$subject,'gqa1',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gqa1',$grading) == 'false'){
     foreach(array_combine($gname,$gqa1) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gqa1',$grading
)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($gname,$gqa1) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gqa1' && `grading` = '$grading'") or die(mysqli_error());
           }
    }
  
    $pt1 = $_POST["pt1"];
    $pt2 = $_POST["pt2"];
    $pt3 = $_POST["pt3"];
    $pt4 = $_POST["pt4"];
    $pt5 = $_POST["pt5"];
    $pt6 = $_POST["pt6"];
    $pt7 = $_POST["pt7"];
    $pt8 = $_POST["pt8"];
    $pt9 = $_POST["pt9"];
    $pt10 = $_POST["pt10"];
    $gpt1 = $_POST["gpt1"];
    $gpt2 = $_POST["gpt2"];
    $gpt3 = $_POST["gpt3"];
    $gpt4 = $_POST["gpt4"];
    $gpt5 = $_POST["gpt5"];
    $gpt6 = $_POST["gpt6"];
    $gpt7 = $_POST["gpt7"];
    $gpt8 = $_POST["gpt8"];
    $gpt9 = $_POST["gpt9"];
    $gpt10 = $_POST["gpt10"];
   
      
    if(checkscore($schoolyear,$teacherid,$subject,'pt1',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'pt1',$grading) == 'false'){
  
    foreach(array_combine($name,$pt1) as $new => $value){
     
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'pt1',$grading)") or die(mysqli_error());
       
        }
    }else{
     
         foreach(array_combine($name,$pt1) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'pt1' && `grading` = '$grading'") or die(mysqli_error());
        }
    }
    
     if(checkscore($schoolyear,$teacherid,$subject,'pt2',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'pt2',$grading) == 'false'){

    foreach(array_combine($name,$pt2) as $new => $value){
        
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'pt2',$grading)") or die(mysqli_error());
    }
          }else{

           foreach(array_combine($name,$pt2) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new'  && `test`.`school_year` = '$schoolyear' && `written_num` = 'pt2' && `grading` = '$grading'") or die(mysqli_error());
           }
    }
    

     if(checkscore($schoolyear,$teacherid,$subject,'pt3',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'pt3',$grading) == 'false'){
        
         foreach(array_combine($name,$pt3) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'pt3',$grading)") or die(mysqli_error());
    }
       }else{  
            
      foreach(array_combine($name,$pt3) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'pt3' && `grading` = '$grading'") or die(mysqli_error());
           }
    }    
         
    if(checkscore($schoolyear,$teacherid,$subject,'pt4',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'pt4',$grading) == 'false'){  
     foreach(array_combine($name,$pt4) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'pt4',$grading)") or die(mysqli_error());
    }
        }else{  
      foreach(array_combine($name,$pt4) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'pt4' && `grading` = '$grading'") or die(mysqli_error());
           }
    }  
     if(checkscore($schoolyear,$teacherid,$subject,'pt5',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'pt5',$grading) == 'false'){

     foreach(array_combine($name,$pt5) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'pt5',$grading)") or die(mysqli_error());
    }
    }else{  
      foreach(array_combine($name,$pt5) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'pt5' && `grading` = '$grading'") or die(mysqli_error());
           }
    }         
     if(checkscore($schoolyear,$teacherid,$subject,'pt6',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'pt6',$grading) == 'false'){     
     foreach(array_combine($name,$pt6) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'pt6',$grading)") or die(mysqli_error());
    }
    }else{  
      foreach(array_combine($name,$pt6) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'pt6' && `grading` = '$grading'") or die(mysqli_error());
           }
    }
     if(checkscore($schoolyear,$teacherid,$subject,'pt7',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'pt7',$grading) == 'false'){
     foreach(array_combine($name,$pt7) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'pt7',$grading)") or die(mysqli_error());
    }
        }else{  
      foreach(array_combine($name,$pt7) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'pt7' && `grading` = '$grading'") or die(mysqli_error());
           }
    } 
     if(checkscore($schoolyear,$teacherid,$subject,'pt8',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'pt8',$grading) == 'false'){
     foreach(array_combine($name,$pt8) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'pt8',$grading)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($name,$pt8) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'pt8' && `grading` = '$grading'") or die(mysqli_error());
           }
    }  
     if(checkscore($schoolyear,$teacherid,$subject,'pt9',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'pt9',$grading) == 'false'){
     foreach(array_combine($name,$pt9) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'pt9',$grading)") or die(mysqli_error());
    }
       }else{  
      foreach(array_combine($name,$pt9) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'pt9' && `grading` = '$grading'") or die(mysqli_error());
           }
    }
     if(checkscore($schoolyear,$teacherid,$subject,'pt10',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'pt10',$grading) == 'false'){
     foreach(array_combine($name,$pt10) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'pt10',$grading)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($name,$pt10) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'pt10' && `grading` = '$grading'") or die(mysqli_error());
           }
    }   
//////========================female
    if(checkscore($schoolyear,$teacherid,$subject,'gpt1',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gpt1',$grading) == 'false'){
    foreach(array_combine($gname,$gpt1) as $new => $value){
       
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gpt1',$grading)") or die(mysqli_error());
    }
        }else{  
      foreach(array_combine($gname,$gpt1) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gpt1' && `grading` = '$grading'") or die(mysqli_error());
           }
    }
     if(checkscore($schoolyear,$teacherid,$subject,'gpt2',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gpt2',$grading) == 'false'){
    foreach(array_combine($gname,$gpt2) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gpt2',$grading)") or die(mysqli_error());
        
    }
         }else{  
      foreach(array_combine($gname,$gpt2) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gpt2' && `grading` = '$grading'") or die(mysqli_error());
           }
    }  
     if(checkscore($schoolyear,$teacherid,$subject,'gpt3',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gpt3',$grading) == 'false'){
     foreach(array_combine($gname,$gpt3) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gpt3',$grading)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($gname,$gpt3) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gpt3' && `grading` = '$grading'") or die(mysqli_error());
           }
    } 
     if(checkscore($schoolyear,$teacherid,$subject,'gpt4',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gpt4',$grading) == 'false'){
     foreach(array_combine($gname,$gpt4) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gpt4',$grading)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($gname,$gpt4) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gpt4' && `grading` = '$grading'") or die(mysqli_error());
           }
    } 
     if(checkscore($schoolyear,$teacherid,$subject,'gwpt',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gpt5',$grading) == 'false'){
     foreach(array_combine($gname,$gpt5) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gpt5',$grading)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($gname,$gpt5) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gpt5' && `grading` = '$grading'") or die(mysqli_error());
           }
    } 
     if(checkscore($schoolyear,$teacherid,$subject,'gpt6',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gpt6',$grading) == 'false'){
     foreach(array_combine($gname,$gpt6) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gpt6',$grading)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($gname,$gpt6) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gpt6' && `grading` = '$grading'") or die(mysqli_error());
           }
    } 
     if(checkscore($schoolyear,$teacherid,$subject,'gpt7',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gpt7',$grading) == 'false'){
     foreach(array_combine($gname,$gpt7) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gpt7',$grading)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($gname,$gpt7) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gpt7' && `grading` = '$grading'") or die(mysqli_error());
           }
    }  
     if(checkscore($schoolyear,$teacherid,$subject,'gpt8',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gpt8',$grading) == 'false'){
     foreach(array_combine($gname,$gpt8) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gpt8',$grading)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($gname,$gpt8) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gpt8' && `grading` = '$grading'") or die(mysqli_error());
           }
    }   
     if(checkscore($schoolyear,$teacherid,$subject,'gpt9',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gpt9',$grading) == 'false'){
     foreach(array_combine($gname,$gpt9) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gpt9',$grading)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($gname,$gpt9) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gpt9' && `grading` = '$grading'") or die(mysqli_error());
           }
    }  
     if(checkscore($schoolyear,$teacherid,$subject,'gpt10',$grading) == 'false' && checkexist($schoolyear, $teacherid, $subject, 'gpt10',$grading) == 'false'){
     foreach(array_combine($gname,$gpt10) as $new => $value){
   
       $conn->query("INSERT INTO `test` VALUES('', '$new', '$value', '$teacher_id', '$subject_name', '$school_year', 'gpt10',$grading)") or die(mysqli_error());
    }
         }else{  
      foreach(array_combine($gname,$gpt10) as $new => $value){
       $conn->query("UPDATE `test` SET `score` = '$value' WHERE `test`.`name` = '$new' && `test`.`school_year` = '$schoolyear' && `written_num` = 'gpt10' && `grading` = '$grading'") or die(mysqli_error());
           }
    }
    
    
    $hpsw1 = $_POST["hpsw1"];
    $hpsw2 = $_POST["hpsw2"];
    $hpsw3 = $_POST["hpsw3"];
    $hpsw4 = $_POST["hpsw4"];
    $hpsw5 = $_POST["hpsw5"];
    $hpsw6 = $_POST["hpsw6"];
    $hpsw7 = $_POST["hpsw7"];
    $hpsw8 = $_POST["hpsw8"];
    $hpsw9 = $_POST["hpsw9"];
    $hpsw10 = $_POST["hpsw10"];
    $hpsp1 = $_POST["hpsp1"];
    $hpsp2 = $_POST["hpsp2"];
    $hpsp3 = $_POST["hpsp3"];
    $hpsp4 = $_POST["hpsp4"];
    $hpsp5 = $_POST["hpsp5"];
    $hpsp6 = $_POST["hpsp6"];
    $hpsp7 = $_POST["hpsp7"];
    $hpsp8 = $_POST["hpsp8"];
    $hpsp9 = $_POST["hpsp9"];
    $hpsp10 = $_POST["hpsp10"];
    $psqa = $_POST["psqa"];
    
    
   
    
     $q1 = $conn->query ("SELECT * FROM `highestpossiblescores` WHERE `teacher_id` = '$teacherid' && `subject_name` = '$subject_name' && `school_year` = '$schoolyear' && `grading` = '$grading'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
         $conn->query("UPDATE `highestpossiblescores` SET `hpsw1` = '$hpsw1', `hpsw2` = '$hpsw2', `hpsw3` = '$hpsw3', `hpsw4` = '$hpsw4', `hpsw5` = '$hpsw5', `hpsw6` = '$hpsw6', `hpsw7` = '$hpsw7', `hpsw8` = '$hpsw8', `hpsw9` = '$hpsw9', `hpsw10` = '$hpsw10', `hpsp1` = '$hpsp1', `hpsp2` = '$hpsp2', `hpsp3` = '$hpsp3', `hpsp4` = '$hpsp4', `hpsp5` = '$hpsp5', `hpsp6` = '$hpsp6', `hpsp7` = '$hpsp7', `hpsp8` = '$hpsp8', `hpsp9` = '$hpsp9', `hpsp10` = '$hpsp10', `psqa` = '$psqa' WHERE `highestpossiblescores`.`teacher_id` = 1 && `highestpossiblescores`.`subject_name` = '$subject_name' && `highestpossiblescores`.`school_year` = '$schoolyear' && `grading` = '$grading'") or die(mysqli_error());
         
    }
    else{
      
         $conn->query("INSERT INTO `highestpossiblescores` VALUES ('', '$teacherid', '$subject_name', '$schoolyear', '$hpsw1', '$hpsw2', '$hpsw3', '$hpsw4', '$hpsw5', '$hpsw6', '$hpsw7', '$hpsw8', '$hpsw9', '$hpsw10', '$hpsp1', '$hpsp2', '$hpsp3', '$hpsp4', '$hpsp5', '$hpsp6', '$hpsp7', '$hpsp8', '$hpsp9', '$hpsp10', '$psqa' ,$grading);") or die(mysqli_error());


    }
    
           
    
    
    

}

    echo "<script type='text/javascript'>alert('Successfully added new written works!');</script>";
   echo "<script>document.location='../studentslist.php?id=$teacher_id&subject_name=$subject_name&school_year=$school_year'</script>";  

?>
