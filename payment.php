<?php
include 'assets/navbar.php';
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $payment_schedule = $_POST['payment_schedule'];
    $bill_number = $_POST['bill_number'];
    $amount_paid = $_POST['amount_paid'];
    $balance_amount = $_POST['balance_amount'];
    $date = $_POST['date'];
    $connection = mysqli_connect('localhost', 'root', '','e_classe_db');
    
    $query = "INSERT INTO payment_details(name, payment_schedule, bill_number, amount_paid, balance_amount, date) VALUES ('$name','$payment_schedule', '$bill_number', ' $amount_paid', '$balance_amount','$date')";
    $results = mysqli_query($connection, $query);
    echo"
    <script>
    window.location.href = 'payment.php';
    </script>";
    }
    $connection = mysqli_connect('localhost', 'root', '','e_classe_db');
    $query = "SELECT * FROM students";
    $results = mysqli_query($connection, $query);
?>
<!--end navbar-->
                <!--start payment-->
                    <div style=" width: 99%; margin: auto;" class="container-fluid bg-light">
                        <div class="row mt-4">
                            <div class="col-md d-flex justify-content-between">
                                <div class="">
                                <h3>Payment Details</h3>
                                </div>
                                <div class="">
                                <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD PAYMENT</button>
                                </div>
                            </div>
                        </div>
                        <hr id="hr">
                        <div style="overflow-x: auto;" class="row">
                            <table class="table table-hover table-striped">
                                <tr style="color: #ACACAC;">
                                    <th scope="col" style="color: #acacac;">Name</th>
                                    <th scope="col" style="color: #acacac;">Payment Schedule</th>
                                    <th scope="col" style="color: #acacac;">Bill Number</th>
                                    <th scope="col" style="color: #acacac;">Amount Paid</th>
                                    <th scope="col" style="color: #acacac;">Balance amount</th>
                                    <th scope="col" style="color: #acacac;">Date </th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      $connection = mysqli_connect ("localhost","root","","e_classe_db");
                                      $queery = 'SELECT * FROM payment_details' ;
                                      $results = mysqli_query($connection,$queery);
                                      if (!$results){
                                          die ('FAILED');
                                      }
                                      while ($row = mysqli_fetch_assoc($results)){    
                                     echo 
                                     '<tr> 
                                        <td class="align-middle">'.$row['name'].'</td>
                                        <td class="align-middle">'. $row['payment_schedule'].'</td>
                                        <td class="align-middle">'. $row['bill_number'].'</td>
                                        <td class="align-middle">'. $row['amount_paid'].'</td>
                                        <td class="align-middle">'. $row['balance_amount'].'</td>
                                        <td class="align-middle">'. $row['date'].'</td>
                                        <td>
                                        <a href="add.php?id='.$row['id'].'"><svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.49999 6.875C7.94201 6.875 8.36594 6.69063 8.6785 6.36244C8.99106 6.03425 9.16665 5.58913 9.16665 5.125C9.16665 4.66087 8.99106 4.21575 8.6785 3.88756C8.36594 3.55937 7.94201 3.375 7.49999 3.375C7.47394 3.375 7.45103 3.38156 7.42577 3.38293C7.50608 3.61516 7.52164 3.86664 7.47063 4.10783C7.41961 4.34903 7.30413 4.56994 7.13774 4.74465C6.97136 4.91935 6.76096 5.04061 6.53125 5.09417C6.30154 5.14774 6.06205 5.1314 5.84087 5.04707C5.84087 5.07441 5.83332 5.09848 5.83332 5.125C5.83332 5.35481 5.87643 5.58238 5.96019 5.7947C6.04394 6.00702 6.16671 6.19993 6.32147 6.36244C6.63403 6.69063 7.05796 6.875 7.49999 6.875ZM14.9094 5.60078C13.4971 2.70754 10.7013 0.75 7.49999 0.75C4.29868 0.75 1.50207 2.70891 0.0906108 5.60105C0.0310383 5.72479 0 5.86149 0 6.00014C0 6.13878 0.0310383 6.27549 0.0906108 6.39922C1.50285 9.29246 4.29868 11.25 7.49999 11.25C10.7013 11.25 13.4979 9.29109 14.9094 6.39895C14.9689 6.27521 15 6.13851 15 5.99986C15 5.86122 14.9689 5.72451 14.9094 5.60078ZM7.49999 1.625C8.15926 1.625 8.80372 1.83027 9.35188 2.21486C9.90005 2.59944 10.3273 3.14607 10.5796 3.78561C10.8319 4.42515 10.8979 5.12888 10.7693 5.80782C10.6407 6.48675 10.3232 7.11039 9.85701 7.59987C9.39083 8.08936 8.79689 8.4227 8.15029 8.55775C7.50368 8.6928 6.83346 8.62349 6.22437 8.35858C5.61529 8.09367 5.09469 7.64507 4.72842 7.0695C4.36215 6.49392 4.16665 5.81723 4.16665 5.125C4.16762 4.19705 4.51912 3.3074 5.14403 2.65125C5.76894 1.99509 6.61623 1.62601 7.49999 1.625ZM7.49999 10.375C4.70415 10.375 2.14946 8.69855 0.833319 6C1.57354 4.47419 2.7573 3.23556 4.21301 2.46363C3.66952 3.20246 3.33332 4.11793 3.33332 5.125C3.33332 6.28532 3.77231 7.39812 4.55371 8.21859C5.33511 9.03906 6.39492 9.5 7.49999 9.5C8.60505 9.5 9.66486 9.03906 10.4463 8.21859C11.2277 7.39812 11.6667 6.28532 11.6667 5.125C11.6667 4.11793 11.3305 3.20246 10.787 2.46363C12.2427 3.23556 13.4264 4.47419 14.1667 6C12.8508 8.69855 10.2958 10.375 7.49999 10.375Z" fill="#00C1FE"/>
                                        </svg>
                                        </a>
                                        </td>
                                      </tr> ';
                                      }
                                     ?>    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end payment-->
                </div>
            </div>
        </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD PAYMENT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <form method="post" action="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="InputName" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="payment_schedule" class="form-label">Payment Schedule</label>
                        <input type="text" name="payment_schedule"  class="form-control" id="InputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="bill_number" class="form-label">Bill Number</label>
                        <input type="text" name="bill_number"  class="form-control" id="InputPhone" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="amount_paid" class="form-label">Amount Paidr</label>
                        <input type="number"  name="amount_paid"  class="form-control" id="InputEnrollNumber" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="balance_amount" class="form-label">Balance Amount</label>
                        <input type="text" name="balance_amount"  class="form-control" id="InputDateofadmission" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" name="date"  class="form-control" id="InputDateofadmission" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <button id="btnadd" type="submit" name="submit"  class="btn btn-primary">ADD</button>
                    </div>
                    </form>
            </div>
            <div class="modal-footer">
                <button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

<?php
include 'assets/js.php';
?>