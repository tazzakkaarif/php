<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="form3.php" method="post">

<label for="">Enter First NO:</label>
<input type="text" name="f_no" >


<label for="">Enter Second NO:</label>
<input type="text" name="l_no" >

<input type="submit" name="addbtn" id="" value="add"> 


</form>
<?php

  
if(isset($_POST["addbtn"])){

     if($_POST['f_no'] !=""  && $_POST['l_no' ] !=""   ){
        $no1=$_POST['f_no'] ;
        $no2=$_POST['l_no'] ;
  
        $result=$no1+$no2;
        $result2=$no1-$no2;
  
        echo "<h1>addition result is:</h1>".$result."<br>";
        echo "<h1>subtraction result is:</h1>".$result2."<br>";
  
     }

     else {

        echo '<h2>please fill the data</h2>';
     }
     

}



?>







</body>
</html>