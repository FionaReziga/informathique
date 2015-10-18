<?php
    class ConnexionBD{
        private $_connexion;
        public function __construct(){
            $this->_connexion = new PDO('mysql:host=localhost;dbname=ptut', 'root', '');
        }

        public function getData($requete){
            $result = $this->_connexion->prepare($requete);
            $result->execute();
            return $result;
        }

        public function setData($requete){
            $result = $this->_connexion->prepare($requete);
            $result->execute();
        }
    }
?>