<?php
include_once 'dbconfig2.php';

$stmt = $DB_con->prepare('SELECT * FROM tbl_client, tbl_event,tbl_ticket ');
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    ?>
                    <tr>

                     <td>
                        <?php echo $row['firstName']; ?>
                      </td>
                      <td>
                        <?php echo $row['lastName']; ?>
                      </td>
                      <td>
                        <?php echo $row['date_logged']; ?>
                      </td>
                    


                      <!-- allocation is here  -->
                      <td>
                        <?php echo $row['starting_date']; ?>
                      </td>
                      <td>
                        <?php echo $row['status']; ?>
                      </td>
                      <td>
                        <?php echo $row['description']; ?>
                      </td>
                      
                   
                    </tr>
                    <?php
}