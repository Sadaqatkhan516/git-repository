<html>
<body>
<head>
    <title>Sample HTML5 Layout</title>
    <link href="stylesheet.css" rel="stylesheet" />
</head>
<header>
        <h1>QuEsTiOn 1 SoLuTiOn</h1>
    </header>
    <nav>
        <ul>
            <li><a href="http://localhost:3000/practise2.php">Back to Home</a></li>
	
<li>
<form method="post">
<p>Please enter positive integer :<input type="number" name="number" placeholder="Positive integer..."><br>
</p>
<input type="submit" name="submit" value="Question 1">
<input type="submit" name="submit1" value="Question 2">
<input type="submit" name="submit2" value="Question 3">
<input type="submit" name="submit3" value="Question 4">
</form>
</li>
        </ul>

<article>

<?php

//Question 1 part 1 Addition of given,next and previous entered number
 
if(isset($_POST['submit']))  
{  
	$EntNum = $_POST['number'];
	$EntNeg = $EntNum -1;
	$EntPos = $EntNum +1;
	$FinNum = $EntNeg+$EntNum+$EntPos;      
	echo "($EntNum-1)+$EntNum+($EntNum+1)= ".$FinNum;   
} 

//Question 1 part 2 Simplified program for Addition

if(isset($_POST['submit1']))  
{  
	$EntNum = $_POST['number'];
	$FinNum = $EntNum*3;    
	echo "($EntNum-1)+$EntNum+($EntNum+1)= ".$FinNum;   
} 

//Question 1 part 3 Calculate the highest number using all arthematic operations on the next and previous given number 

if(isset($_POST['submit2']))  
{  
	$EntNum = $_POST['number'];
	$EntNeg = $EntNum -1;
	$EntPos = $EntNum +1;
	
//All operations +/-*
	
	$FinAdd =  $EntPos+$EntNum+$EntNeg;  
	$FinDiv =  $EntNeg/$EntNum/$EntPos;
	$FinSub =  $EntPos-$EntNum-$EntNeg;
	$FinMul =  $EntPos*$EntNum*$EntNeg;

//Display all the answers with equations

	echo "<br>($EntNum+1) + $EntNum + ($EntNum-1)= ".$FinAdd;    
	echo "<br>($EntNum-1) / $EntNum / ($EntNum+1)= ".$FinDiv; 
	echo "<br>($EntNum+1) - $EntNum - ($EntNum-1)= ".$FinSub;
	echo "<br>($EntNum+1) x $EntNum x ($EntNum-1)= ".$FinMul; 

//Compariosn which is greater number in all the above operations
	
	if($FinAdd>$FinDiv && $FinAdd>$FinSub && $FinAdd>$FinMul)
		{
			echo "<br>Greater no is ",$FinAdd;
		}
		elseif($FinDiv>$FinAdd && $FinDiv>$FinSub && $FinDiv>$FinMul)
		{
			echo "<br>Greater no is ",$FinDiv;
		}
		elseif($FinSub>$FinAdd && $FinSub>$FinSub && $FinSub>$FinMul)
		{
			echo "<br>Greater no is ",$FinSub;
                }            
            else
                {
                echo "<br>Greater no is ",$FinMul;
		}
	echo "<br>equations are changed to get maximum possible outcome, Also the sequence of equation of division is changed to avoid divide by 0"; 

} 


//Question 1 part 4 Simplified version to find the highest number 

if(isset($_POST['submit3']))  
{  
	$EntNum = $_POST['number'];
	$EntNeg = $EntNum -1;
	$EntPos = $EntNum +1;
	
//All operations +/-*
	
	$FinAdd =  $EntPos+$EntNum+$EntNeg;  
	$FinDiv =  $EntNeg/$EntNum/$EntPos;
	$FinSub =  $EntPos-$EntNum-$EntNeg;
	$FinMul =  $EntPos*$EntNum*$EntNeg;

//Display all the answers with equations

	echo "<br>($EntNum+1) + $EntNum + ($EntNum-1)= ".$FinAdd;    
	echo "<br>($EntNum-1) / $EntNum / ($EntNum+1)= ".$FinDiv; 
	echo "<br>($EntNum+1) - $EntNum - ($EntNum-1)= ".$FinSub;
	echo "<br>($EntNum+1) x $EntNum x ($EntNum-1)= ".$FinMul; 

//Compariosn which is greater number in all the Arthematic operations
	
	echo "<br>The simplified answer is ", max($FinAdd,$FinDiv,$FinSub,$FinMul);
	echo "<br>equations are changed to get maximum possible outcome, Also the sequence of equation of division is changed to avoid divide by 0 "; 

} 
?>
</article>
<aside id='sidebar'>
                <h1> Slider Box </h1>
                <section> You can write or mention your Slider description here </section>
</aside>  
<figure>
            <img src="IMG_0210.jpg" height="180px" width="300px" />
            <figcaption>Figure caption goes here</figcaption>
        </figure>
       
            Hello world! Hello world! Hello world!
            Hello world! Hello world! Hello world!
        
		
    

    <section>
        <h1>This is a section heading</h1>
        
            Hello world! Hello world! Hello world!
            Hello world! Hello world! Hello world!
            Hello world! Hello world! Hello world!
        
    </section>
    <footer>
        <hr />
        Copyright (C) 2019. All rights reserved.
    </footer>
</body>
</html>