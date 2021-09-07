<?php 

$config = require 'config.php';

require 'Connection.php';

$db = Connection::connect($config['database']);

require 'Todo.php';
require 'QueryBuilder.php';

$query = new QueryBuilder($db);

?>



<?php 

class Todo {

    public function isDone() {

        return ($this->done) ? true : false; 
    }

    public function makeItDone() {
        
    }
}

?>