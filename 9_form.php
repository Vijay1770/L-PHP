<!DOCTYPE html>
<html>

<head>

<body>

</body>
</head>

</html>

<?php
//We need to first define variables and set to empty values...
$fullname = $email = $gender = $comment = $number = $age = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $gender = test_input($_POST["gender"]);
    $comment = test_input($_POST["comment"]);
    $number = test_input($_POST["number"]);
    $age = test_input($_POST["age"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Form Validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
 
            <!-- Full Name -->
            <label for="name">Full Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <!-- Email -->
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <!-- Gender -->
            <label for="gender">Gender:</label><br>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female" required>
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other" required>
            <label for="other">Other</label><br><br>

            <!-- Comment -->
            <label for="comment">Comment:</label><br>
            <textarea id="comment" name="comment" rows="4" cols="50" required></textarea><br><br>

            <!-- Number -->
            <label for="number">Phone Number:</label><br>
            <input type="tel" id="number" name="number" pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number" required><br><br>

            <!-- Age -->
            <label for="age">Age:</label><br>
            <input type="number" id="age" name="age" min="1" max="100" required><br><br>

            <input type="submit" value="Submit">
        </form>

     <?php
     echo "<h1> Your Input:</h1>";
     echo $fullname;
     echo "<br>";
        echo $email;
        echo "<br>";
        echo $gender;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $number;
     echo "<br>";
        echo $age;
        echo "<br>";
     ?>

    </body>

    </html>

</form>