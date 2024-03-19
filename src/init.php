<?php

function classLoarder($className)
{

    $filePathClass = $className . '.php';

    $folderPathClasses = __DIR__ . '/Classes/';
    $folderPathModels = __DIR__ . '/Models/';
    $folderPathRepositories = __DIR__ . '/Repositories/';


    if (file_exists($folderPathClasses . $filePathClass)) {
        require $folderPathClasses . $filePathClass;
    }

    if (file_exists($folderPathModels . $filePathClass)) {
        require $folderPathModels . $filePathClass;
    }

    if (file_exists($folderPathRepositories . $filePathClass)) {
        require $folderPathRepositories . $filePathClass;
    }
}

spl_autoload_register("classLoarder");

session_start();

$database = new Db();
$database->getDb();
