<?php

class QueryBuilder {

    protected $pdo;

    public function __construct ( $pdo ) {

        $this->pdo = $pdo;
    }

    function selectAll ( $table ) {

        $statement = $pdo->prepare("SELECT * FROM {$table};");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

}


    // public function __construct( PDO $pdo)
    // {
    //     $this->pdo = $pdo;
    // }
