<?php
include 'assets/navbar.php';

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
                                    <img class="" src="img/scroll.svg" alt="">
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
                                <?php 
                                    $payment_list = array (
                                        array("Name"=>"Karthi", "PaymentSchedule"=>"First", "BillNumber"=>"00012223", "AmountPaid"=>"100,000DH", "BalanceAmount"=>"500,000DH", "Date"=>"05-Jan-2022"),
                                        array("Name"=>"Karthi", "PaymentSchedule"=>"First", "BillNumber"=>"00012223", "AmountPaid"=>"100,000DH", "BalanceAmount"=>"500,000DH", "Date"=>"05-Jan-2022"),
                                        array("Name"=>"Karthi", "PaymentSchedule"=>"First", "BillNumber"=>"00012223", "AmountPaid"=>"100,000DH", "BalanceAmount"=>"500,000DH", "Date"=>"05-Jan-2022"),
                                        array("Name"=>"Karthi", "PaymentSchedule"=>"First", "BillNumber"=>"00012223", "AmountPaid"=>"100,000DH", "BalanceAmount"=>"500,000DH", "Date"=>"05-Jan-2022")
                                    );
                                    foreach ($payment_list as $user) {
                                        echo '<tr>';
                                        echo '<td>'.$user['Name'].'</td>';
                                        echo '<td>'.$user['PaymentSchedule'].'</td>';
                                        echo '<td>'.$user['BillNumber'].'</td>';
                                        echo '<td>'.$user['AmountPaid'].'</td>';
                                        echo '<td>'.$user['BalanceAmount'].'</td>';
                                        echo '<td>'.$user['Date'].'</td>';
                                        echo '<td><i class="bi bi-eye text-info"></i></td>';
                                        echo '</tr>';
                                        };
                                ?>
                            </table>
                        </div>
                    </div>
                    <!--end payment-->
                </div>
            </div>
        </div>
    </div>
    <?php
include 'assets/js.php';
?>