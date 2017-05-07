<?php
require_once dirname(__FILE__).'/config.php';

if ( $_SERVER['REQUEST_METHOD'] == 'GET') {
    
    if (isset($_GET['userId'])) {
        $userId = $_GET['userId'];
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DBNAME);

        if ($conn->connect_error) {
            die('Połączenie nieudane. Błąd: ' . $conn->connect_error);
        }

        $query = "SELECT id, message FROM Messages WHERE user_id = $userId";
        $res = $conn->query($query);
        if ($res->num_rows > 0) {
            foreach ($res as $row) {
                echo $row['id'].' '.$row['message'].'<br>';
            }
        } else {
            echo 'Brak wiadomości dla danego użytkownika';
        }
        
        $conn->close();
        $conn = null;
    
        
    } else {
        echo 'Brak przesłania wymaganych danych GET';
    }
    
} else {
    echo 'Proszę wejść na stronę metodą GET';
}