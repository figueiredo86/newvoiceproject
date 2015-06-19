<?php
 function wrExtensions ($exten,$priority,$command,$cmdargs) {
    $cliname = "felipe";
    $cliextlocation = "/home/felipe/scripts/newvoiceprojetc/astdirs/etc/asterisk/$cliname/extensions.conf";
    $wrext = fopen($cliextlocation,"w") or die ("Impossivel abrir arquivo");
    fwrite($wrext,"exten => ".$exten.",".$priority.",".$command."(".$cmdrgs.")");
    fclose($wrext);
 }

 wrExtensions("200",1,"NoOp","Hello World");

?>
