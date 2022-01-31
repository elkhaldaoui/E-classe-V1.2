<?php
include 'assets/navbar.php';
if(isset($_GET['id'])){

  $user_id=$_GET['id'];
}

//lt's search for the user with id 
$students = file_get_contents('students.json');
$students = json_decode($students, true);

$found_student=-1;
foreach($students as$key => $student){
    if($key==$user_id)
    $found_student=$student;
}
if($found_student==-1)
  die("could not find the student");

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
      <label for="Name">Name:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Name" name="email" value="<?= $found_student['Name']?>">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?= $found_student['Email']?>">
    </div>
    <div class="form-group">
      <label for="Phone">Phone</label>
      <input type="text" class="form-control" id="Phone" placeholder="Enter Phone number" name="Phone" value="<?= $found_student['Phone']?>">
    </div>
    <div class="form-group">
      <label for="pwd">Date of admission:</label>
      <input type="date" class="form-control" id="Dateofadmission" placeholder="Enter Date" name="Dateofadmission" value="<?= $found_student['Dateofadmission']?>">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Are you sure</label>
    </div>
    <a class="btn btn-primary" href="Students.php" role="button">Submit</a>
  </form>
</div>

<?php
    include './js.php';
    ?>