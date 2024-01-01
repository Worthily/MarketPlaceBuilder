<?php

function init($path) {
    $dir = DOC_ROOT.'/'.$path;

    $req_files = ['','/index.php', '/req.php', '/init.php', '/require.php'];

    foreach ($req_files as $file) {
        if (is_file($dir.$file)) {
            require_once($dir.$file);
            return true;
        }
    }

    if(DEBUG) {
        echo '<span style="color: red">ERROR</span>  dir:<span style="color: lime">"'.$dir.'"</span> the file does not exist or the init file is not found';
    } else {
        return 0;
    }

}