<?php
    //Adding database information

    //Get Heroku ClearDB connection information
    
    /*$cleardb_server = $cleardb_url["host"];
    $cleardb_username = $cleardb_url["user"];
    $cleardb_password = $cleardb_url["pass"];
    $cleardb_db = substr($cleardb_url["path"],1);
    $active_group = 'default';
    $query_builder = TRUE;
    // Connect to DB
    $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
    */

    class Dbh {
        private $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        private $host ="localhost";
        private $user =$cleardb_url["user"];
        private $pwd =$cleardb_url["pass"];
        private $dbName =substr($cleardb_url["path"],1);
    //Connecting to database
    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $pdo;
    }
}
?>