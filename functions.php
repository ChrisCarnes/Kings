<?php
/**
 * Similar to include, but much, much cooler.
 */
function partial ($filename = "", $variables = array()) {
    $filename = preg_replace("/^\/+|\/+$/", "", $filename);
    if (!preg_match("/\.php$/", $filename)) {
        $filename .= ".php";
    }
    
    $filepath = __DIR__ . "/_includes/$filename";

    if (file_exists($filepath)) {
        ob_start();
        foreach ($variables as $key => $value) {
            $$key = $value;
        }
        include $filepath;
        echo ob_get_clean();
    }
}