<?php
    include_once "../shared/includes/database.php";
    include_once '../shared/includes/function.php';

   if(isset($_GET['email'])){
    // $user_select_row = mysqli_query($conn, "SELECT * FROM examiner WHERE Email = \'".$_GET['email']."\'");
    $user_select_row = mysqli_query($conn, "SELECT * FROM `examiner` WHERE `Email` LIKE '".$_GET['email']."'" );
    

    if(!$user_select_row){
        echo "<h1>No Such User exists</h1>";
    }
    else{
        $row = mysqli_fetch_assoc($user_select_row);
        header('Location: email-verification.php?email='.$row['Email']."&reset=true");
    }

   }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up | Teyake</title>
    <link rel="stylesheet" href="css/style-reset.css" />
    <link rel="stylesheet" href="css/signin.css" />
    <style>
    .login-container {
        overflow: hidden;
        padding: 2rem;
    }
    </style>
</head>

<body>
    <div class="container text-white">
        <?php include "../shared/includes/header.php" ?>
        <main class="sign-in-page flex items-center justify-center">
            <div class="login-container flex flex-col items-center justify-center">
                <form action="" method="get">
                    <label for="">Email</label>
                    <input type="email" name="email">
                    <button type="submit">Submit</button>
                </form>
            </div>
        </main>
    </div>
</body>
<!-- <script src="signin.js" type="module"></script> -->

</html>