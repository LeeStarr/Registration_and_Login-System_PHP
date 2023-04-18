<?php

if(isset($_POST['submit'])){
    include_once 'connection.php';

    $first=mysqli_real_escape_string($connection, $_POST['first_name']);
    $last=mysqli_real_escape_string($connection,$_POST['last_name']);
    $phone=mysqli_real_escape_string($connection,$_POST['phone_number']);
    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $password=mysqli_real_escape_string($connection,$_POST['password']);
    $goal=mysqli_real_escape_string($connection,$_POST['fitness_goals']);
    $schedule=mysqli_real_escape_string($connection,$_POST['workout_schedule']);
    $level=mysqli_real_escape_string($connection,$_POST['fitness_level']);

    if(empty($first)|| empty($last)|| empty($phone)|| empty($email)|| empty($password)){
        header(Location: "index.php?signup=empty");
    } else{
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
         header(Location: "index.php?signup=invalidemail");
        }else{
         
         $sql="INSERT INTO client_info(first_name,last_name,phone_number,email,password, fitness_goals, workout_schedule, fitness_level) VALUES('$first','$last','$phone','$email','$password', '$goal','$schedule',$level);";
         $result =mysqli_query($connection,$sql);
         header("Location: login.php?login=Please login");
        }
     }
}else{
    header("Location: index.php?signup=error");
}
 
/*$sql="Select * from client_info where first_name='Lily'; ";
    //we want to squery this code by send it to the data base nd run it in the database tht is what we do bellow.*/
 

/*$resultCheck=mysqli_num_rows($result);


    so if we don't have anything in the result, the resultCheck will retun 0and the code bellow will not run
    

    if($resultCheck>0)
    {
        while($row= mysqli_fetch_assoc($result)){
           echo $row['member_id']. "</br>"; 
        }
    }*/  

?>
