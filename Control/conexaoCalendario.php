<?php
    $pdo = new PDO('mysql:host=localhost; dbname=sgs_centro_simulacao','root', '');
    $pdo->exec("set names utf8");