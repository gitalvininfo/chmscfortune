<style>
    .body{
        -moz-transform: scale(0.9);
    }
</style>
<?php 
$grading = $_GET['grading'];

require('require/grades_query.php');
$subject = $_GET['subject_name'];
$teacherid = $_GET['id'];
$schoolyear = $_GET['school_year'];

$gender = 'Male';
$gender2 = 'Female';

$W1 = getW($schoolyear, $teacherid, $subject,$gender,'w1',$grading);
$W2 = getW($schoolyear, $teacherid, $subject,$gender,'w2',$grading);
$W3 = getW($schoolyear, $teacherid, $subject,$gender,'w3',$grading);
$W4 = getW($schoolyear, $teacherid, $subject,$gender,'w4',$grading);
$W5 = getW($schoolyear, $teacherid, $subject,$gender,'w5',$grading);
$W6 = getW($schoolyear, $teacherid, $subject,$gender,'w6',$grading);
$W7 = getW($schoolyear, $teacherid, $subject,$gender,'w7',$grading);
$W8 = getW($schoolyear, $teacherid, $subject,$gender,'w8',$grading);


$GW1 = getW($schoolyear, $teacherid, $subject,$gender2,'gw1',$grading);
$GW2 = getW($schoolyear, $teacherid, $subject,$gender2,'gw2',$grading);
$GW3 = getW($schoolyear, $teacherid, $subject,$gender2,'gw3',$grading);
$GW4 = getW($schoolyear, $teacherid, $subject,$gender2,'gw4',$grading);
$GW5 = getW($schoolyear, $teacherid, $subject,$gender2,'gw5',$grading);
$GW6 = getW($schoolyear, $teacherid, $subject,$gender2,'gw6',$grading);
$GW7 = getW($schoolyear, $teacherid, $subject,$gender2,'gw7',$grading);
$GW8 = getW($schoolyear, $teacherid, $subject,$gender2,'gw8',$grading);


$PT1 = getW($schoolyear, $teacherid, $subject,$gender,'pt1',$grading);
$PT2 = getW($schoolyear, $teacherid, $subject,$gender,'pt2',$grading);
$PT3 = getW($schoolyear, $teacherid, $subject,$gender,'pt3',$grading);
$PT4 = getW($schoolyear, $teacherid, $subject,$gender,'pt4',$grading);
$PT5 = getW($schoolyear, $teacherid, $subject,$gender,'pt5',$grading);
$PT6 = getW($schoolyear, $teacherid, $subject,$gender,'pt6',$grading);
$PT7 = getW($schoolyear, $teacherid, $subject,$gender,'pt7',$grading);
$PT8 = getW($schoolyear, $teacherid, $subject,$gender,'pt8',$grading);

$PSQA1 = getW($schoolyear, $teacherid, $subject,$gender,'qa1',$grading);

$GPT1 = getW($schoolyear, $teacherid, $subject,$gender2,'gpt1',$grading);
$GPT2 = getW($schoolyear, $teacherid, $subject,$gender2,'gpt2',$grading);
$GPT3 = getW($schoolyear, $teacherid, $subject,$gender2,'gpt3',$grading);
$GPT4 = getW($schoolyear, $teacherid, $subject,$gender2,'gpt4',$grading);
$GPT5 = getW($schoolyear, $teacherid, $subject,$gender2,'gpt5',$grading);
$GPT6 = getW($schoolyear, $teacherid, $subject,$gender2,'gpt6',$grading);
$GPT7 = getW($schoolyear, $teacherid, $subject,$gender2,'gpt7',$grading);
$GPT8 = getW($schoolyear, $teacherid, $subject,$gender2,'gpt8',$grading);

$GPSQA1 = getW($schoolyear, $teacherid, $subject,$gender2,'gqa1',$grading);

$HPS = gethps($schoolyear, $teacherid, $subject,$grading);
?>

<html>
    <head>
        <title></title>
        <style type="text/css">
            @media print {
                .print {
                    display:none !important;
                }
            }
        </style>
    </head>
    <body>
        <center><h1>Class Record</h1>
        <h3> <img src="img/alijis/logo2.png" style="width:80px;height:80px;"/> REGION VI &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DIVISION - NEGROS OCCIDENTAL&nbsp; &nbsp; &nbsp; &nbsp; 
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DISCTRICT - VALLADOLID <img src="img/alijis/deped.jpg" style="width:100px;height:100px;"/></h3>
        <h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SCHOOL NAME - ALIJIS ELEMENTARY SCHOOL &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; SCHOOL ID - 117422 &nbsp; &nbsp; &nbsp; &nbsp; SCHOOL YEAR - <?php echo $schoolyear?></h3>
        </center>
        
        <h3></h3>
        <button class="print" onclick="javascript:window.print()">Print</button> <hr>
        <form name="submit" action="crud/saveclassrecord.php?id=<?php echo $teacherid?>&subject_name=<?php echo $subject?>&school_year=<?php echo $schoolyear?>&grading=<?php echo $grading?>" method="POST">
            <button type="submit" name="submit" value="1">Save</button>
            <button type="submit" name="submit" value="2">Exit</button>
            <hr />
            <table border="1">
                <tr>

                    <td width="5%" colspan="2" style="text-align:center;"><b>FIRST QUARTER</b></td>
                    <td style="border-right:none;padding-left:2px;" width="25%" colspan="4" style="text-align:right;"><b>GRADE &SEC:</b></td>
                    <td style="border-left:none;color:#000000;padding-left:10px;" colspan="6"><?php echo $_GET['subject_name']?></td>
                    <td style="border-right:none;padding-left:2px;" width="10%" colspan="2" style="text-align:right;"><b>TEACHER:</b></td>
                    <td width="10%"  style="border-left:none;color:#000000;padding-left:10px;" width="20%" colspan="7"><?php echo $_GET['id']?></td>
                    <td style="border-right:none;padding-left:100px;" width="5%" colspan="6" style="text-align:right;"><b>SUBJECT </b></td>
                    <td style="border-left:none;color:#000000;" colspan="2"><?php echo $_GET['subject_name']?></td>
                </tr>
                <tr>
                    <td width="2%"></td>
                    <td width="100%" style="text-align:center;"><h5><b>LEARNER'S NAMES</b></h5></td>
                    <td width="10%" style="text-align:center;" colspan="10"><h5><b>WRITTEN WORKS (20%)</b></h5></td>
                    <td width="10%" style="text-align:center;" colspan="10"><h5><b>PERFORMANCE TASK (60%)</b></h5></td>
                    <td style="text-align:center;padding:0px 1px 0px 1px;" colspan="5"><h5><b>QUARTERLY ASSESSMENT (20%)</b></h5></td>
                    <td width="1%" style="text-align:center;" rowspan="4"><h6><b>INITIAL GRADE</b></h6></td>
                    <td width="1%" style="text-align:center;" rowspan="4"><h6><b>QUARTERLY GRADE</b></h6></td>
                </tr>
            <tr>
                <td></td>
                <td></td>

                <td width="3%" style="text-align:center;">1</td>
                <td width="3%" style="text-align:center;">2</td>
                <td width="3%" style="text-align:center;">3</td>
                <td width="3%" style="text-align:center;">4</td>
                <td width="3%" style="text-align:center;">5</td>
                <td width="3%" style="text-align:center;">6</td>
                <td width="3%" style="text-align:center;">7</td>
                <td width="3%" style="text-align:center;">8</td>    
                <td width="2%" style="text-align:center;">Total</td>
                <td width="5%" style="text-align:center;">PS</td>
                <td width="5%" style="text-align:center;">WS</td>

                
                <td width="3%" style="text-align:center;">1</td>
                <td width="3%" style="text-align:center;">2</td>
                <td width="3%" style="text-align:center;">3</td>
                <td width="3%" style="text-align:center;">4</td>
                <td width="3%" style="text-align:center;">5</td>
                <td width="3%" style="text-align:center;">6</td>
                <td width="3%" style="text-align:center;">7</td>
                <td width="3%" style="text-align:center;">8</td>
            
                <td width="2%" style="text-align:center;">Total</td>
                <td width="5%" style="text-align:center;">PS</td>
                <td width="5%" style="text-align:center;">WS</td>

                <td width="1%" style="text-align:center;">1</td>
                <td width="5%" style="text-align:center;">PS</td>
                <td width="5%" style="text-align:center;">WS</td>



            </tr>
             <tr>
                <td></td>
                 <td><div style="font-size: 75%;"><b>HIGHEST POSSIBLE SCORE</b></div></td>
                 
                <td><?php echo "<input style='border:none' type='text' size='1' name='hpsw1' value='$HPS[hpsw1]' maxlength='2' id='1' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='hpsw2' value='$HPS[hpsw2]' maxlength='2' id='2' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='hpsw3' value='$HPS[hpsw3]' maxlength='2' id='3' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='hpsw4' value='$HPS[hpsw4]' maxlength='2' id='4' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='hpsw5' value='$HPS[hpsw5]' maxlength='2' id='5' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='hpsw6' value='$HPS[hpsw6]' maxlength='2' id='6' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='hpsw7' value='$HPS[hpsw7]' maxlength='2' id='7' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='hpsw8' value='$HPS[hpsw8]' maxlength='2' id='8' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
           
                <?php $hpstotal = $HPS['hpsw1']+$HPS['hpsw2']+$HPS['hpsw3']+$HPS['hpsw4']+$HPS['hpsw5']+$HPS['hpsw6']+$HPS['hpsw7']+$HPS['hpsw8'];?>
                 <td><?php echo $hpstotal; ?></td>
                <td><?php echo "100.00"?></td>
                <td><?php echo "20%"?></td>

                
                <td><?php echo "<input style='border:none' type='text' size='1' name='hpsp1' value='$HPS[hpsp1]' maxlength='2' id='11' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='hpsp2' value='$HPS[hpsp2]' maxlength='2' id='12' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='hpsp3' value='$HPS[hpsp3]' maxlength='2' id='13' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='hpsp4' value='$HPS[hpsp4]' maxlength='2' id='14' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='hpsp5' value='$HPS[hpsp5]' maxlength='2' id='15' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='hpsp6' value='$HPS[hpsp6]' maxlength='2' id='16' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='hpsp7' value='$HPS[hpsp7]' maxlength='2' id='17' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='hpsp8' value='$HPS[hpsp8]' maxlength='2' id='18' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
       
                <?php $hpstotal1 = $HPS['hpsp1']+$HPS['hpsp2']+$HPS['hpsp3']+$HPS['hpsp4']+$HPS['hpsp5']+$HPS['hpsp6']+$HPS['hpsp7']+$HPS['hpsp8'];?>
                <td><?php echo $hpstotal1 ?></td>
                <td><?php echo "100.00"?></td>
                <td><?php echo "60%"?></td>
                
                <td><?php echo "<input style='border:none' type='text' size='1' name='psqa' value='$HPS[psqa]'/>"?></td>
                <td><?php echo "100.00"?></td>
                <td><?php echo "20%"?></td>

            



            </tr>
          
            <tr>
                <td style="background-color:#e6e6e6;"></td>
                <td colspan="40" style="background-color:#e6e6e6;color:#000000;padding-left:2px;">Male</td>
            </tr>
            <input type="hidden" value="<?php echo $_GET['school_year']?>" name="school_year">
            <?php
            require 'connection.php';
                     
            $query = $conn->query("SELECT * FROM `enrollstudent` where `teacher_id` = '$_GET[id]' && `subject_name` = '$_GET[subject_name]' && `gender` = 'Male' && `sy` ='$_GET[school_year]'") or die(mysqli_error());
            $i = 1;
            $a = 0;        
                
            while($fetch = $query->fetch_array()){
            ?>                                      
            <tr>          
                

                 
                
                <input type="hidden" value="<?php echo $fetch['teacher_id']?>" name="teacher_id">
                <input type="hidden" value="<?php echo $fetch['name']?>" name="name[]">
                <input type="hidden" value="<?php echo $fetch['subject_name']?>" name="subject_name">
                
                <td><?php echo $i; $i++;?></td>
                <td><?php echo $fetch['name']?></td>

                <td><?php echo "<input style='border:none' type='text' size='1' name='w1[]' value='$W1[$a]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='w2[]' value='$W2[$a]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='w3[]' value='$W3[$a]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='w4[]' value='$W4[$a]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='w5[]' value='$W5[$a]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='w6[]' value='$W6[$a]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='w7[]' value='$W7[$a]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='w8[]' value='$W8[$a]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
    
                <td><?php echo intval($W1[$a])+intval($W2[$a])+intval($W3[$a])+intval($W4[$a])+intval($W5[$a])+intval($W6[$a])+intval($W7[$a])+intval($W8[$a]) ?></td>
                <?php
                $total = number_format(intval($W1[$a])+intval($W2[$a])+intval($W3[$a])+intval($W4[$a])+intval($W5[$a])+intval($W6[$a])+intval($W7[$a])+intval($W8[$a]),2);
                ?>
                <?php 
                if($total == 0 && $hpstotal == 0){
                    $ps = '0.00';
                    $tws = '0.00';
                }else{
                $ps = number_format(($total/$hpstotal*100),2);
                $tws = number_format(($total/$hpstotal*100/100*20),2);    
                }
                ?>
                <td><?php echo $ps; ?></td>
                <td><?php echo $tws; ?> 
                </td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='pt1[]' value='$PT1[$a]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='pt2[]' value='$PT2[$a]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='pt3[]' value='$PT3[$a]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='pt4[]' value='$PT4[$a]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='pt5[]' value='$PT5[$a]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='pt6[]' value='$PT6[$a]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='pt7[]' value='$PT7[$a]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='pt8[]' value='$PT8[$a]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
     
                <td><?php echo intval($PT1[$a])+intval($PT2[$a])+intval($PT3[$a])+intval($PT4[$a])+intval($PT5[$a])+intval($PT6[$a])+intval($PT7[$a])+intval($PT8[$a]) ?></td>
                <?php   $total1 = number_format((intval($PT1[$a])+intval($PT2[$a])+intval($PT3[$a])+intval($PT4[$a])+intval($PT5[$a])+intval($PT6[$a])+intval($PT7[$a])+intval($PT8[$a])),2)
                ?>
                <?php
                  if($total1 == 0 && $hpstotal1 == 0){
                    $ps1 = '0.00';
                    $tws1 = '0.00';
                }else{
                $ps1 = number_format(($total1/$hpstotal1*100),2);
                $tws1 = number_format(($total1/$hpstotal1*100/100*60),2);    
                }
                
                
                ?>
                
                <td><?php echo $ps1;?></td>
                <td><?php echo $tws1; ?> 
                </td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='qa1[]' value='$PSQA1[$a]'/>"?></td>
                <?php 
                if($PSQA1[$a] ==0 && $HPS['psqa'] == 0){
                    $ps = '';
                }else{
                    $ps =  number_format((intval($PSQA1[$a])/$HPS['psqa']*100),2);
                }
                ?>
                <td><?php echo $ps;?></td>
                <?php
                if($PSQA1[$a] ==0 && $HPS['psqa']==0){
                    $ws = '';
                }else{
                    $ws = number_format(((intval($PSQA1[$a])/$HPS['psqa']*100)/100*20),2);
                }
                ?>
                <td><?php echo $ws ?></td>
                <?php        
                     $initialgrade = number_format((intval($tws) + intval($tws1) + intval($ws)),2);  
                ?>
                <td><?php echo "<input style='border:none' type='text' size='1' name='initialgrade[]' value='$initialgrade'/>"
                 ?></td>
                <?php
               $quartergrade = number_format($initialgrade + 4); 
                    if($quartergrade == 4){
                    $quartergrade = '';
                    }
                ?>
                <?php
                 if($quartergrade > 100){
                    $quartergrade = '100';
                    }
                ?>
                <td>
                    <?php 
                    echo "<input style='border:none' type='text' size='1' name='quartergrade[]' value='$quartergrade'/>"
                    ?>
                </td>
            </tr>
                    
            <?php
                $a++;
            
            }
            $conn->close();
            ?>
           

        
            <tr>
                <td style="background-color:#e6e6e6;"></td>
                <td colspan="40" style="background-color:#e6e6e6;color:#000000;padding-left:2px;">Female</td>


            </tr>
             <?php
            require 'connection.php';
            $query = $conn->query("SELECT * FROM `enrollstudent` where `teacher_id` = '$_GET[id]' && `subject_name` = '$_GET[subject_name]' && `gender` = 'Female' && `sy` ='$_GET[school_year]'") or die(mysqli_error());
            $i = 1;
            $b = 0;  
            while($fetch = $query->fetch_array()){
          
            ?>                                      
            <tr>
                <td><?php echo $i; $i++;?></td>
                  <input type="hidden" value="<?php echo $fetch['name']?>" name="gname[]">
                <td><?php echo $fetch['name']?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='gw1[]' value='$GW1[$b]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='gw2[]' value='$GW2[$b]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='gw3[]' value='$GW3[$b]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='gw4[]' value='$GW4[$b]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='gw5[]' value='$GW5[$b]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='gw6[]' value='$GW6[$b]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='gw7[]' value='$GW7[$b]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='gw8[]' value='$GW8[$b]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
           
                <td><?php echo intval($GW1[$b])+intval($GW2[$b])+intval($GW3[$b])+intval($GW4[$b])+intval($GW5[$b])+intval($GW6[$b])+intval($GW7[$b])+intval($GW8[$b]) ?></td>
                <?php 
               $gtotal = intval($GW1[$b])+intval($GW2[$b])+intval($GW3[$b])+intval($GW4[$b])+intval($GW5[$b])+intval($GW6[$b])+intval($GW7[$b])+intval($GW8[$b]);
                ?>
                <?php
                  if($gtotal == 0 && $hpstotal == 0){
                    $gps = '0.00';
                    $tgws = '0.00';
                }else{
                $gps = number_format(($gtotal/$hpstotal*100),2);
                $tgws = number_format(($gtotal/$hpstotal*100/100*20),2);    
                }
                ?>
                <td><?php echo $gps; ?></td>
                <td><?php echo  $tgws; ?></td>
               <td><?php echo "<input style='border:none' type='text' size='1' name='gpt1[]' value='$GPT1[$b]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='gpt2[]' value='$GPT2[$b]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='gpt3[]' value='$GPT3[$b]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='gpt4[]' value='$GPT4[$b]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='gpt5[]' value='$GPT5[$b]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='gpt6[]' value='$GPT6[$b]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='gpt7[]' value='$GPT7[$b]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
                <td><?php echo "<input style='border:none' type='text' size='1' name='gpt8[]' value='$GPT8[$b]' maxlength='2' id='$i' onkeypress='return AllowOnlyNumbers(event)'/>"?></td>
           
                <td><?php echo intval($GPT1[$b])+intval($GPT2[$b])+intval($GPT3[$b])+intval($GPT4[$b])+intval($GPT5[$b])+intval($GPT6[$b])+intval($GPT7[$b])+intval($GPT8[$b]) ?></td>
                <?php $gtotal1 = intval($GPT1[$b])+intval($GPT2[$b])+intval($GPT3[$b])+intval($GPT4[$b])+intval($GPT5[$b])+intval($GPT6[$b])+intval($GPT7[$b])+intval($GPT8[$b]);
                ?>
                <?php
                  if($gtotal1 == 0 && $hpstotal1 == 0){
                    $gps1 = '0.00';
                    $tgws1 = '0.00';
                }else{
                $gps1 = number_format(($gtotal1/$hpstotal1*100),2);
                $tgws1 = number_format(($gtotal1/$hpstotal1*100/100*60),2);    
                }
                ?>
               <td><?php echo $gps1; ?></td>
                <td><?php echo $tgws1; ?></td>
                
                <td><?php echo "<input style='border:none' type='text' size='1' name='gqa1[]' value='$GPSQA1[$b]'/>"?></td>
                <?php
                if($GPSQA1[$b]==0 && $HPS['psqa']==0){
                    $ps1 = '';
                }else{
                    $ps1 = number_format((intval($GPSQA1[$b])/$HPS['psqa']*100),2);
                }
                ?>
                <td><?php echo $ps1; ?></td>
                <?php 
                    if($GPSQA1[$b]==0 && $HPS['psqa']==0){
                    $ws1 = '';
                }else{
                    $ws1 = number_format(((intval($GPSQA1[$b])/$HPS['psqa']*100)/100*20),2);
                    }
                ?>
                 <td><?php echo $ws1; ?></td>
                <?php
              $initialgrade1 = number_format((intval($tgws) + intval($tgws1) + intval($ws1)),2);  
                ?>
                <td><?php echo "<input style='border:none' type='text' size='1' name='initialgrade1[]' value='$initialgrade1'/>"
                ?></td>
                <?php 
                    $quartergrade1 = number_format($initialgrade1 + 4); 
                    if($quartergrade1 == 4){
                    $quartergrade1 = '';
                    }
                ?>
                  <?php
                 if($quartergrade1 > 100){
                    $quartergrade1 = '100';
                    }
                ?>
                <td> 
                    <?php echo "<input style='border:none' type='text' size='1' name='quartergrade1[]' value='$quartergrade1'/>"
                ?></td>
            </tr>
            
            <?php
                $b++;
            }
            $conn->close();
            ?>

        </table>
        </form>
        
        <?php 
        function convert($array){
            foreach ($array as $key => $var) {
                $array[$key] = (int)$var;
            }
        return $array;
        }
        
        ?>
        <input type="hidden" name="numberM" value="<?php echo $count_male?>">
        <input type="hidden" name="numberF" value="<?php echo $count_female?>">
        <input type="hidden" name="sy" value="<?php echo $sy?>">
        <input type="hidden" name="grade" value="<?php echo $grade?>">
        <input type="hidden" name="sec" value="<?php echo $sec?>">
        <input type="hidden" name="sub" value="<?php echo $sub?>">
        <input type="hidden" name="teacher" value="<?php echo $id?>">

    </body>
<script>
    function AllowOnlyNumbers(e) {

    e = (e) ? e : window.event;
    var key = null;
    var charsKeys = [
        97, // a  Ctrl + a Select All
        65, // A Ctrl + A Select All
        99, // c Ctrl + c Copy
        67, // C Ctrl + C Copy
        118, // v Ctrl + v paste
        86, // V Ctrl + V paste
        115, // s Ctrl + s save
        83, // S Ctrl + S save
        112, // p Ctrl + p print
        80 // P Ctrl + P print
    ];

    var specialKeys = [
    8, // backspace
    9, // tab
    27, // escape
    13, // enter
    35, // Home & shiftKey +  #
    36, // End & shiftKey + $
    37, // left arrow &  shiftKey + %
    39, //right arrow & '
    46, // delete & .
    45 //Ins &  -
    ];

    key = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;

    //console.log("e.charCode: " + e.charCode + ", " + "e.which: " + e.which + ", " + "e.keyCode: " + e.keyCode);
    //console.log(String.fromCharCode(key));

    // check if pressed key is not number 
    if (key && key < 48 || key > 57) {

        //Allow: Ctrl + char for action save, print, copy, ...etc
        if ((e.ctrlKey && charsKeys.indexOf(key) != -1) ||
            //Fix Issue: f1 : f12 Or Ctrl + f1 : f12, in Firefox browser
            (navigator.userAgent.indexOf("Firefox") != -1 && ((e.ctrlKey && e.keyCode && e.keyCode > 0 && key >= 112 && key <= 123) || (e.keyCode && e.keyCode > 0 && key && key >= 112 && key <= 123)))) {
            return true
        }
            // Allow: Special Keys
        else if (specialKeys.indexOf(key) != -1) {
            //Fix Issue: right arrow & Delete & ins in FireFox
            if ((key == 39 || key == 45 || key == 46)) {
                return (navigator.userAgent.indexOf("Firefox") != -1 && e.keyCode != undefined && e.keyCode > 0);
            }
                //DisAllow : "#" & "$" & "%"
            else if (e.shiftKey && (key == 35 || key == 36 || key == 37)) {
                return false;
            }
            else {
                return true;
            }
        }
        else {
            return false;
        }
    }
    else {
        return true;
       }
    }
    
</script> 
<script src="../chmscfortune/js/plugins/jquery/jquery.min.js"></script>    
<script>
$(document).ready(function(){
    $("input").change(function(){
       $a = $(this).val(); 
       $name = $(this).attr('name');
       $id = $(this).attr('id');
     
  switch($name) {
    case 'w1[]':
       if(Number($("input[name=hpsw1]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;
    case 'w2[]':
       if(Number($("input[name=hpsw2]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;   
    case 'w3[]':
       if(Number($("input[name=hpsw3]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;
    case 'w4[]':
       if(Number($("input[name=hpsw4]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;  
    case 'w5[]':
       if(Number($("input[name=hpsw5]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;
    case 'w6[]':
       if(Number($("input[name=hpsw6]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;   
    case 'w7[]':
       if(Number($("input[name=hpsw7]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;
    case 'w8[]':
       if(Number($("input[name=hpsw8]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;   
     case 'gw1[]':
       if(Number($("input[name=hpsw1]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;
    case 'gw2[]':
       if(Number($("input[name=hpsw2]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;   
    case 'gw3[]':
       if(Number($("input[name=hpsw3]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;
    case 'gw4[]':
       if(Number($("input[name=hpsw4]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;  
    case 'gw5[]':
       if(Number($("input[name=hpsw5]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;
    case 'gw6[]':
       if(Number($("input[name=hpsw6]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;   
    case 'gw7[]':
       if(Number($("input[name=hpsw7]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;
    case 'gw8[]':
       if(Number($("input[name=hpsw8]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;  
//performance task col.          
    case 'pt1[]':
       if(Number($("input[name=hpsp1]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;
    case 'pt2[]':
       if(Number($("input[name=hpsp2]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;   
    case 'pt3[]':
       if(Number($("input[name=hpsp3]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;   
    case 'pt4[]':
       if(Number($("input[name=hpsp4]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break; 
    case 'pt5[]':
       if(Number($("input[name=hpsp5]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;
    case 'pt6[]':
       if(Number($("input[name=hpsp6]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;   
    case 'pt7[]':
       if(Number($("input[name=hpsp7]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;   
    case 'pt8[]':
       if(Number($("input[name=hpsp8]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;     
     case 'gpt1[]':
       if(Number($("input[name=hpsp1]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;
    case 'gpt2[]':
       if(Number($("input[name=hpsp2]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;   
    case 'gpt3[]':
       if(Number($("input[name=hpsp3]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;   
    case 'gpt4[]':
       if(Number($("input[name=hpsp4]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break; 
    case 'gpt5[]':
       if(Number($("input[name=hpsp5]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;
    case 'gpt6[]':
       if(Number($("input[name=hpsp6]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;   
    case 'gpt7[]':
       if(Number($("input[name=hpsp7]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;   
    case 'gpt8[]':
       if(Number($("input[name=hpsp8]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;   
//quarterly assessment
    case 'qa1[]':
       if(Number($("input[name=psqa]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break; 
    case 'gqa1[]':
       if(Number($("input[name=psqa]").val()) < Number($a)){
           alert("Your have input a value that is greater than highest possible score");
       }
        break;       

}
    });
 
});
</script>
</html>