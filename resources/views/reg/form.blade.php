<!DOCTYPE html>
<html>

<head>
    <title>Application for Participation</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/app.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>

<body>
    <div class="block1">
        <div class="block2">
            <div class="block3">
                <p class="nameOfArticle">
                    <b>Отправить заявку на участие в семинаре</b>
                </p>
            </div>
            <form method="POST" action="send.php">
                <div class="block4">
                    <p class="styletext1">
                        Организаторы свяжутся с вами для подтверждения записи <br>
                        Участие в записи <u>бесплатное</u>
                    </p>
                </div>
                <div class="block5">
                    <p class="styletext2">
                        Ваше имя
                    </p>
                    <input name="name" class="form-control" placeholder="Name"></input>
                    <p class="styletext2">
                        Контактый email
                    </p>
                    <input name="email" class="form-control" placeholder="Email"></input>
                    <p class="styletext2">
                        Интересующий семинар
                    </p>
                    <select name="choice" class="form-select form-select-lg mb-3" aria-label="Default select example">
                        <option selected>Выбрать</option>
                        @foreach ($deps as $dep)
                        <option name="choice" value={{ $dep->id }}>{{ $dep->department }}</option>
                        @endforeach
                      <!--  <option name="choice" value="2">Two</option>
                        <option name="choice" value="3">Three</option>-->
                    </select>
                </div>
                <div class="block6">
                    <p class="styletext3">
                        Все поля обязательны для заполнения <br>
                        Отправляя заявку вы соглашаетесь с договором публичной оферты<br>
                        и политикой обработки данных
                    </p>
                </div>
                <div class="block7">
                    <button class="btn btn-primary" style="width: 100%;">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>