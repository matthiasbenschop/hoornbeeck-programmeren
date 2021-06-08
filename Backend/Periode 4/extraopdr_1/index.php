<?php include 'header.inc.php'; ?>



<?php

if (isset($_POST['extra_opdrachten'])) {
    $sql = "INSERT INTO students (student_id, firstname, lastname, created_at, updated_at) VALUES ('$_POST[student_id]', '$_POST[firstname]', '$_POST[lastname]', '$_POST[created_at], 'updated_at']')";
    mysqli_query($conn, $sql);
}
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "<table> 
    <tr>
    <td> " . $row['firstname'] . "</td>
    <td> " . $row['lastname'] . "</td>
    <td> " . $row['created_at'] . "</td>
    <td> " . $row['updated_at'] . "</td>";
    echo "</tr></table>";
}


?>