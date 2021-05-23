<?php
require_once 'class.php';
require_once 'page_error.php';
require_once 'html.php';
require_once 'style.php';
require_once 'script.php';
require_once 'favicon.php';
require_once 'logotipo.php';
require_once 'user.php';
require_once 'image.php';

class converterMethod extends methodGet {
    
    public function nt_ConverterGet($key, $type){

        $this->setMethodKey($key);
        $url = @parse_url($_SERVER['REQUEST_URI']);
        @parse_str($url['query'], $dados);

                       
          if($type < 1){
              return intval(@$dados[$this->getMethodKey()]);
           }elseif($type >= 1){
              return @$dados[$this->getMethodKey()];
           }
                 
    }
    public function nt_ConverterPost($key, $type){
      $this->setMethodKey($key);
      if($type < 1){
        return intval($_POST[$this->getMethodKey($key)]);  
      }elseif($type >= 1){
        return $_POST[$this->getMethodKey($key)]; 
      }

    }

    public function nt_RedirectLocation($location, $status, $external_url){
      $this->setLocation($location);
      $this->setStatus($status);
      $this->setExternalUrl($external_url);

      if(null !== $this->getLocation() &&  $this->getStatus() == false){
        $this->headerRedirect();
      }elseif($this->getLocation() == false && null !==($this->getExternalUrl())){
        $this->headerRedirectExternalUrl();
      }else{
        $this->headerRedirectUser();
      }
    }

    public function nt_Url_Site($url_home, $ssl){
      $this->setUrlHome($url_home);
     // $this->SetUrlLink($url_link);
      $this->setSsl($ssl);

      
      $array_url_home ['http'] = 'http';
      $array_url_home ['https'] = 'https';

      if(@$array_url_home[$this->getSsl()] && $this->getUrlHome() == "home"){
        return $array_url_home[$this->getSsl()]. '://' .$_SERVER['SERVER_NAME'];
      }elseif(@$array_url_home[$this->getSsl()] && $this->getUrlHome() != "home"){
        return $array_url_home[$this->getSsl()]. '://' .$_SERVER['SERVER_NAME'].'/'.$this->getUrlHome();
      }elseif(@is_null($array_url_home[$this->getSsl()])){
        $this->nt_RedirectLocation('not-found', array(404, false, true), false); exit;
      }
    }

    public function headerRedirect(){
     header('location:'.$this->getLocation(), true);
    }

    public function headerRedirectExternalUrl(){
      header('location:'.$this->getExternalUrl(), true);
    }

    public function headerRedirectUser(){
        foreach($this->getStatus() as $date){
          
          if($this->getStatus()['2'] == true && null == $this->nt_ConverterGet('not-found', true)){
            header('location: /?not-found='.$this->getStatus()['0'], true);
           }elseif($this->getStatus()['2'] == false && !empty($this->getStatus()['1'])){
            header('location: ' .$this->getLocation(). '/?' .$this->getStatus()['0'], true);
           }
        }
    }

    public function nt_Url_Style($name_files, $url_external){
      $this->setUrlStyle($name_files);
      if($url_external != false){
        return $url_external.$this->getUrlStyle().'.css';
      }else {
        return './css/'.$this->getUrlStyle().'.css';
      }
    }

    public function nt_Url_Script($name_files, $url_external){
      $this->setUrlScript($name_files);
      if($url_external != false){
        return $url_external.$this->getUrlScript().'.js';
      }else {
        return './js/'.$this->getUrlScript().'.js';
      }
    }

    public function nt_Url_Favicon($favicon){
      $this->setUrlFavicon($favicon);
      return 'content/src/'.$this->getUrlFavicon();
    }

    public function nt_Url_Logo($image, $width){
      $this->setImage($image);
      $this->setWidth($width);
      
      if($this->getWidth() != false){
        $width = 'width="'.$this->getWidth().'"';
      }

      return 'src="content/src/'.$this->getImage().'" '.$width;
    }

    public function nt_Url_User($image, $width){
      $this->setImage($image);
      $this->setWidth($width);
      
      if($this->getWidth() != false){
        $width = 'width="'.$this->getWidth().'"';
      }

      return 'src="content/src/'.$this->getImage().'" '.$width;
    }

    public function nt_Url_Image($image, $width){
      $this->setImage($image);
      $this->setWidth($width);
      
      if($this->getWidth() != false){
        $width = 'width="'.$this->getWidth().'"';
      }

      return 'src="content/src/'.$this->getImage().'" '.$width;
    }
}
?>