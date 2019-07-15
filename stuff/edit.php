<?php
$id=$_GET['id'];
 include'config/connect.php';
 $select= "SELECT * from reservation WHERE id = $id";
  $result = $conn->query($select);
      while($row = mysqli_fetch_assoc($result)){  echo "<br> email== " .$row["email"];

?>
<form action="editres.php"  method="POST">
	<div class="row">
		<label for="">id</label>
	 	<div>
	 		<input type="number" name="id" value="<?php echo$row['id']?>" disabled>
	 	</div>
                      <div class="col-sm-6 form-group">
                          
                          <label for="">Arrival Date</label>
                          <div style="position: relative;">
                            <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                            <input type='text' class="form-control" id='arrival_date' name="arrive" value="<?php echo$row['res_date']?>; " />
                          </div>
                      </div>

                      <div class="col-sm-6 form-group">
                          
                          <label for="">Departure Date</label>
                          <div style="position: relative;">
                            <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                            <input type='text' class="form-control" id='departure_date' name="leave" value="<?php echo$row['leave_date']?>; "/>
                          </div>
                      </div>
                      
                  </div>


                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="room">Room</label>
                      <select  id="room" class="form-control" name="room" >
                        <option value="1 rooms">1 Room</option>
                        <option value="2 rooms">2 Rooms</option>
                        <option value="3 rooms">3 Rooms</option>
                        <option value="4 rooms">4 Rooms</option>
                        <option value="5 rooms">5 Rooms</option>
                      </select>
                    </div>

                    <div class="col-md-6 form-group">
                      <label for="room">Guests</label>
                      <select  id="room" class="form-control" name="guest" >
                        <option value="1 guest">1 Guest</option>
                        <option value="2 guest">2 Guests</option>
                        <option value="3 guest">3 Guests</option>
                        <option value="4 guest">4 Guests</option>
                        <option value="5 guest">5+ Guests</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" name="submit" value="confirm edit" class="btn btn-primary">
                    </div>
                  </div>

</form>
<?php } ?>
