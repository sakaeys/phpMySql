<?php 
    try {
        $dsn = 'mysql:host=db;dbname=test_db;charset=utf8';
        $db = new PDO($dsn, 'test_user', 'test_password');

        $sql = 'SELECT id, name, email, plan, start_datetime, end_datetime FROM test_user;';
        $contact = $db->prepare($sql);
        $contact->execute();
        $result = $contact->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
