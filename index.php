<!DOCTYPE html>
<html>

<head>
    <title>Login website:</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <header>
        <h1>
            Platforma do tworzenia zamówień
        </h1>
    </header>
    <main>

        <form action="dbInsertUser.php" method="POST">
            <div>
                <label class="labelInput" for="newUserName">Enter your name:</label>
                <input class="sizeInput" type="text" name="newUserName" placeholder="User"><br>
            </div>
            <div>
                <label class="labelInput" for="newUserEmail">Enter your email</label>
                <input class="sizeInput" type="text" name="newUserEmail" placeholder="E-mail"><br>
            </div>
            <div>
                <label class="labelInput" for="newUserPassword">Enter your new password:</label>
                <input class="sizeInput" type="passwor" name="newUserPassword" placeholder="password"><br>
            </div>
            <div>
                <button class="sizeInput" type="submit" name="submit">Sign up</button>
            </div>
        </form>
        <?php
        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


        if (strpos($fullUrl, "signup=empty") == true) {
            echo "You did not fill in all fields!";
            exit();
        } elseif (strpos($fullUrl, "signup=email") == true) {
            echo "You used invalid e-mail!";
            exit();
        } elseif (strpos($fullUrl, "signup=success") == true) {
            echo "You have been signed up!";
            exit();
        }

        ?>
    </main>

</body>

</html>