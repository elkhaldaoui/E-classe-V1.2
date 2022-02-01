<?php
include 'assets/navbar.php';
?>
                    <!--start student-->
                    <div style=" width: 99%; margin: auto;" class="container-fluid bg-light">
                        <div class="row mt-4">
                            <div class="col-md d-flex justify-content-between">
                                <div class="">
                                    <h3>Students List</h3>
                                </div>
                                <div class="">
                                    <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD NEW STUDENT</button>
                                </div>
                            </div>
                        </div>
                        <hr id="hr">
                        <div style="overflow-x: auto;" class="row">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col" style="color: #acacac;">Name</th>
                                        <th scope="col" style="color: #acacac;">Email</th>
                                        <th scope="col" style="color: #acacac;">Phone</th>
                                        <th scope="col" style="color: #acacac;">Enroll Number</th>
                                        <th scope="col" style="color: #acacac;">Date of admission</th>
                                        <th scope="col" style="color: #acacac;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      $connection = mysqli_connect ("localhost","root","","e_classe_db");
                                      $queery = 'SELECT * FROM students' ;
                                      $results = mysqli_query($connection,$queery);
                                      if (!$results){
                                          die ('FAILED');
                                      }
                                      while ($row = mysqli_fetch_assoc($results)){    
                                     echo 
                                     '<tr> 
                                        <td scope="row"><img src="img/table.svg" alt=""></td>
                                        <td class="align-middle">'.$row['name'].'</td>
                                        <td class="align-middle">'. $row['email'].'</td>
                                        <td class="align-middle">'. $row['phone'].'</td>
                                        <td class="align-middle">'. $row['enroll_Number'].'</td>
                                        <td class="align-middle">'. $row['date_of_admission'].'</td>
                                        <td>
                                        <a href="edite.php"><svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.3033 2.08777L16.9113 0.695801C16.4478 0.231934 15.8399 0 15.2321 0C14.6242 0 14.0164 0.231934 13.5525 0.69543L0.475916 13.772L0.00462689 18.0107C-0.0547481 18.5443 0.365701 19 0.88783 19C0.920858 19 0.953885 18.9981 0.987654 18.9944L5.22332 18.5265L18.3036 5.44617C19.231 4.51881 19.231 3.01514 18.3033 2.08777ZM4.67818 17.3924L1.2259 17.775L1.61035 14.3175L11.4031 4.52475L14.4747 7.59629L4.67818 17.3924ZM17.4639 4.60676L15.3141 6.7565L12.2426 3.68496L14.3923 1.53521C14.6164 1.31107 14.9148 1.1875 15.2321 1.1875C15.5494 1.1875 15.8474 1.31107 16.0719 1.53521L17.4639 2.92719C17.9266 3.39031 17.9266 4.14363 17.4639 4.60676Z" fill="#00C1FE"/></svg>
                                            </a>
                                            <a href="#">
                                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.285713 2.25H4L5.2 0.675C5.35968 0.465419 5.56674 0.295313 5.80478 0.178154C6.04281 0.0609948 6.30529 0 6.57143 0L9.42857 0C9.69471 0 9.95718 0.0609948 10.1952 0.178154C10.4333 0.295313 10.6403 0.465419 10.8 0.675L12 2.25H15.7143C15.7901 2.25 15.8627 2.27963 15.9163 2.33238C15.9699 2.38512 16 2.45666 16 2.53125V3.09375C16 3.16834 15.9699 3.23988 15.9163 3.29262C15.8627 3.34537 15.7901 3.375 15.7143 3.375H15.0393L13.8536 16.4637C13.8152 16.8833 13.6188 17.2737 13.3029 17.558C12.987 17.8423 12.5745 17.9999 12.1464 18H3.85357C3.42554 17.9999 3.01302 17.8423 2.69711 17.558C2.38121 17.2737 2.18477 16.8833 2.14643 16.4637L0.960713 3.375H0.285713C0.209937 3.375 0.137264 3.34537 0.083683 3.29262C0.0301008 3.23988 0 3.16834 0 3.09375V2.53125C0 2.45666 0.0301008 2.38512 0.083683 2.33238C0.137264 2.27963 0.209937 2.25 0.285713 2.25ZM9.88571 1.35C9.8323 1.28034 9.76324 1.22379 9.68393 1.18475C9.60463 1.14572 9.51723 1.12527 9.42857 1.125H6.57143C6.48277 1.12527 6.39537 1.14572 6.31606 1.18475C6.23676 1.22379 6.1677 1.28034 6.11429 1.35L5.42857 2.25H10.5714L9.88571 1.35ZM3.28571 16.3617C3.29748 16.5019 3.36245 16.6325 3.46768 16.7277C3.57292 16.8228 3.7107 16.8754 3.85357 16.875H12.1464C12.2893 16.8754 12.4271 16.8228 12.5323 16.7277C12.6376 16.6325 12.7025 16.5019 12.7143 16.3617L13.8929 3.375H2.10714L3.28571 16.3617Z" fill="#00C1FE"/></svg>
                                        </a>
                                        </td>
                                      </tr> ';
                                      }
                                     ?>    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end student-->
                </div>
            </div>
        </div>
    </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD STUDENT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="mb-3">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" name="Name" class="form-control" id="InputName" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email Address</label>
                        <input type="email" name="Email"  class="form-control" id="InputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="Phone" class="form-label">Phone</label>
                        <input type="text" name="Phone"  class="form-control" id="InputPhone" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="EnrollNumber" class="form-label">Enroll Number</label>
                        <input type="number"  name="EnrollNumber"  class="form-control" id="InputEnrollNumber" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="Dateofadmission" class="form-label">Date of admission</label>
                        <input type="date" name="Dateofadmission"  class="form-control" id="InputDateofadmission" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <button id="btnadd" class="btn btn-primary">ADD</button>
                    </div>
                    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
        <?php

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $students = fopen("students.json", "r");

            $data = json_decode(fread($students,filesize("students.json")),true);

            fclose($students);

            $add = [
                    'img' =>'img\/table.svg',
                    'Name' => $_POST['Name'],
                    'Email' => $_POST['Email'],
                    'Phone' => $_POST['Phone'],
                    'EnrollNumber' => uniqid(),
                    'Dateofadmission' => $_POST['Dateofadmission']
            ];

            array_push($data, $add);

            file_put_contents("students.json", json_encode($data, JSON_PRETTY_PRINT));

            echo '<script>location.replace("Students.php")</script>';

        }

        ?>
       
    <?php
    include './js.php';
    ?>