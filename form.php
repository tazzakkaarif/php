<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h2>Registration Form</h2>
<form action="form2.php" method="post">
    <label for="name">Full Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email Address:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Phone Number:</label><br>
    <input type="tel" id="phone" name="phone"><br><br>


    <label for="city">City:</label><br>
    <input type="text" id="city" name="city"><br><br>

    <label for="gender">Gender:</label><br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>


    <input type="submit" value="Submit" name="submitbtn">

</form>







   
<?php




?>













</body>
</html>