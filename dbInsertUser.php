<?php


if (isset($_POST['submit'])) {
    include_once "connection.php";

    $newUserName =  mysqli_real_escape_string($conn, $_POST['newUserName']);
    $newUserEmail = mysqli_real_escape_string($conn, $_POST['newUserEmail']);
    $newUserPassword = mysqli_real_escape_string($conn, $_POST['newUserPassword']);
    $administratorRigts=0;


    if (empty($newUserName) || empty($newUserEmail) || empty($newUserPassword)) {
        header("Location:index.php?signup=errorEmpty");
    } else {
        if (!filter_var($newUserEmail, FILTER_VALIDATE_EMAIL)) {
            header("Location:index.php?signup=errorEmail");
        } else {


            //new verion
            $sql = "INSERT INTO firstdb (userName, userEmail, userPassword, administratorRights) VALUES (?, ?, ?, ?);";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "SQL error";
            } else {
                mysqli_stmt_bind_param($stmt, "sssi", $newUserName, $newUserEmail, $newUserPassword,$administratorRigts); //s=string, i=integer, b=blob, d=double
                mysqli_stmt_execute($stmt);
            }


            //old version
            //$sql = "INSERT INTO firstdb (userName, userEmail, userPassword) VALUES ('$newUserName', '$newUserEmail', '$newUserPassword');";
            //mysqli_query($conn, $sql);

            header("Location:index.php?signup=success");
        }
    }
} else {
   header("Location:index.php?signup=errorYouDidNotFillOut");
}
