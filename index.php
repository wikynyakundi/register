<?php 
 require 'config.php';
 ?>
<!DOCTYPE html>
<html>
<head></head>
<body>


 <h2>REGISTER</h2>
            <form method="post" name="sentMessage" id="contactForm">
                <input type="text" name="FIRSTNAME" placeholder="FIRSTNAME"...required><br><br>
                <input type="text" name="LASTNAME" placeholder="LASTNAME"...required><br><br>
                <input type="text" name="EMAIL" placeholder="EMAIL"...required><br><br>
                <input type="text" name="AGE" placeholder="AGE"...required><br><br>
                <input type="submit" name="btnsubmit" value="SUBMIT"><br><br>
            </form>
            <?php
                if(isset($_POST['btnsubmit']))
                {
                    $FIRSTNAME =$_POST['FIRSTNAME'];
                    $LASTNAME = $_POST['LASTNAME'];
                    $EMAIL = $_POST['EMAIL'];
                    $AGE = $_POST['AGE'];
                    $sql = "INSERT INTO `credentials`(`FIRSTNAME`, `LASTNAME`, `EMAIL`,`AGE`) VALUES ('$FIRSTNAME','$LASTNAME','$EMAIL','$AGE')" ;
                    if(mysqli_query($conn,$sql)){
                        echo'<script>alert("Message sent successfully")</script>';
                    }
                }	

?>

</body>

</html>