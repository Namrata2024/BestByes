<?php
include_once 'storeitems.php';
$sql = "DELETE FROM items WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<span>Record deleted successfully</span>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?> 