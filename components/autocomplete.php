<?php
    //database configuration
    require_once('components/dbconfig.php');
    
    //get search term
    $searchTerm = $_GET['cliente'];
    
    //get matched data from skills table
    $query = $con->query("SELECT * FROM clientes WHERE id LIKE '%".$searchTerm."%' ORDER BY skill ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['cliente'];
    }
    
    //return json data
    echo json_encode($data);
?>