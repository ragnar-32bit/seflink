<?php 

function seflink($str){
    // karakterleri kьзьlttьk
    $str = mb_strtolower($str,'UTF-8');
    // tьrkзe karakterleri dцnьюtьrdьk
    $str = str_replace(
        ['э','ю','ь','ц','р','з'],
        ['i','s','u','o','g','c'],
        $str
        );
    //boюluklara ve kelimelerin arasэna - koyacaрэm
    $str = preg_replace('/[^a-z0-9]/','-',$str);
    // bir kere yazmak iзin
    $str = preg_replace('/-+/','-',$str);
    return trim($str,'-');
}

$str = 'This is a seflink / Kirathebug';
echo seflink($str);

?>