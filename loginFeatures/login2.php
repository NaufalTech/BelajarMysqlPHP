<?php 

    include("database.php");

    // try{
        $sql = "INSERT INTO users_account (name, password) 
        VALUES ('naufa3', 'sa')";
        $query = mysqli_query($db , $sql);
    // }
    // catch(mysqli_sql_exception){
    //     echo "tidak bisa". mysqli_error($db);
    // }

    if ($query){
        echo "bisa masuk";
    }else{
        echo "tidak bisa";
    }
    // session_start();
    // $_SESSION['variable'] = 'This is a variable from file1.php';
    
    // mysqli_close($db);
  
?>