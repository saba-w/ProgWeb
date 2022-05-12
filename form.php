<?php 
if (isset($_POST['valider'])) {
$firstName = htmlspecialchars($_POST['firstname']);
$lastName = htmlspecialchars($_POST['lastname']);
$message = htmlspecialchars($_POST['message']);
$url = htmlspecialchars($_POST['url']);

$url = $url == ''? null : $url;

try {
    $pdo = new PDO('sqlite:' .dirname(__FILE__) . '/database.db');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->query(
        'CREATE TABLE IF NOT EXISTS formulaire (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            first_name VARCHAR(50) NOT NULL,
            last_name VARCHAR(50) NOT NULL,
            message TEXT NOT NULL
        )'
    );

    if (preg_match('/^[\S]{1,50}$/', $firstName) && 
        preg_match('/^[\S]{1,50}$/', $lastName) && 
        $message !== '' && 
        ($url == null || preg_match('/^(?:http|https|ftp):\/\/[\S]{1,92}$/', $url))
    ) {
        $statement = $pdo->prepare(
        'INSERT INTO formulaire (first_name, last_name, message, url) VALUES (:first_name, :last_name, :message, :url)' 
        );
        $statement->bindValue('first_name', $firstName, PDO::PARAM_STR);
        $statement->bindValue('last_name', $lastName, PDO::PARAM_STR);
        $statement->bindValue('message', $message, PDO::PARAM_STR);
        $statement->bindValue('url', $url, PDO::PARAM_STR);
        $statement->execute();
    }
        
} catch(PDOException $exception) {
        var_dump($exception);
    }
}