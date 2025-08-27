<?php
header('Content-Type: application/json');
require_once 'database.php';
$conn = getDatabaseConnection();



// Fetch existing columns from hostel_providers
$sql = "SELECT id, full_name, address, experience_years, services, max_capacity, overnight_rate, id_document FROM hostel_providers ";
$result = $conn->query($sql);


$providers = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $providers[] = $row;
    }
}


echo json_encode([
    "success" => true,
    "providers" => $providers
]);


?>