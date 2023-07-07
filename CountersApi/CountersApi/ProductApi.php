
<?php
include "../CountersApi/config.php";
// SQL query
$sql = "SELECT * FROM  `partners`";

// Execute the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    die("Query failed: " . $conn->error);
}

if ($result->num_rows > 0) {
    $emparray = array();
    while ($row = $result->fetch_assoc()) {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
} else {
    echo "No results found";
}
?>