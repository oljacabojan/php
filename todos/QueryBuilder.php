<?php 

class QueryBuilder {

    private $db;

    public function __constructor($db) {

        $this->db = $db;
    }

    public function selectAll($table) {

        $sql = "SELECT * FROM {$table}";
        $query = $this->db->prepare($sql);
        $query->execute();
        $todos = $query->fetchAll(PDO::FETCH_CLASS, $class);

        return $todos;
    }
}

?>