<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logiiin.css">
    <title>Login</title>
</head>
<body>
    <form action="#" method="POST">
        <fieldset>
            <legend><b>Login</b></legend>
            <label for="email">G_mail :</label>
            <input type="email" id="email" placeholder="enter email" name="email" required><br><br>

            <label for="password">Password :</label>
            <input type="password" id="password" placeholder="password" name="password" required><br><br>
            <button name="connecter"><b>Connecter</b></button><br>
            <small>Not having an account yet? <a href="inscription.php"><b>Register</b></a></small>
        </fieldset>
    </form>

    <?php
    session_start();
    require "conexion.php";

    function containsSpecialChars($string) {
        $specialChars = ['#', "'", '_', '-'];
        foreach ($specialChars as $char) {
            if (strpos($string, $char) !== false) {
                return true;
            }
        }
        return false;
    }

    if (isset($_POST['connecter'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($email) && !empty($password)) {
            if (containsSpecialChars($password)) {
                echo "Le mot de passe ne peut pas contenir les caractères spéciaux #, ', _, ou -.";
            } else {
                $req = "SELECT typee FROM utilisateurs1 WHERE email='$email' AND mot_passe='$password'";
                $result = mysqli_query($cnx, $req);
                $res = mysqli_fetch_assoc($result);

                if ($res) {
                    // Store email in session
                    $_SESSION['email'] = $email;

                    if ($res['typee'] == 'stagaire') {
                        header("Location: stagaire.php");
                        exit();
                    } elseif ($res['typee'] == 'administrateur') {
                        header("Location: administrateur.php");
                        exit();
                    } else {
                        echo "Type d'utilisateur non reconnu";
                    }
                } else {
                    echo "Email ou mot de passe incorrect";
                }
                mysqli_close($cnx);
            }
        } else {
            echo "Veuillez remplir tous les champs";
        }
    }
    ?>
</body>
</html>
