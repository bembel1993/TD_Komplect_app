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
  <p class="nameOfArticle"><a href= "{{ route('form.perform') }}">Регистрация</a></p>
  

@foreach ($departments as $department)
  @foreach ($department->forms as $form)
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
          @endforeach
          <hr>
          
          <div class="form-group">
              <label for="myInput">Компания:</label>
              <p class="styletext2">{{ $department->company }}</p>
          </div>
          <div class="form-group">
              <label for="myInput">Отдел:</label>
              <p class="styletext2">{{ $department->department }}</p>
          </div>
        
      </div>
      
  </div>
@endforeach
  </body>
</html>