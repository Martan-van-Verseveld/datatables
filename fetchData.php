<?php

include 'dbConn.php';

// Build query
$query = "SELECT * FROM myTable";

// Execute query
$stmt = $conn->prepare($query);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Format results for DataTables
$data = array();
foreach ($results as $row) {
    $data[] = array(
        "id" => $row["id"],
        "name" => $row["name"],
        "phone" => $row["phone"],
        "email" => $row["email"]
    );
}

$output = array(
    "draw" => 1,
    "recordsTotal" => count($data),
    "recordsFiltered" => count($data),
    "data" => $data
);

// Return results
echo json_encode($output, JSON_UNESCAPED_UNICODE);

