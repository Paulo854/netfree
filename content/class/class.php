<?php
abstract class Content {

    //--var private
    private $originals_netflix; 
    private $action;
    private $comedy;
    private $horror;
    private $romance;
    private $documentady;
    private $language;
    private $urlImage;

    
    //--Set Functions
    protected function setOriginals_netflix($originals_netflix){
        $this->originals_netflix = $originals_netflix;
    }
    protected function setAction($action){
        $this->action = $action;
    }
    protected function setComedy($comedy){
        $this->comedy = $comedy;
    }
    protected function setHorror($horror){
        $this->horror = $horror;
    }
    protected function setRomance($romance){
        $this->romance = $romance;
    }
    protected function setDocumentady($documentady){
        $this->documentady = $documentady;
    }
    protected function setLanguage($language){
        $this->language = $language;
    }
    protected function setUrlImage($urlImage){
        $this->urlImage = $urlImage;
    }

    //--Get Functions
    public function getOriginals_netflix(){
        return $this->originals_netflix;
    }
    public function getAction(){
        return $this->action;
    }
    public function getComedy(){
        return $this->comedy;
    }
    public function getHorror(){
        return $this->horror;
    }
    public function getRomance(){
        return $this->romance;
    }
    public function getDocumentady(){
        return $this->documentady;
    } 
    public function getlanguage(){
        return $this->language;
    }
    public function getUrlImage(){
        return $this->urlImage;
    }
}
?>