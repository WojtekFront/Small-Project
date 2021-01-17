<?php
    session_start();
    include_once "connection.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login website:</title>
</head>

<body>
 
   
    <?php
    $data=2;

    //new version select in DB
    //Create a template
    $sql = "SELECT * FROM firstdb WHERE id=?;";
    //Create statement
    $stmt = mysqli_stmt_init($conn);
    //Preprare the prepared statement
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL statement failed";
    }else{
        mysqli_stmt_bind_param($stmt, "s", $data);
        // Run parameters inside database
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while($row =mysqli_fetch_assoc($result)){
                     echo $row['userEmail']."<br>";
                 }

    }



    //old version select in DB
    // $sql ="SELECT * FROM firstdb;";
    // $result = mysqli_query($conn,$sql);
    // $resultCheck = mysqli_num_rows($result);
    // if($resultCheck > 0){
    //     while($row =mysqli_fetch_assoc($result)){
    //         echo $row['userEmail']."<br>";
    //     }
    // }
?>
</body>

</html>