<?php
//--Definições de diretórios
require_once './content/function.php';
require_once './footer/function.php';
require_once './header/function.php';
require_once './include/function.php';
require_once 'config.php';
require_once 'not-found.php';

$teste = new converterMethod;
//$teste->nt_RedirectLocation('not-found', array(404, false, true), false); exit;


//--Redirecionamentos especiais 
//--Exemplo: 404 pg não encontrada ou 401 pg autorizada somente pelo usuario
function pageNotFound(){
    $url_page_not_found = new converterMethod;
    if(null !== $url_page_not_found->nt_ConverterGet('not-found', true)){
        echo notFound();
        notfound404();
   }
}

return pageNotFound();


//-- Setando os componente de acordo com a sua categoria
function functionCategorias(){

    //-- Resgistros dos metodos $_nt_ e $_POST
    /*-- exemplo: nt_ConverterGet($_GET[key] registradas, | type:true => string ou false => int ) --*/
    $m_get = new converterMethod;
    if($m_get->nt_ConverterGet('key', false) == ORIG){
        apiHost(KEY_API, HOST_KEY, LANGUAGE, ORIG, urls('urlOrig'));
    }elseif($m_get->nt_ConverterGet('key', false) == ACTION){
        apiHost(KEY_API, HOST_KEY, LANGUAGE, ACTION, urls('urlGenero'));
    }elseif($m_get->nt_ConverterGet('key', false) == COMEDY){
        apiHost(KEY_API, HOST_KEY, LANGUAGE, COMEDY, urls('urlGenero'));
    }elseif($m_get->nt_ConverterGet('key', false) == HORROR){
        apiHost(KEY_API, HOST_KEY, LANGUAGE, HORROR, urls('urlGenero'));
    }elseif($m_get->nt_ConverterGet('key', false) == ROMANCE){
        apiHost(KEY_API, HOST_KEY, LANGUAGE, ROMANCE, urls('urlGenero'));
    }elseif($m_get->nt_ConverterGet('key', false) == DOCUMENTADY){
        apiHost(KEY_API, HOST_KEY, LANGUAGE, DOCUMENTADY, urls('urlGenero'));
    }elseif($m_get->nt_ConverterGet('key', false) == ORIGINAL_NETFLIX || $m_get->nt_ConverterGet('key', true) == 'all'){
        apiHost(KEY_API, HOST_KEY, LANGUAGE, ORIGINAL_NETFLIX, urls('urlOrigNetflix'));
    }
}

function functionIndex(){
    $m_get = new converterMethod;
    apiHost(KEY_API, HOST_KEY, LANGUAGE, ORIGINAL_NETFLIX, urls('urlOrigNetflix')); 
    apiHost(KEY_API, HOST_KEY, LANGUAGE, ACTION, urls('urlGenero'));
    apiHost(KEY_API, HOST_KEY, LANGUAGE, COMEDY, urls('urlGenero'));
    apiHost(KEY_API, HOST_KEY, LANGUAGE, HORROR, urls('urlGenero'));
    apiHost(KEY_API, HOST_KEY, LANGUAGE, ROMANCE, urls('urlGenero'));
    apiHost(KEY_API, HOST_KEY, LANGUAGE, DOCUMENTADY, urls('urlGenero'));
}

function functionFeaturedMovie(){
    featured(KEY_API, HOST_KEY, LANGUAGE, ORIGINAL_NETFLIX, urls('urlOrigNetflix'));
}

?>