<?php
  session_start();

$servername = "localhost";
$username = "sqluser";
$password = "password";
$dbname = "handmade";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <title>Reg Forms</title>
      <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
<body>
  <h6><a href= "{{ route('form.perform') }}">Регистрация</a></h6>
  
  <?php

                                        $sql = "SELECT lastname, 
                                                   firstname, 
                                                   patronymic, 
                                                   department.id,
                                                   departments.company,
                                                   departments.department
                                            FROM form Left Join departments 
                                            ON form.id_department = departments.id";

                                        $result = $conn->query($sql); ?>
                                        <?php if (!empty($result) && $result->num_rows > 0) {
                                          $count = 0;

                                          foreach ($result as $row) {
                                              $count++;

                                      ?>
<div class="block1">
  <div class="block5">
    <div class="form-group">
    <label for="myInput">Фамилия:</label>
    <p class="styletext2"><?php echo $row['lastname']; ?></p>
    </div>
    <div class="form-group">
    <label for="myInput">Имя:</label>
    <p class="styletext2"><?php echo $row['firstname']; ?></p>
    </div>
    <div class="form-group">
    <label for="myInput">Отчество:</label>
    <p class="styletext2"><?php echo $row['patronymic']; ?></p>
    </div>
    
    <hr>
    <div class="form-group">
        <label for="myInput">Компания:</label>
        <p class="styletext2"><?php echo $row['departments.company']; ?></p>
    </div>
    <div class="form-group">
        <label for="myInput">Отдел:</label>
        <p class="styletext2"><?php echo $row['departments.department']; ?></p>
    </div>
</div>

</div>
<?php
                                            }
                                        }
                                        ?>
  
<!--  @foreach ($forms as $form)
  <div class="block1">
        <div class="block5">
          <div class="form-group">
          <label for="myInput">Фамилия:</label>
          <p class="styletext2">{{ $form->lastname }}</p>
          </div>
          <div class="form-group">
          <label for="myInput">Имя:</label>
          <p class="styletext2">{{ $form->firstname }}</p>
          </div>
          <div class="form-group">
          <label for="myInput">Отчество:</label>
          <p class="styletext2">{{ $form->patronymic }}</p>
          </div>
          
          <hr>
          <div class="form-group">
              <label for="myInput">Компания:</label>
              <p class="styletext2">{{ $form->id_department }}</p>
          </div>
          <div class="form-group">
              <label for="myInput">Отдел:</label>
              <p class="styletext2"></p>
          </div>
      </div>
      
  </div>
-->
  @endforeach
  </body>
</html>