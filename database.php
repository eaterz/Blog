<?php

class Database{
    public function do(){
        $connection_string = "mysql:host=localhost;port=3306;dbname=blog_tavs_uzvards;user=root;password=;charset=utf8mb4";

        $connection = new PDO($connection_string);

        $query = $connection->prepare("SELECT * FROM posts");

        $query->execute();

        return $posts = $query->fetchAll(PDO::FETCH_ASSOC);
    }
}