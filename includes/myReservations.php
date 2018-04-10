<?php
      //My Reservation
      $thisUser = $_SESSION['uid'];

      if(!($queryResult = mysqli_query($connection, "SELECT room.room_no, room_type, room_charge, odate FROM room JOIN reservation on room.room_no = reservation.room_no WHERE reservation.user = '$thisUser'"))){
        echo "CALL failed: " .  mysqli_error($connection);
      }
      else{
        echo "<table id='keywords' cellspacing='0' cellpadding='0' style='font-size: 14pt;'>
        <thead>
          <tr>
            <th><span>Room No.</span></th>
            <th><span>Room Type</span></th>
            <th><span>Room Charge</span></th>
            <th><span>Date</span></th>
            <th><span></span></th>
          </tr>";

        $num=mysqli_num_rows($queryResult);
        if(0==$num){
          echo "No record";
          exit;
        }
        else{
          while($row = mysqli_fetch_assoc($queryResult)) {
            echo "<tbody>
                  <tr>";
            echo "<td>".$row['room_no']."</td>";
            echo "<td>".$row['room_type']."</td>";
            echo "<td>".$row['room_charge']."</td>";
            echo "<td>".$row['odate']."</td>";
			$room_no = $row['room_no'];
			$odate = $row['odate'];
			echo "<td>
          <form>
            <input id='editButton' type='button' value='Cancel' onclick='".'cancel('.$room_no.',"'.$odate.'")'."'/>
          </form>";
            "</td>";
            echo "</tr>";
          }
        }
      }
      echo "</table>";
  ?>