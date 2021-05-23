<?php
require_once "class.php";

class ContentInfo extends Content {
    public function __construct(){

        //------FUNCÇÕES DE TESTE-----//
        //--recebe as keys
       // $this->setOriginals_netflix(ORIGINALS_NETFLIX);
      //  $this->setAction(ACTION);
     //   $this->setComedy(COMEDY);
      //  $this->setHorror(HORROR);
      //  $this->setRomance(ROMANCE);
     //   $this->setDocumentady(DOCUMENTADY);
        //$this->setLanguage(LANGUAGE);

   }

    public function setTmbUrlImage($urlImage){
        $this->setUrlImage($urlImage);
       // return $this->getUrlImage();
    }     

    public function getTmbUrlImage(){
        return $this->getUrlImage();
    }
}
?>