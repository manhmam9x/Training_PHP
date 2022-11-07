<?php
echo 'Here the index file';

try {
    $dbh - new PDO('mysql:host=db;port=3306;dbname=sampleDB'. 'root', 'root');
    $dbh->exec('CREATE TABLE IF NOT EXISTS sample_table (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        sampe_column VARCHAR(30) NOT NULL
);');

    echo '</br>';
    echo 'Connect Success';
} catch (PDOException $e){
    echo 'Error!';
    echo '</br>';
    echo $e;
    die();
}