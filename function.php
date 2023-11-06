<?php
function connectToDb(){
    $pdo = new PDO(
        'mysql:host=localhost;dbname=assignment1',
        'root',
        ''
    );
    return $pdo;
}
function selectAll(PDO $pdo, string $table, string $class){
    $statement = $pdo->prepare('select * from '.$table);
    $statement->execute();
    return $statement->fetchAll(
    PDO::FETCH_CLASS,
    $class);
}
?>