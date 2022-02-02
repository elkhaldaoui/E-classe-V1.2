<?php
$id = $_GET['id'];
include 'assets/navbar.php';
$connection = mysqli_connect ("localhost","root","","e_classe_db");
$queery = "SELECT * FROM payment_details WHERE id=$id ";
$results = mysqli_query($connection,$queery);
$row = mysqli_fetch_assoc($results);

?>
<style>
#form{
  margin: 10%;
}
</style>

<div class="container">
    <br><br>
  <form action="/action_page.php" id="form" >
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="" name="name" value="<?php echo $row['name']?>">
      </div>
      <div class="form-group">
        <label for="payment_schedule">Payment schedule:</label>
        <input type="payment_schedule" class="form-control" id="payment_schedule" placeholder="" name="payment_schedule" value="<?php echo $row['payment_schedule']?>">
      </div>
      <div class="form-group">
        <label for="bill_number">Bill Number</label>
        <input type="text" class="form-control" id="bill_number" placeholder="" name="bill_number" value="<?php echo $row['bill_number']?>">
      </div>
      <div class="form-group">
        <label for="amount_paid">Amount Paid</label>
        <input type="text" class="form-control" id="amount_paid" placeholder="" name="amount_paid" value="<?php echo $row['amount_paid']?>">
      </div>
      <div class="form-group">
        <label for="balance_amount">Balance Amount</label>
        <input type="text" class="form-control" id="balance_amount" placeholder="" name="balance_amount" value="<?php echo $row['balance_amount']?>">
      </div>
      <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" class="form-control" id="date" placeholder="" name="date" value="<?php echo $row['date']?>">
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="remember"> Are you sure</label>
      </div>
    <a class="btn btn-primary" href="payment.php" role="button">Submit</a>
  </form>
</div>

<?php
include './js.php';
?>