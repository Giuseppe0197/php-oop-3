<!-- *      Definire classe Computer:
*          ATTRIBUTI:
*          - codice univoco
*          - modello
*          - prezzo
*          - marca
* 
*          METODI:
*          - costruttore che accetta codice univoco e prezzo
*          - proprieta' getter/setter per tutte le variabili d'istanza
*          - printMe: che stampa se stesso (come quella vista a lezione)
*          - toString: "marca modello: prezzo [codice univoco]"
* 
*          ECCEZIONI:
*          - codice univoco: deve essere composto da esattamente 6 cifre (no altri caratteri)
*          - marca e modello: devono essere costituiti da stringhe tra i 3 e i 20 caratteri
*          - prezzo: deve essere un valore intero compreso tra 0 e 2000
* 
*      Testare la classe appena definita con tutte le casistiche interessanti per verificare
*      il corretto funzionamento dell'algoritmo -->

<?php

    class Computer {
        private $code;
        private $model;
        private $price;
        private $brand;

        public function __construct($code, $price){
            $this -> setCode($code);
            $this -> setPrice($price);
        }

        public function getCode(){
            return $this -> code;
        }

        public function setCode($code){
            if(strlen($code) != 6 || !is_numeric($code))
                throw new Exception("Il codice deve essere composto da 6 cifre");
            $this -> code = $code;
        }

        public function getModel(){
            return $this -> model;
        }

        public function setModel($model){

            if(strlen($model) < 3 || strlen($model) > 20)
                throw new Exception("Il modello deve contenere tra i 3 e i 20 caratteri");
            $this -> model = $model;
        }

        public function getPrice(){
            return $this -> price;
        }

        public function setPrice($price){
            if(!is_int($price) || $price < 0 || $price > 2000)
            throw new Exception("Il prezzo deve essere compreso tra 0 e 2000, solo numeri");
            $this -> price = $price;
        }

        public function getBrand(){
            return $this -> brand;
        }

        public function setBrand($brand){
            if(strlen($brand) < 3 || strlen($brand) > 20)
                throw new Exception("La marca deve contenere tra i 3 e i 20 caratteri");
            $this -> brand = $brand;
        }

        public function printMe(){
            echo $this . "<br>";
        }

        public function __tostring(){
            return "Marca" . ": " . $this -> brand . "<br>" . " " . "Modello: " . $this -> model . "<br>" .  "Prezzo: " . $this -> price . "<br>" . "Codice Univoco " . " [" . $this -> code . "]";
        }

        
        
    }
    try {

        $computer1 = new Computer(365917, 20);
    
        $computer1 -> setModel("f5333");

        $computer1 -> setBrand("Lenovo");
    
        $computer1 -> printMe();
    } catch (Exception $e){
        echo "<br><h1>" . $e -> getMessage() . "</h1>";
    } finally {

        echo "esecuzione finale indipendente dagli errori";
    }

?>