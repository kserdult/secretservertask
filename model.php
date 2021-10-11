<?php
    //Database operations
    include 'dbh.php';

    class Model extends Dbh{
        /*public function test(){
            $sql = "DELETE FROM secrets WHERE timestamp < CURRENT_TIMESTAMP - INTERVAL timetolive MINUTE OR viewstoexp <= 0;";
            $stmt = $this->connect()->query($sql);
        }*/
        protected function getRandom(){
            $sql = "SELECT secret, hash FROM secrets ORDER BY RAND() LIMIT 1;";
            $stmt = $this->connect()->query($sql);
            $results= $stmt->fetchAll();
            return $results;
        }
        protected function getHashSecret($hash){
            $sql = 'SELECT secret FROM secrets WHERE hash="' . $hash . '" LIMIT 1';
            $stmt = $this->connect()->query($sql);
            $results= $stmt->fetchAll();
            return $results;
        }
        protected function setSecret($sec, $viewexp, $ttl, $hash){
            $sql = "INSERT INTO secrets(secret, viewstoexp, timetolive,hash) VALUES (?,?,?,?)";
            $stmt = $this ->connect()->prepare($sql);
            $stmt->execute([$sec, (int)$viewexp, (int)$ttl, $hash]);
        }
        protected function setViewExp($hash) {
            $sql = 'UPDATE secrets SET viewstoexp = viewstoexp-1 WHERE hash="' . $hash .'";';
            $stmt = $this->connect()->query($sql);
        }
    }
    $mod = new Model();
    //$mod-> test();
?>