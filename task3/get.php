<?php
//connect to database 
$conn = mysqli_connect('localhost', 'root','');
    
if(!$conn){
    die('Connction Failed');
}
$db_select = mysqli_select_db($conn,'user_integer');

if(!$db_select){
    die('could not find user_integer database');
}
//varibel

$Integer = $_GET['int'];



//if the user press subimt the integer will added to the batabase  
    
if(isset($_GET["submit"])){


  

    $query = "INSERT INTO integers(integers)VALUES('$Integer')";


	$result =mysqli_query($conn,$query);
      

    if ($result) {


        echo "Integer Added Successfully " . "<br>" . "<br>";
       
    } else {
        echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

      
} 
    
else

{
    echo "Failure!";}
    
?>
