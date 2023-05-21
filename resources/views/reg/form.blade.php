<!DOCTYPE html>
<html>

<head>
    <title>Application for Participation</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   
</head>

<body>
    <div class="block1">
        <div class="block2">
            <div class="block3">
                <p class="nameOfArticle">
                    <b>Registration form</b>
                </p>
            </div>
            <form method="POST" action="send.php">
                
                <div class="form-group">
                    
                  </div>
                <div class="block5">
                    <div class="form-group">
                    <label for="myInput">Фамилия:</label>
                    <input type="text2" id="myInput" name="myInput">
                    </div>
                    <div class="form-group">
                    <label for="myInput">Имя:</label>
                    <input type="text2" id="myInput" name="myInput">
                    </div>
                    <div class="form-group">
                    <label for="myInput">Отчество:</label>
                    <input type="text3" id="myInput" name="myInput" >
                    </div>
                    
                    <hr>
                    <div class="form-group">
                        <label for="myInput">Компания:</label>
                        <select id="tag-select" class="form-select form-select-lg mb-3" aria-label="Default select example">
                            @foreach ($deps as $dep)
                            <option value={{ $dep->id }} selected disabled>{{ $dep->company }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="myInput">Отдел:</label>
                        <select id="tag-select" class="form-select form-select-lg mb-3" aria-label="Default select example">
                            @foreach ($deps as $dep)
                            <option value={{ $dep->id }} selected disabled>{{ $dep->department }}</option>
                            @endforeach
                        </select>
                    </div>
                    <p class="styletext2">
                       
                    </p>
                </div>
                <div class="block6">
                    <p class="styletext3">
                        
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