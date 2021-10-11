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
        private $host ="eu-cdbr-west-01.cleardb.com";
        private $user ="bb54426b107560";
        private $pwd ="6ca5230e";
        private $dbName ="heroku_eff92da004bcfc7";
    //Connecting to database
    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        //$dsn = 'mysql:dbname=' . $this->dbName .';host=' . $this->host;
        try {
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        } catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return $pdo;
    }
}
?>