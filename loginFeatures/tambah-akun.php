<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php include("database.php"); ?>
    </head>
    <body>



        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="name">Masukkan nama anda</label>
            <br>
            <input type="text" name="name" required="required">
            <br><br>
            <label for="password">password</label>
            <br>
            <input type="password" name="password" required="required">
            <br>
            <br>
            <label for="email">massukkan email anda :</label>
            <br>
            <input type="text" name="email" id="" required="required">

            <input type="submit" value="submit">
        </form>
        
        <?php
        session_start();
        
        
    
        // $name = filter_input(INPUT_POST,"name", FILTER_SANITIZE_SPECIAL_CHARS);
        // $password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);
        $name = $_GET['name'];
        $password = $_GET['password'];
        // $_SESSION("variable", $name);
        

        if(empty($name)){
            echo"masukkan nama";
        }elseif (empty($password)){
            echo "masukkan password";
        }else{
            // echo "your name is " . $variable . "<br>";
            // // echo "your passowrd is " . $password . "<br>";
            // echo "<br>";
            // echo $_SERVER['REQUEST_TIME'] . "<br>";
            // // echo $time[strtotime($_SERVER['REQUEST_TIME'])] ."<br>";
        }
        $sql = "INSERT INTO users_account (name, password)
                VALUES ('$name', '$password')";
        $query = mysqli_query($db, $sql);
        // if()

        if($query){
            // echo "location: index.php";
            // header('location : index.php');
            header('location: index.php?status=berhasil');
        }else{
            echo "tidak berhasil";
        }

        $_SESSION['name'] = $name;


        ?>
    </body>
    
    <?php mysqli_close($db) ?>
</html>