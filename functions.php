<?php

include 'dbConn.php';

function columnsDataTables() 
{
    global $conn;

    // Get all columns
    $stmt = $conn->prepare("SHOW COLUMNS FROM table_name");
    $stmt->execute();
    $columns = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Loop through columns and add to DataTables columns array
    foreach ($columns as $column) {
        echo "{ \"data\": \"" . $column['Field'] . "\" },";
    }
}

function thDataTables() 
{
    global $conn;

    // Get all columns
    $stmt = $conn->prepare("SHOW COLUMNS FROM table_name");
    $stmt->execute();
    $columns = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Loop through columns and add to DataTables columns array
    foreach ($columns as $column) {
        echo "<th>" . $column['Field'] . "</th>";
    }
}