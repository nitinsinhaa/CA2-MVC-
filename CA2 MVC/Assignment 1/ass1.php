<html>  
<body>  
<h1>Sum of two numbers</h1>
<form method="post">  
<b>Enter First Number:  </b>
<input type="number" name="number1" /><br><br>  
<b>Enter Second Number:  </b>
<input type="number" name="number2" /><br><br>  
<input type="submit" name="submit" value="Add">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $sum =  $number1 + $number2;  

        echo "The sum of $number1 and $number2 is: ".$sum;   
}  
?>  
</body>  
</html>