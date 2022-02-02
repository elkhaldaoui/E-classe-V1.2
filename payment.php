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
                                        <a href="add.php?id='.$row['id'].'"><svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.3033 2.08777L16.9113 0.695801C16.4478 0.231934 15.8399 0 15.2321 0C14.6242 0 14.0164 0.231934 13.5525 0.69543L0.475916 13.772L0.00462689 18.0107C-0.0547481 18.5443 0.365701 19 0.88783 19C0.920858 19 0.953885 18.9981 0.987654 18.9944L5.22332 18.5265L18.3036 5.44617C19.231 4.51881 19.231 3.01514 18.3033 2.08777ZM4.67818 17.3924L1.2259 17.775L1.61035 14.3175L11.4031 4.52475L14.4747 7.59629L4.67818 17.3924ZM17.4639 4.60676L15.3141 6.7565L12.2426 3.68496L14.3923 1.53521C14.6164 1.31107 14.9148 1.1875 15.2321 1.1875C15.5494 1.1875 15.8474 1.31107 16.0719 1.53521L17.4639 2.92719C17.9266 3.39031 17.9266 4.14363 17.4639 4.60676Z" fill="#00C1FE"/></svg>
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