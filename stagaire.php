<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stagiaire</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background-color: #f0f0f0;
            
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px;
            /* background-color:rgba(143, 68, 213, 0.8); */
            /* background: linear-gradient(to right, #0000FF, #00BFFF); */
            /* background: linear-gradient(to right, #0000FF, #00BFFF); */
            
            background: linear-gradient(to right, #0000FF, #0000CC, #000099);


            color: white;
        }

        .header h1 {
            margin: 0;
            font-size: xx-large;
           
        }

        .header h3 {
            margin: 0;
            font-size: large;
        }

        .content {
            text-align: center;
            padding: 20px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .column {
            flex: 0 1 calc(33.333% - 16px);
            margin: 8px;
            box-sizing: border-box;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
        }

        .card img {
            width: 100%;
            height: 200px; /* Fixed height */
            object-fit: cover; /* Ensure the image covers the area without stretching */
        }

        .container {
            padding: 16px;
            text-align: center;
        }

        .title {
            color: grey;
        }

        .button {
            display: inline-block;
            background-color: rgb(49, 51, 190);
            color: white;
            font-size: 18px;
            padding: 8px 16px;
            width: 80px;
            height: 40px;
            margin: 20px 0;
            border-radius: 6px;
            border: 1px solid black;
            transition: all 0.3s ease;
        }

        .button:hover {
            background-color: gray;
        }

        @media screen and (max-width: 650px) {
            .column {
                flex: 0 1 100%;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <?php
        session_start();
        require "conexion.php";

        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            echo "<h3>Bienvenu, $email</h3>";
        } else {
            echo "<p>No email session found. Please log in again.</p>";
        }
        ?>
        <!-- //<h1>Start Quiz</h1> -->
    </div>

    <div class="content">
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="html2.jpg" alt="HTML5">
                    <div class="container">
                        <p class="title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam praesentium eum.</p>
                        <a href="quiz.php"><button class="button">Start</button></a>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="css2.png" alt="CSS3">
                    <div class="container">
                        <p class="title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam praesentium eum.</p>
                        <a href="quiz.php"><button class="button">Start</button></a>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="js2.avif" alt="JavaScript">
                    <div class="container">
                        <p class="title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam praesentium eum.</p>
                        <a href="quiz.php"><button class="button">Start</button></a>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="php2.jpg" alt="PHP">
                    <div class="container">
                        <p class="title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam praesentium eum.</p>
                        <a href="quiz.php"><button class="button">Start</button></a>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="python2.webp" alt="Python">
                    <div class="container">
                        <p class="title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam praesentium eum.</p>
                        <a href="quiz.php"><button class="button">Start</button></a>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="react2.png" alt="React">
                    <div class="container">
                        <p class="title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam praesentium eum.</p>
                        <a href="quiz.php"><button class="button">Start</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
