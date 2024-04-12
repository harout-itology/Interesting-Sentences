<?php

    // Load environment variables from .env file
    $env_file = __DIR__ . '/../.env';
    if (!file_exists($env_file)) {
        die('.env file not found.');
    }

    // check the environments data parsing
    $env_vars = parse_ini_file($env_file);
    if (!$env_vars) {
        die('Error parsing .env file.');
    }

    // get the credentials
    $host = $env_vars['DB_HOST'] ?? '';
    $user = $env_vars['DB_USERNAME'] ?? '';
    $password = $env_vars['DB_PASSWORD'] ?? '';
    $database = $env_vars['DB_DATABASE'] ?? '';

    try {
        // create the connection
        $conn = new mysqli($host, $user, $password, $database);
    } catch (mysqli_sql_exception $e) {
        // catch the errors
        die('Connection failed: ' . $e->getMessage());
    }