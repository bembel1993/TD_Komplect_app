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
    <p class="nameOfArticle">
        <a href= "{{ route('index') }}" class="btn btn-primary btn-xs ">
            Назад
        </a>
    </p>
    <div class="block1">
        <div class="block2">
            <div class="block3">
                <p class="nameOfArticle">
                    <b>Создание формы</b>
                </p>
            </div>
            <form method="post" action="{{ route('form.registration') }}">
                @csrf
                <div class="form-group">
                </div>
                <div id="fields" class="block5">
                    <div for="field1" class="form-group">
                        <div id="field1" name="field1" class="form-lastname">
                            <label id="field1" name="field1" for="myInput">Фамилия:</label>
                        </div>
                        <div id="field1" name="field1" class="form-input-lastname">                           
                            <input id="field1" name="field1" type="text2" id="last_name" name="last_name" >
                        </div>
                        <button class="btn btn-primary" id="add-field">
                            <h1 class="glyphicon glyphicon-ok">
                            </h1>
                        </button>
                        <button class="btn btn-primary" id="del-field-lastname">
                            <h1 class="glyphicon glyphicon-remove">
                            </h1>
                        </button>
                    </div>
                  <!--  <div class="form-group">
                        <div class="form-lastname">
                            <label for="myInput">Имя:</label>
                        </div>
                        <div class="form-input-lastname">
                            <input type="text2" id="first_name" name="first_name" >
                        </div>
                        <button class="btn btn-primary" id="add-field-firstname">
                            <h1 class="glyphicon glyphicon-ok">
                            </h1>
                        </button>
                        <button class="btn btn-primary" id="del-field-firstname">
                            <h1 class="glyphicon glyphicon-remove">
                            </h1>
                        </button>
                    </div>
                    <div class="form-group">
                        <div class="form-lastname">
                            <label for="myInput">Отчество:</label>
                        </div>
                        <div class="form-input-lastname">
                            <input type="text3" id="patronymic" name="patronymic" >
                        </div>
                        <button class="btn btn-primary" id="add-field-patronymic">
                            <h1 class="glyphicon glyphicon-ok">
                            </h1>
                        </button>
                        <button class="btn btn-primary" id="del-field-patronymic">
                            <h1 class="glyphicon glyphicon-remove">
                            </h1>
                        </button>
                    </div>
                    
                    <hr>
                    <div class="form-group">
                        <div class="form-lastname">
                            <label for="myInput">Компания:</label>
                        </div>
                        <div class="form-input-lastname2">
                            <select id="tag-select" name="company" class="form-select form-select-lg mb-3" aria-label="Default select example">
                                <option value="" ></option>
                            </select>
                        </div>
                        <button class="btn btn-primary" id="add-field-company">
                            <h1 class="glyphicon glyphicon-ok">
                            </h1>
                        </button>
                        <button class="btn btn-primary" id="del-field-company">
                            <h1 class="glyphicon glyphicon-remove">
                            </h1>
                        </button>
                    </div>
                    <div class="form-group">
                        <div class="form-lastname">
                            <label for="department">Отдел:</label>
                        </div>
                        <div class="form-input-lastname2">
                            <select id="department" name="department" class="form-select form-select-lg mb-3" aria-label="Default select example">
                                <option value=""></option>
                            </select>
                        </div>
                        <button class="btn btn-primary" id="add-field-dep">
                            <h1 class="glyphicon glyphicon-ok">
                            </h1>
                        </button>
                        <button class="btn btn-primary" id="del-field-dep">
                            <h1 class="glyphicon glyphicon-remove">
                            </h1>
                        </button>
                    </div>-->
                
                    <p class="styletext2">
                       
                    </p>
                </div>
                <div class="block6">
                    <p class="styletext3">
                        
                    </p>
                </div>
                <!-- <div class="block7">
                    <button class="btn btn-primary" style="width: 100%;">Отправить</button>
                </div> -->
            </form>
           
        </div>
    </div>
    <script src="{{ asset('jsstyle.js') }}"></script>
    <script>
        
        const form = document.querySelector('form');
        const addFieldButton = document.querySelector('#add-field');

        addFieldButton.addEventListener('click', () => {
        
        const newField = document.createElement('div');
        newField.innerHTML = `
                    <div for="field" class="form-group">
                        <div id="field" name="field" class="form-lastname">
                            <label id="field" name="field" for="myInput">Имя:</label>
                        </div>
                        <div id="field" name="field" class="form-input-lastname">
                            <input  type="text2" id="field" name="field" >
                        </div>
                        <button class="btn btn-primary" id="add-field-firstname">
                            <h1 class="glyphicon glyphicon-ok">
                            </h1>
                        </button>
                        <button class="btn btn-primary" id="del-field-firstname">
                            <h1 class="glyphicon glyphicon-remove">
                            </h1>
                        </button>
                    </div>
            `;
        
        document.querySelector('#fields').appendChild(newField);
  
        const removeFieldButton = newField.querySelector('.del-field-firstname');
        removeFieldButton.addEventListener('click', () => {newField.remove();});
    });
    </script>
</body>

</html>