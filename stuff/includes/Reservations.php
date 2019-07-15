    
      <?php
      include 'connect.php';
      ?>
      <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>reservation date</th>
                                                <th>leave date</th>
                                                <th>number of rooms</th>
                                                <th>number of guests</th>
                                                <th>email</th>
                                                <th>notes</th>
                                                <th>option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $select= "SELECT * from reservation";
      $result = $conn->query($select);
      while($row = mysqli_fetch_assoc($result)){
      ?>
                                            <tr>
                                                <td><?php echo $row["res_date"]; ?></td>
                                                <td><?php echo $row["leave_date"]; ?></td>
                                                <td><?php echo $row["room"]; ?></td>
                                                <td><?php echo $row["guest"]; ?></td>
                                                <td><?php echo $row["email"]; ?></td>
                                                <td><?php echo $row["note"]; ?></td>
                                                <td> <a class="btn btn-rounded btn-danger"
                                                 href="delete.php?id=<?php echo $row["id"]; ?> ">delete</a></td>
                                                 <td> <a class="btn btn-rounded btn-warning"
                                                 href="edit.php?id=<?php echo $row["id"]; ?> ">edit</a></td>
                                            <?php } ?>
                                            </tr> 
                                        </tbody>
                                        </table>
                                    </div>
                   
                </div>