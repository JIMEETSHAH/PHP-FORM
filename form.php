<?php include("connection.php"); ?>


<?php
   if($_POST['register'])
   {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['conpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    
    $query = "INSERT INTO form (fname,lname,password,cpassword,gender,email,phone,address) values('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";
    $data = mysqli_query($conn,$query);

    if($data)
    {
        echo"Data inserted into database";
    }
    else
    {
        echo"Failed";
    }   
   }
?>


                                                 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP form</title>
</head>
<body>
    <div class="container">
        <form action = "" method = "post">
        <div class="title">
            Registration Form
        </div>

        <div class="form">
            <div class="input-field">
                <label>First name</label>
                <input type="text" class="input" name="fname" required>
            </div>

            <div class="input-field">
                <label>Last name</label>
                <input type="text" class="input" name="lname" required>
            </div>

            <div class="input-field">
                <label>Password</label>
                <input type="password" class="input" name="password" required>
            </div>

            <div class="input-field">
                <label>Confirm Password</label>
                <input type="password" class="input" name="conpassword" required>
            </div>

            <div class="input-field">
                <label>Gender</label>
                <select class="selectbox" name="gender" required>
                    <option>Select</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>

            <div class="input-field">
                <label>Email Address</label>
                <input type="text" class="input" name="email" required>
            </div>

            <div class="input-field">
                <label>Phone Number</label>
                <input type="text" class="input" name="phone" required>
            </div>

            <div class="input-field">
                <label>Address</label>
                <textarea class="textarea" name="address" required></textarea>
            </div>

            <div class="input-field">
                <input type="submit" value="Register" class="btn" name="register">
            </div>
        
        </div>
    </form>
    </div>
</body>
</html>
