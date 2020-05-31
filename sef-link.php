<?php 

function seflink($str){
    // karakterleri k���ltt�k
    $str = mb_strtolower($str,'UTF-8');
    // t�rk�e karakterleri d�n��t�rd�k
    $str = str_replace(
        ['�','�','�','�','�','�'],
        ['i','s','u','o','g','c'],
        $str
        );
    //bo�luklara ve kelimelerin aras�na - koyaca��m
    $str = preg_replace('/[^a-z0-9]/','-',$str);
    // bir kere yazmak i�in
    $str = preg_replace('/-+/','-',$str);
    return trim($str,'-');
}

$str = 'This is a seflink / Kirathebug';
echo seflink($str);

?>