<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <div class="wrapper-content">
            <!-- <div class="account">
                
            </div> -->
            <div>
                <!-- <h1>selamat datang,  -->
                <?php
            include("database.php");
            // include("login.php");
                session_start();
                if($_SESSION['name'] == false) {
                    echo'<h1>ANDA BELUM PUNYA AKUN</h1>';
                }else{
                    $variable = $_SESSION['name'];
                
                echo "<h1>Selamat datang, ".$variable."</h1>";
                }
                
                // echo "$";
                // $name2 =

                // if(isset[])

                function tekan(){
                    echo "bisa";
                    
                }
                
                // if ($variable = true) {
                //     echo "ada";
                // }else{
                //     echo "tidak ada";
                // }
            
             ?>
                <!-- </h1> -->
            </div>
            <div>
                <!-- <button></button> -->

                <!-- <button action="login.php" style=" width: 100px; height: 100px; background-color: red;" onclick="tekan();"></button> -->
                <!-- <?php tekan(); ?> -->
                <div style= "display: flex; width: 500px; justify-content: space-around; padding: 15px 0 15px 0; background-color: white;">
            <a href="#">home</a>    
            <a href="login.php">login</a>
            <a href="tambah-akun.php">tambah akun</a>
            <a href="daftar-akun.php">daftar akun</a>
            <?php
            if($_SESSION["name"] == true)
            echo '<a href="log-out.php">log-out</a>';
            ?>
            
        </div>


                <div class="punyaAkun"></div>
                <div class='belumPunyaAkun'></div>
                <?php
                    // echo $_SESSION['passowrd'];
                ?>
            </div>
            <div>
            </div>
            
        </div>
    </body>
</html>