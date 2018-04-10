 <?php
  $sql = "SELECT * FROM `room`";
  $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

  echo "<table id='keywords' cellspacing='0' cellpadding='0'>
        <thead>
          <tr>
            <th><span>Room No.</span></th>
            <th><span>Room Type</span></th>
            <th><span>Room Charge</span></th>
          </tr><tbody>";

  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td class='lalign' style='text-align: center;'>".$row['room_no']."</td>";
        echo "<td>".$row['room_type']."</td>";
    	echo "<td>".$row['room_charge']."</td></tr>";
    }
  echo "</tbody></table>";
?>

