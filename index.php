<?php

$servername = "185.224.137.5";
$username = "u219831890_ketobeheer";
$password = "Admin_admin1";
$databaseName = "u219831890_ketomed";

echo "Hello world";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $databaseName);
// Check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error(); 
}
//echo "Connected successfully";

$sql = "SELECT * FROM cbg_labeled_20221105
WHERE WERKZAMESTOFFEN LIKE '%midazol%'
";

// Make query & get results
$result = mysqli_query($conn, $sql);

//Fetch resulting rows as an array
$arrays = mysqli_fetch_all($result, MYSQLI_ASSOC);


//free result from memory
mysqli_free_result($result);

// close connection
mysqli_close($conn);
//print_r($arrays);

?>

<!DOCTYPE html>
<html>
    <h4>Resultaten:</h4>
    <div class="container">
        <?php foreach($arrays as $array){?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($array['PRODUCTNAAM']);?></h6>
                        <div> <?php echo htmlspecialchars($array['HULPSTOFFEN']);?> </div>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
</html>

