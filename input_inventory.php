<?php
	require_once 'login.php';
    
    try
        {
            $db = new PDO("pgsql:host=$hn port=5432 dbname=$db user=$un password=$pw");
        }
    catch(PDOException $e)
        {die($e->getMessage());}

    $item=$_POST['item'];
    $description=$_POST['description'];
    $price=$_POST['price'];

    $sql = "INSERT INTO inventory (id, item, description, price) VALUES(DEFAULT,'$item', '$description', $price)";
    $result = $db->query($sql);
    if (!$result) die ("Database access failed: " . $conn->error);

    else {
    	// echo "Successful";
    	// echo "<br>";
    	// echo "<a href='inventory.php'>Back to Inventory</a>";
    	header("location:inventory.php");
    } 
?>