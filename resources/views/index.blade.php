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

  <table>
    <thead>
        <tr>
            <th>Company</th>
            <th>Department</th>
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Patronymic</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($departments as $department)
            <tr>
                <td rowspan="{{ count($department->forms) }}">{{ $department->company }}</td>
                <td rowspan="{{ count($department->forms) }}">{{ $department->department }}</td>
                @foreach ($department->forms as $form)
                    <td>{{ $form->lastname }}</td>
                    <td>{{ $form->firstname }}</td>
                    <td>{{ $form->patronymic }}</td>
                    </tr><tr>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>

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
            
            
          
            <div class="form-group">
              <label for="myInput">Компания:</label>
              <p class="styletext2" >{{ $department->company }}</p>
            </div>
            <div class="form-group">
              <label for="myInput">Отдел:</label>
              <p class="styletext2" >{{ $department->department }}</p>
            </div>
            <hr>
            
          </div>
      
        </div>
        <br>
          @endforeach
          @endforeach
</body>
</html>