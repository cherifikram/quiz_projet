<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logiiin.css">
    <title>Document</title>
</head>
<body>
<form action="#" method="POST">
            <fieldset>
                <legend><b>Login</b></legend>
                <label for="email">G_mail :</label>
                <input type="text" id="email" placeholder="enter email"  name="email"><br><br>

                <label for="password">Password :</label>
                <input type="password" id="password" placeholder="       password " name="password"> <br><br>
                <button name="connecter"><b>connecter</b></button><br>
                <small>Not having Acount yet? <a href="register.html"><b>register</b></a></small>

                
        </form>
        <?php
        require "conexion.php";
        if(isset($_POST['connecter'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            if(!empty($email) && !empty($password)){
                // $req = ("SELECT email,mot_passe FROM utilisateurs WHERE email='$email' AND mot_passe='$password' And typee=");
                $req = ("SELECT typee FROM utilisateurs1 WHERE email='$email' AND mot_passe='$password'");
                $result = mysqli_query($cnx, $req);
                $res=mysqli_fetch_assoc($result);

                if($res){
                  if($res['typee']=='stagaire'){
                    header("location: stagaire.php");
                    exit();
                  }elseif($res['typee']=='administrateur'){
                    header("location: administrateur.php");
                    exit();

                  }else{
                    echo"type dutilisateue non reconnu";
                  }
                }else{
                  echo"email ou mot de passe incorect";
                }
              
            mysqli_close($cnx);

                // if($result){
                //     header("location: contact.php");
                // }
                // else{
                //     echo "<p style='color:red'>vous navez pas du compte</p>";
                // }
            }
         }
        
    

        ?>

</body>
</html>