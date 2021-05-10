<?php

$pasta = "arqiovos";

$permission = "0775";

if (!is_dir($pasta)) mkdir($pasta, $permission);

echo "Pasta criada com sucesso!";
