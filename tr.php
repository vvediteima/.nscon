<?php
$txt=trim(fgets(STDIN));
$txt=rawurlencode($txt);
$arr=file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20191122T110351Z.a01d32f03dca7b6b.3c54fbbe7ad81cdc966e70ecf15b3c717cc3850f&text=$txt&lang=en-ru") ;
$arr=json_decode($arr, true) ;
print_r($arr["text"] [0]);
echo "\n";
?>
