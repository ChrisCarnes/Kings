<?php
/**
 * Similar to include, but cooler.
 */
function partial ($filename = "", $variables = array()) {
    $filename = preg_replace("/^\/+|\/+$/", "", $filename);
    if (!preg_match("/\.php$/", $filename)) {
        $filename .= ".php";
    }
    
    $filepath = __DIR__ . "/_partials/$filename";

    if (file_exists($filepath)) {
        ob_start();
        foreach ($variables as $key => $value) {
            $$key = $value;
        }
        include $filepath;
        echo ob_get_clean();
    }
}

function partial ($filename = "") {
    $filepath = __DIR__ . "/_partials/$filename.php";

    if (file_exists($filepath)) {
        include "$filepath";
    }
}