<?php
function nt_script($src_script, $ver_script){
   
    if(empty($src_script)){
        $direct = new converterMethod;
        $direct->nt_RedirectLocation('not-found', array(503, false, true), false); exit;
    }elseif($ver_script == false){
        $version = NETFREE_VERSION;
    }else {
        $version = $ver_script;
    }

    $script_array = array(
        "script" => 'script src=',
        "close_script" => 'script',
        "js" => '.js',
        "ver" => 'ver='       
    );
     return "<".$script_array['script'].$src_script."?".$script_array['ver'].$version."></".$script_array['close_script'].">\n";     
}
?>