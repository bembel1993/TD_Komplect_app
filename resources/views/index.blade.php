<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <title>Reg Forms</title>
      <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('style2.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
<body>
  <p class="nameOfArticle">
    <a href= "{{ route('form.show') }}" class="btn btn-primary btn-xs">
      Создать новую форму
    </a>
  </p>
  
  @foreach ($employees as $empl)
  
        <div class="block1">
          
          <a href="{{ route('form.update', $empl->id) }}" class="btn btn-primary btn-xs">
            <h1 class="glyphicon glyphicon-pencil"></h1>
          </a>
        
          <a href="" class="btn btn-primary btn-xs btn-default pull-right">
                <h1 class="glyphicon glyphicon-floppy-remove"></h1>
          </a>
          <div class="block5">
              <label for="myInput" name="id">ID: {{ $empl->id }}</label>
              <div class="form-group">
                <div class="form-group">
                <label for="myInput">Фамилия:</label>
                </div>
                <div class="form-input-lastname2">
                <p class="styletext2" name="last_name">{{ $empl->lastname }}</p>
                </div>
              </div>
              <div class="form-group">
                <div class="form-group">
                <label for="myInput">Имя:</label>
                </div>
                <div class="form-input-lastname2">
                <p class="styletext2" name="first_name">{{ $empl->firstname }}</p>
                </div>
              </div>
              <div class="form-group">
                <div class="form-group">
                <label for="myInput">Отчество:</label>
                </div>
                <div class="form-input-lastname2">
                <p class="styletext2" name="patronymic">{{ $empl->patronymic }}</p>
                </div>
              </div>
            
            <div class="form-group">
              <div class="form-group">
              <label for="myInput">Компания:</label>
              </div>
              <div class="form-input-lastname2">
              <p class="styletext2" name="company">{{ $empl->company }}</p>
              </div>
            </div>
            <div class="form-group">
              <div class="form-group">
              <label for="myInput">Отдел:</label>
              </div>
              <div class="form-input-lastname2">
              <p class="styletext2" name="department">{{ $empl->department }}</p>
              </div>
            </div>
            
            <div class="form-group">
              <div class="form-group">
              <label for="myInput">Дата создания:</label>
              </div>
              <div class="form-input-lastname2">
              <p class="styletext2" >{{ $empl->created_at }}</p>
              </div>
            </div>
            <hr>
            
          </div>
      
        </div>
        <br>
      
  @endforeach
  
</body>
</html>