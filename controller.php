<?php
    //Insert Methods
    class Controller extends Model {
        public function postSecret($secret, $viewtoepx, $ttl, $hash){
            $this->setSecret($secret, $viewtoepx, $ttl, $hash);
        }
        public function deleteSecret(){
            $this->test();
        }
        public function minusViewExp($hash){
            $this->setViewExp($hash);
        }
    }
?>