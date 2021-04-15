<?php
$file = fopen("log.txt", "a+");

fwrite($file,  date("d/M/Y H:i:s"). "\r\n");

fclose($file);

echo "Arquivo criado com sucesso";