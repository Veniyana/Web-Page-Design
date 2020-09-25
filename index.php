<?php
// database connection
require_once('database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <script src="index.js"></script>
    <title>Lorem ipsum dolor sit amet</title>
</head>

<body>
<div class="php-email">
	<?php
		if (isset($_POST['create-email'])) {
		 	$email = $_POST['email'];
            $sql = "INSERT INTO email (email) VALUES (?)";
            $stmtinsert = $conn->prepare($sql);
            $result = $stmtinsert->execute([$email]);
            $sql_u = "SELECT * FROM `email` WHERE email = '".$email."'";
            $result_u = $conn->query($sql_u);
		 	}
	?>
</div>

    <div class="wrapper">
        <div>
            <img src="./img/head-image.png" id="head-image">
        </div>

        <a href="#mobile-form" class="navigation-button one">Lorem ipsum dolor sit amet</a>

        <!-- the form with the email and submit button -->
        <form id="default-form" class="default-form"  method="post">
            <h1>Lorem ipsum dolor sit amet</h1>
            <input type="email" name="email"placeholder="EMAIL" />
            <input type="submit" name="create-email" value="Lorem ipsum dolor sit amet" onclick="handleClickEvent()">
        </form>


        <p class="heading title text">Lorem ipsum dolor sit amet</p>

        <!-- the steps with the arrows -->
        <div class="steps-container">
            <div class="step-box">
                <img src="./img/1.png">

                <div>
                    <p>Lorem ipsum dolor</p>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <img src="img/triangle.png">
            <div class="step-box">
                <img src="./img/2.png">

                <div>
                    <p class="text">Lorem ipsum dolor</p>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <img src="img/triangle.png">
            <div class="step-box">
                <img src="./img/3.png">

                <div>
                    <p class="text">Lorem ipsum dolor</p>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
        </div>


        <p class="heading text">Curabitur ut facilisis arcu</p>


        <!-- the boxes with a picture and information about a person -->

        <div class="flex-contributors">
            <div class="contributor">
                <img src="img/woman-icon.png">
                <div class="contributor-information">
                    <p class="text">Lorem ipsum dolor sit amet</p>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat quam sem, id
                        facilisis
                        odio
                        tempus eu.</p>
                </div>
            </div>
            <div class="contributor">
                <img src="img/man-icon.png">
                <div class="contributor-information">
                    <p class="text">Lorem ipsum dolor sit amet</p>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat quam sem, id
                        facilisis
                        odio
                        tempus eu.</p>
                </div>
            </div>
        </div>


        <a href="#default-form" class="navigation-button two">Lorem ipsum dolor sit amet</a>

        <form id="mobile-form" class="mobile-form"  method="post">
            <h1 class="text">Lorem ipsum dolor sit amet</h1>
            <input type="email" name="email" placeholder="EMAIL" />
            <input type="submit" name="create-email" value="Lorem ipsum dolor sit amet" onclick="handleClickEvent()">
        </form>



        <div class="logo">
            <img src="./img/globe.png">
            <img src="./img/html-logo.png">
            <img src="./img/js-logo.png">
            <img src="./img/css-logo.png">
            <img src="./img/wordpress-logo.png">
        </div>




        <footer>
            <div class="links">
                <a href="#" class="text">Lorem ipsum</a>
                <a href="#" class="text">Lorem ipsum</a>
                <a href="#" class="text">Lorem ipsum</a>
            </div>
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat quam sem, id
                facilisis odio
                tempus eu. Curabitur ut facilisis arcu, sed vehicula risus. Ut faucibus ut sapien at dictum. Ut ut
                elementum sem. Proin vulputate purus mauris.</p>
        </footer>
    </div>
</body>

</html>