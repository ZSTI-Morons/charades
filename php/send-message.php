<?php
    require_once "db-connection.php";

    if (isset($_POST["message"])) {
        $message = $_POST["message"];
        $date = date("Y-m-d H:i:s");

        $mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);

        $query = "INSERT INTO chat_messages VALUES ('', 2, 1, '$message', '$date')";
        $result = $mysqli->query($query);

        $mysqli->close();
    }
?>
