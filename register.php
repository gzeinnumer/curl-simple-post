<?php
    if (isset($_POST["Token"])){
        $token = $_POST["Token"];
        $conn = new mysqli("localhost", "root", "", "db_fcm");

//        $query = "INSERT INTO user(Token) VALUES('".$token."') ON DUPLICATE KEY UPDATE Token = '".$token."';";
        $query = "INSERT INTO user(Token) VALUES('".$token."');";

        $exeQuery=mysqli_query($conn, $query);
        echo ($exeQuery) ?
            json_encode(array('kode' => 1,'result_insert' => 'data berhasil diinsert')) :
            json_encode(array('kode' => 2,'result_insert' => 'data gagal diinsert'));
    }
?>