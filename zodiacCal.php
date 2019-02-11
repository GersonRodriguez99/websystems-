<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <style type="text/css">

body{
    background-color:blueviolet;
    color:white;
    font-family: Arial, Helvetica, sans-serif;
}
    @keyframes box{
    0%{background-color: blueviolet;}
    25%{background-color: rgb(46, 0, 253);}
    50%{background-color: rgb(165, 5, 66);}
    75%{background-color: rgb(5, 95, 155);}
    100%{background-color: rgb(0, 4, 226);}

}
tr{
    background-color: rgb(50, 5, 92);
    text-align:center;
}
th.color{
    background-color:black;
    color:white;
    animation-name:box;
    animation-duration:5s;
    animation-iteration-count:infinite;

}
h1{
    text-align:center;
}
table{
    align:center;
    margin-left:100px;
}
input{
	font-family: Arial, Helvetica, sans-serif;
	background-color: rgb(50, 5, 92);
	color: rgb(219, 239, 255);
	border-bottom-color: #60C;
	border-bottom-style: hidden;
	border-style: none;
}
#button{
	margin-left: 30px;
	border-color: #6600CC;
	color: #32055C;
	background-color: white;
	width: 5cm;
}
div{
	margin-top: 300px;
	margin-left: 200px;
	align-items: center;
	height: auto;
	weight: 50px;
	background-color: rgb(50, 5, 92);
	margin-right: 200px;
}
#year{
	align: center;
	background-color: #93F;
	margin-left: -250px;
	alignment-adjust: central;
	text-align: center;
}

form{
	align: center;
	align-content: center;
	height: auto;
	margin-left: 250px;
	margin-top: 200px;
}

    </style>
</head>
<body>
<?php
$Number="";
$DisplayForm= true;
if (isset($_POST['Submit'])) {
    $Number = $_POST['Number'];
    
    if (is_numeric($Number)) {
         $DisplayForm = FALSE;
    } else {
         echo "<p>YOU NEED TO ENTER A NUMERIC VALUE.</p>\n";
         $DisplayForm = TRUE;
    }
}

?>
<?php
if($DisplayForm){
?>
<div>
<form name="NumberForm" action="zodiacCal.php" 
     method="post">
<p id="year" ><b>Enter the year:</b> <input type="text" name="Number" 
value="<?php echo $Number; ?>" /></p>
<input id="button" type="submit" name="Submit" value="CALENDAR" 
/></p>
</form>
</div>
<?php

}
else {
   echo $Number;
   echo "<p><a href=\"zodiacCal.php\">Try 
   again?</a></p>\n";
   
   echo "<table>","<tr>";
  $startyear= 1912;
  $endyear=2019;
  $Zodiac = array("Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Goat", "Monkey", "Rooster", "Dog", "Pig");
 $count=0;

 for ($row = 0; $row < 12; ++$row) {
    echo "<th>",$Zodiac[$row],"</th>";
}

echo "</tr>", "<tr>";

//Row with images
for ($row = 0; $row < 12; ++$row) {
    echo "<td>","<img src='./images/",$Zodiac[$row],".gif'/>", "</td>";
}

echo "</tr>";
  $year=$startyear;
  for($year;$year<=$endyear;$year++){
    $count++;
   
    if($count==13){
        $count=1;
        
        echo "<tr>";
        
    }
    
        
        if($year==$Number){
        echo "<th class='color'>$year</th>";
        }else {
          echo  "<th>$year</th>";
        }
        
    

   
   
  }

echo "</table>,</tr>";




}
?>
  <?php

    ?>

</body>
</html>