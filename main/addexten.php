<?php
 require('../funcs/wrconfigfiles.php') ;
 require('../funcs/controldbcon.php');


 wrExtensions("200",1,"NoOp","Hello World");
 wrExtensions("200","n","Dial","SIP/200");

 $query = "Select nome from ramal";
 runquery("$query");
?>
