<?php
  $req = json_encode($_REQUEST)."\n";
  $myfile = fopen('webhook.txt', 'a+') or die('Unable to open file!');
  fwrite($myfile, $req);
  fclose($myfile);
  echo 'WEBHOOK';
