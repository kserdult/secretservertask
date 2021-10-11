<?php
    //Get Methods
    class View extends Model {
        //Outputting all usernames
        public function showRandomSecret(){
            $results = $this->getRandom();
               //echo $results[0]['secret'];
            print_r($results);
            return $results[0]['hash'];
        }
        public function showHashSecret($hash) {
            $results = $this->getHashSecret($hash);
            if ($results) return $results[0]['secret'];
            else return false;
        }
    }
?>