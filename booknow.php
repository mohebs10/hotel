<!doctype html>
<html lang="en">
   <?php  include 'includes/header.php' ?>
  <body>
    
    

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
              <h1>Reservation</h1>
              <p>Discover our world's #1 Luxury Room For VIP.</p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-5">Reservation Form</h2>
                <form action="config/book.php" method="post">
                  <div class="row">
                      <div class="col-sm-6 form-group">
                          
                          <label for="">Arrival Date</label>
                          <div style="position: relative;">
                            <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                            <input type='text' class="form-control" id='arrival_date' name="arrive" />
                          </div>
                      </div>

                      <div class="col-sm-6 form-group">
                          
                          <label for="">Departure Date</label>
                          <div style="position: relative;">
                            <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                            <input type='text' class="form-control" id='departure_date' name="leave" />
                          </div>
                      </div>
                      
                  </div>


                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="room">Room</label>
                      <select  id="room" class="form-control" name="room">
                        <option value="1 rooms">1 Room</option>
                        <option value="2 rooms">2 Rooms</option>
                        <option value="3 rooms">3 Rooms</option>
                        <option value="4 rooms">4 Rooms</option>
                        <option value="5 rooms">5 Rooms</option>
                      </select>
                    </div>

                    <div class="col-md-6 form-group">
                      <label for="room">Guests</label>
                      <select  id="room" class="form-control" name="guest">
                        <option value="1 guest">1 Guest</option>
                        <option value="2 guest">2 Guests</option>
                        <option value="3 guest">3 Guests</option>
                        <option value="4 guest">4 Guests</option>
                        <option value="5 guest">5+ Guests</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email" class="form-control " name="email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Write a Note</label>
                      <textarea  id="message" class="form-control " cols="30" rows="8" name="note"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" name="submit" value="Reserve Now" class="btn btn-primary">
                    </div>
                  </div>
                </form>
              </div>
             
              
            
              
        </div>
      </div>
    </section>
    <!-- END section -->


   
   

    >
   
    <<?php include 'includes/footer.php' ?>
    <!-- END footer -->
    
    <!-- loader -->
    
  </body>
</html>