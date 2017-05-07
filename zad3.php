
<form action="#" method="POST">
    <label>Nazwa:
        <input type="text" name="name">
    </label>
    <label>Cena:
        <input type="number" name="price">
    </label>
    <label>Opis:
        <input type="text" name="description">
    </label>
    <input type="submit" value="wyślij">
</form>
<br>

<?php
require_once dirname(__FILE__).'/config.php';

//poniżej wpisz swoje rozwiązanie

if (!empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['description'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DBNAME);
    
    if ($conn->connect_error) {
        die('Połączenie nieudane. Błąd: ' . $conn->connect_error);
    }
    
    $sql = "INSERT INTO Items (name, price, description) VALUES ('$name', $price, '$description')";
    
    $res = $conn->query($sql);
    var_dump($res);
    if ($res == TRUE) {
        $lastID = $conn->insert_id;
        echo 'Do bazy danych został dodany nowy przedmiot o id '.$lastID;
    } else {
        echo 'Nie dodało do bazy';
    }

    $conn->close();
    $conn = null;
    
} else {
    echo 'Brak przesłania wymaganych danych POST';
}