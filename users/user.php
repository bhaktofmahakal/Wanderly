<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../includes/header.php";
require_once "../config/config.php";

if(!isset($_SESSION["username"])) {
    header("location: ".APPURL."");
    exit();
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $user_bookings = $conn->query("SELECT * FROM bookings WHERE user_id='$id'");
    $user_bookings->execute();
    $AllUserBookings = $user_bookings->fetchAll(PDO::FETCH_OBJ);
} else {
    header("location: 404.php");
    exit();
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="modern-card" style="margin-top: 100px; margin-bottom: 50px;">
                <div class="card-body p-4">
                    <div class="modern-section-header text-center mb-4">
                        <h2>Your Bookings</h2>
                        <p>View and manage all your travel bookings</p>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="modern-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Guests</th>
                                    <th>Phone</th>
                                    <th>Check-in Date</th>
                                    <th>Destination</th>
                                    <th>Status</th>
                                    <th>Payment</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($AllUserBookings as $Booking) : ?>
                                    <tr class="fade-in">
                                        <td class="fw-medium"><?php echo htmlspecialchars($Booking->name); ?></td>
                                        <td>
                                            <span class="modern-badge">
                                                <?php echo htmlspecialchars($Booking->num_of_geusts); ?> Guests
                                            </span>
                                        </td>
                                        <td><?php echo htmlspecialchars($Booking->phone_number); ?></td>
                                        <td><?php echo date('d M Y', strtotime($Booking->checkin_date)); ?></td>
                                        <td class="fw-medium"><?php echo htmlspecialchars($Booking->destination); ?></td>
                                        <td>
                                            <span class="modern-badge <?php echo $Booking->status == 'Booked Successfully' ? 'success' : 'warning'; ?>">
                                                <?php echo htmlspecialchars($Booking->status); ?>
                                            </span>
                                        </td>
                                        <td class="fw-bold text-success">$<?php echo htmlspecialchars($Booking->payment); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "../includes/footer.php"; ?>
