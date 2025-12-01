<?php

function language_list(...$items)
{
    // implement the language list function
    return $items  ;
    
}


 function add_to_language_list( $languages, $new_language)
{
    // implement the add_to_language_list function
    $languages[] = $new_language;
    return $languages;
}
$language_list = language_list();
// => []
$language_list = add_to_language_list($language_list, "Clojure");
// => ["Clojure"]
