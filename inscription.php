<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
</head>
<body>

<form action="#" method="POST">
    <fieldset>
        <legend><b>Register</b></legend>
        <label for="firstname">FirstName:</label>
        <input type="text" id="firstname" placeholder="enter firstname" name="firstname" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="gmail@gmail.com" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="password" required><br><br>

        <label for="type">Type:</label>
        <input type="radio" name="choix" id="stagaire" value="stagaire" required>
        <label for="stagaire">Stagaire</label>
        
        <input type="radio" name="choix" id="administrateur" value="administrateur" required>
        <label for="administrateur">Administrateur</label><br><br>
        
        <input type="checkbox" id="terms_and_condition" name="terms_and_condition" required>
        <label for="terms_and_condition"> I agree with the terms and condition</label><br><br>
        
        <button name="register">Register</button><br><br>
        <!-- <small>Having an account? <a href="login.html"><b>Login</b></a></small> -->
    </fieldset>
</form>

<?php
session_start();
require "conexion.php";

if(isset($_POST['register'])){
    $lg = $_POST['firstname'];
    $email = $_POST['email'];
    $pssword = $_POST['password'];
    $choix = isset($_POST['choix']) ? $_POST['choix'] : '';

    if(!empty($lg) && !empty($email) && !empty($pssword) && !empty($choix)){
        $req = "INSERT INTO utilisateurs1(firstName, email, mot_passe, typee) VALUES ('$lg', '$email', '$pssword', '$choix')";
        $result = mysqli_query($cnx, $req);

        if($result){
            // Store email in session
            $_SESSION['email'] = $email;

            if($choix == 'stagaire'){
                header("Location: stagaire.php");
            } elseif ($choix == 'administrateur') {
                header("Location: administrateur.php");
            }
            exit();
        } else {
            echo "<p style='color:red'>Error: " . mysqli_error($cnx) . "</p>";
        }

        mysqli_close($cnx);
    } else {
        echo "<p style='color:red'>Please fill in all the information</p>";
    }
}
?>

</body>
</html>
