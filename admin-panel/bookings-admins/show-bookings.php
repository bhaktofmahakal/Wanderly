<?php require "../layouts/header.php"; ?>      
<?php require "../../config/config.php"; ?> 

<?php 

  if(!isset($_SESSION["adminname"])) {
    header("location: ".ADMINURL."");
  }

  
  $bookings = $conn->query("SELECT * FROM bookings");
  $bookings->execute();

  $allBookings = $bookings->fetchAll(PDO::FETCH_OBJ);


?> 

      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline ">Bookings</h5>
            
              <table class="table mt-4">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">phone_number</th>
                    <th scope="col">num_of_geusts</th>
                    <th scope="col">checkin_date</th>
                    <th scope="col">destination</th>
                    <th scope="col">payment</th>
                    <th scope="col">status</th>

                  </tr>
                </thead>
                <tbody>
                  <?php foreach($allBookings as $booking) : ?>
                    <tr>
                      <th scope="row"><?php echo $booking->id; ?></th>
                      <td><?php echo $booking->name; ?></td>
                      <td><?php echo $booking->phone_number; ?></td>
                      <td><?php echo $booking->num_of_geusts; ?></td>
                      <td><?php echo $booking->checkin_date; ?></td>
                      <td><?php echo $booking->destination; ?></td>
                      <td>$<?php echo $booking->payment; ?></td>
                      <?php if($booking->status == "Pending") : ?>
                       <td><a href="status.php?id=<?php echo $booking->id; ?>&status=<?php echo $booking->status; ?>" class="btn btn-danger  text-center ">Pending</a></td>
                      <?php else : ?>  
                        <td><a href="status.php?id=<?php echo $booking->id; ?>&status=<?php echo $booking->status; ?>" class="btn btn-success  text-center ">Booked Successfully</a></td>
                      <?php endif; ?>  
                    </tr>
                  <?php endforeach; ?>
                 
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>


<?php require "../layouts/footer.php"; ?>      
