<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
<form action="signup.php" method="POST">
   <fieldset>
        <legend><H1>REGISTER</H1></legend>
        <fieldset id="personal_info">
            <legend><h3>Personal Info:</h3></legend>

            Name: <input type="text" name="first_name" placeholder="Enter First Name">
            Surname: <input type="text" name="last_name" placeholder="Enter Last Name">
            Phone Number: <input type="tel" name="phone_number" placeholder="088 123 7654">
            Enter Email:<input type="email" name="email" placeholder="example@gmail.com">
            Create A Password: <input type="password" name="password" placeholder="Enter Password">
            Re-enter Password: <input type="password" name="password_2" placeholder="Re-enter Password">
        </fieldset>
   
        <fieldset id="your_fitness">

            <legend><h3>Your Fitness:</h3></legend>

            What are your fitness goals? <textarea name="fitness_goals" id="fitnessgoals" maxlength="100" placeholder="My fitness goals are..."></textarea>
        
            Select Your Workout Schedule<select name="workout_schedule">
            <option value="once a week">Once a week</option>
            <option value="twice a week">Twice a week</option>
            <option value="three times a week">Three times a week</option>
            <option value="four times a week">Four times a week</option>
            <option value="five times a week">Five times a week</option>
            <option value="six times a week">Six times a week</option>
            <option value="seven times a week">Seven times a week</option>
            </select>
        
            What is your current fitness level?(1 and 10)<input type="number" name="fitness_level" min="1" max="10">
        </fieldset>
        <button type="submit" name="submit">SIGN UP!</button>   
   </fieldset>
   
</form> 
</body>

</html>