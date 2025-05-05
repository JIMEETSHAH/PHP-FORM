<?php include("connection.php"); 

$id = $_GET['id'];

$query = "SELECT * FROM form where id='$id'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);
?>


<?php
   if($_POST['update'])
   {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['conpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    
    $query = "UPDATE form set fname='$fname', lname='$lname', password='$pwd', cpassword='$cpwd', gender='$gender', email='$email', phone='$phone', address='$address' WHERE id='$id'";
    
    $data = mysqli_query($conn,$query);

    if($data)
    {
        echo"<script>alert('Record Updated')</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php" />
        <?php
    }
    else
    {
        echo"Failed To Update";
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
            Update Student Details
        </div>

        <div class="form">
            <div class="input-field">
                <label>First name</label>
                <input type="text" value="<?php echo $result['fname']; ?>" class="input" name="fname" required>
            </div>

            <div class="input-field">
                <label>Last name</label>
                <input type="text"  value="<?php echo $result['lname']; ?>" class="input" name="lname" required>
            </div>

            <div class="input-field">
                <label>Password</label>
                <input type="password" value="<?php echo $result['password']; ?>" class="input" name="password" required>
            </div>

            <div class="input-field">
                <label>Confirm Password</label>
                <input type="password" value="<?php echo $result['cpassword']; ?>" class="input" name="conpassword" required>
            </div>

            <div class="input-field">
                <label>Gender</label>
                <select class="selectbox" name="gender" required>
                    <option value="">Select</option>
                    
                    <option value="Male"
                        <?php 
                            if($result['gender'] == 'male')
                            {
                                echo "Selected";
                            }
                        ?>
                    >
                    
                    Male</option>
                    <option value="Female"
                        <?php 
                            if($result['gender'] == 'female')
                            {
                                echo "Selected";
                            }
                        ?>
                    
                    >
                    Female</option>
                </select>
            </div>

            <div class="input-field">
                <label>Email Address</label>
                <input type="text"  value="<?php echo $result['email']; ?>" class="input" name="email" required>
            </div>

            <div class="input-field">
                <label>Phone Number</label>
                <input type="text" value="<?php echo $result['phone']; ?>" class="input" name="phone" required>
            </div>

            <div class="input-field">
                <label>Address</label>
                <textarea class="textarea" name="address" required>
                    <?php echo $result['address']; ?>
                </textarea>
            </div>

            <div class="input-field">
                <input type="submit" value="Update Details" class="btn" name="update">
            </div>
        
        </div>
    </form>
    </div>
</body>
</html>
