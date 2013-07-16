<?php

//echo 5;

//test();

$to = "claude_siefers@hotmail.com";

if(mail($to, 'My Subject' , 'message'))
{
   echo 'OK';
}else{
   echo 'KO';
}
