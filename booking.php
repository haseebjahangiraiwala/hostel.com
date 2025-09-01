<?php include("db.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Booking - Hostel.com</title>
  <style>
    body { font-family: Arial; background:#ecf0f1; }
    .form-box { width:50%; margin:50px auto; background:white; padding:30px; border-radius:10px; box-shadow:0 2px 5px gray; }
    input,button { width:100%; padding:10px; margin:10px 0; border:1px solid #ccc; border-radius:5px; }
    button { background:#27ae60; color:white; cursor:pointer; }
    button:hover { background:#219150; }
  </style>
</head>
<body>
<div class="form-box">
<h2>Complete Your Booking</h2>
<form method="post" action="confirm.php">
  <input type="hidden" name="hotel_id" value="<?php echo $_GET['hotel_id']; ?>">
  <input type="text" name="name" placeholder="Your Name" required>
  <input type="email" name="email" placeholder="Your Email" required>
  <input type="text" name="phone" placeholder="Phone Number" required>
  <input type="date" name="checkin" required>
  <input type="date" name="checkout" required>
  <input type="number" name="guests" placeholder="Guests" required>
  <button type="submit">Confirm Booking</button>
</form>
</div>
</body>
</html>
 
