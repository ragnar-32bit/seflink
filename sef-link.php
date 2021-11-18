<?php 

function seflink($str){
    // karakterleri küçülttük
    $str = mb_strtolower($str,'UTF-8');
    // türkçe karakterleri dönüþtürdük
    $str = str_replace(
        ['ý','þ','ü','ö','ð','ç'],
        ['i','s','u','o','g','c'],
        $str
        );
    //boþluklara ve kelimelerin arasýna - koyacaðým
    $str = preg_replace('/[^a-z0-9]/','-',$str);
    // bir kere yazmak için
    $str = preg_replace('/-+/','-',$str);
    return trim($str,'-');
}

$str = 'This is a seflink';
echo seflink($str);

?>
