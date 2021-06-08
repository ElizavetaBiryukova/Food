<?php

$_POST = json_decode(file_get_contents("php://input"), true);
echo var_dump($_POST);
//команда берет данные с клиента, превращает их в строку и показывает обратно на клиенте
