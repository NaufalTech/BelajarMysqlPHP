<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" style="display: grid;">
        <label for="name" style="margin-bottom: 10px;">Masukkan nama anda :</label>
        <!-- <br> -->
        <input type="text" name="name" required="required" style="margin-bottom: 25px;">

        <label for="password" style="margin-bottom: 10px;">Masukkan password anda :</label>
        <input type="password" name="password" required="required" style="margin-bottom: 25px;">
        <input type='submit' value="submit" name="kirim">
    </form>

    <?php
    include("database.php");

    

    session_start();
    
    if(isset($_POST["kirim"])) {
        $nama = $_POST['name'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users_account WHERE name = '$nama' AND password = '$password' ";
        $query = mysqli_query($db, $sql);
    }

    // $password = $_SESSION["password"];

    // echo $password;

    $tampil = mysqli_fetch_array($query);
    // echo "<p>".$tampil["reg_date"].'</p>';
    
    if($tampil == true) {
        // $nama = $_SESSION["name"];
        $_SESSION["name"] = $tampil["name"];
        header("location: index.php");
    }else{
        // if($tampil == false){
        //  echo"akun yang dimasukkan tidak terdapat";
        // }else
        echo "akun dan password yang anda masukkan tidak cocok dengan manapun";
    }


?>
</body>
</html>

