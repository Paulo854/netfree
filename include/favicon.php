<?php
function nt_favicon($src_favicon) {
    $array_favicon = array(
        "rel" => "link rel='shortcut icon'",
        "src" => 'href=',
        "type" => "type='image/x-icon'"
    );

    return "<".$array_favicon['rel']." "
    .$array_favicon['src'].$src_favicon." "
    .$array_favicon['type']."> \n";
}
?>