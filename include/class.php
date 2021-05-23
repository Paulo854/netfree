<?php
abstract class methodGet {
    private $methodKey;
    private $location;
    private $status;
    private $external_url;
    private $user_direct;
    private $url_home;
    private $ssl;
    private $url_style;
    private $url_script;
    private $url_favicon;
    private $image;
    private $width;
        
    
    //-- set functions
    protected function setMethodKey($methodKey){
        $this->methodKey = $methodKey;
    }
    protected function setLocation($location){
        $this->location = $location;
    }
    protected function setStatus($status){
        $this->status = $status;
    }
    protected function setExternalUrl($external_url){
        $this->external_url = $external_url;
    }
    protected function setUserDirect($user_direct){
        $this->user = $user_direct;
    }
    protected function setUrlHome($url_home){
        $this->url_home = $url_home;
    }
    protected function setSsl($ssl){
        $this->ssl = $ssl;
    }
    protected function setUrlStyle($url_style){
        $this->url_style = $url_style;
    }
    protected function setUrlScript($url_script){
        $this->url_script = $url_script;
    }
    protected function setUrlFavicon($url_favicon){
        $this->url_favicon = $url_favicon;
    }
    protected function setImage($image){
        $this->image = $image;
    }
    protected function setWidth($width){
        $this->width = $width;
    }
       

    //== get functions
    public function getMethodKey(){
        return $this->methodKey;
    }
    public function getLocation(){
        return $this->location;
    }
    public function getStatus(){
        return $this->status;
    }
    public function getExternalUrl(){
        return $this->external_url;
    }
    public function getUserDirect(){
        return $this->user;
    }
    public function getUrlHome(){
        return $this->url_home;
    }
    public function getSsl(){
        return $this->ssl;
    }
    public function getUrlStyle(){
        return $this->url_style;
    }
    public function getUrlScript(){
        return $this->url_script;
    }
    public function getUrlFavicon(){
        return $this->url_favicon;
    }
    public function getImage(){
        return $this->image;
    }
    public function getWidth(){
        return $this->width;
    }
}
?>