<?php
 function wrExtensions ($exten,$priority,$command,$cmdargs) {
    $cliname = "felipe";
    $cliextlocation = "/home/felipe/scripts/newvoiceproject/astdirs/etc/asterisk/$cliname/extensions.conf";
    $wrext = fopen($cliextlocation,"a+") or die ("Impossivel abrir arquivo");
    fwrite($wrext,"exten => ".$exten.",".$priority.",".$command."(".$cmdargs.")"."\n");
    fclose($wrext);
 }
?>
