<?php

if (isset($_POST['submit']))
{

    require 'connection.php';
    
    $email=$_POST['email'];
    $password=$_POST['password'];

    if(empty($email)||empty($password))
    {
        header("Location: Login.php?error=empty_fields");
        exit();
    }else{
      
        $sql="select * from client_info where email=?;";
        $statment=mysqli_stmt_init($connection);

        if(!mysqli_stmt_prepare($statment,$sql)){
            header("Location: Login.php?error=sql_error");
            exit();
        }else{
          mysqli_stmt_bind_param($statment,"s",$email);
          mysqli_stmt_execute($statment);
          $result=mysqli_stmt_get_result($statment);

          if($row= mysqli_fetch_assoc($result))
          {
            $password_Check=$password==$row['password'];
            if($password_Check == false){
                header("Location: Login.php?error=Incorrect_Password");
                exit();
            }else if($password_Check== true){
                session_start();
                $_SESSION['id']=$row['member_id'];
                $_SESSION['first']=$row['first_name'];
                $_SESSION['last']=$row['last_name'];
                $_SESSION['goals']=$row['fitness_goals'];
                $_SESSION['schedule']=$row['workout_schedule'];
                $_SESSION['level']=$row['fitness_level'];

                header("Location: Login.php?error=none");
                exit();
            }else{
                header("Location: Login.php?error=Incorrect_Password");
                exit();
            }
          }else{
            header("Location: Login.php?error=No_Account");
            exit();
          }
        }
    }
    
}
else
{
    header("Location: Login.php");
    exit();
}