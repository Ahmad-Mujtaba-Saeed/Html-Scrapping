<?php
include 'simple_html_dom.php';

$html = file_get_html('https://thetopbloggers.com/');

// echo $html->find('title', 0)->plaintext;

foreach ($html->find('a') as $e) {
    echo $e->href . '<br>';
}
?>