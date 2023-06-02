<!DOCTYPE html>
<html>

<head>
    <title>Application for Participation</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('style3.css') }}" rel="stylesheet">
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
                    <b>{{ $form->name }}</b>
                </p>
            </div>
            <form>
                @foreach ($fields as $field)
                    <label for="{{ $field->name }}">{{ $field->name }}{{ $field->required ? '*' : '' }}:</label>
                @if ($field->type == 'text')
                    <input type="text" id="{{ $field->name }}" name="{{ $field->name }}"{{ $field->required ? ' required' : '' }}>
                @elseif ($field->type == 'email')
                    <input type="email" id="{{ $field->name }}" name="{{ $field->name }}"{{ $field->required ? ' required' : '' }}>
                @elseif ($field->type == 'number')
                    <input type="number" id="{{ $field->name }}" name="{{ $field->name }}"{{ $field->required ? ' required' : '' }}>
                @endif
                @endforeach
            </form>
            <form method="post" action="{{ route('form.registration') }}">
                @csrf
              
                <div class="form-group">
                    
                  </div>
                <div class="block5">
                    <div class="form-group">
                        <div class="form-lastname">
                            <label for="{{ $field->name }}">{{ $field->name }}{{ $field->required ? '*' : '' }}:</label>
                        </div>
                        <div class="form-input-lastname">
                            @if ($field->type == 'text')
                                <input type=text class="text2" id="{{ $field->name }}" name="{{ $field->name }}"{{ $field->required ? ' required' : '' }} >
                                    @if ($errors->has('{{ $field->name }}'))
                                        <div class="text-danger">{{ $errors->first('{{ $field->name }}') }}</div>
                                    @endif
                            @elseif ($field->type == 'email')
                                <input type=email class="text2" id="{{ $field->name }}" name="{{ $field->name }}"{{ $field->required ? ' required' : '' }} >
                                    @if ($errors->has('{{ $field->name }}'))
                                        <div class="text-danger">{{ $errors->first('{{ $field->name }}') }}</div>
                                    @endif
                            @elseif ($field->type == 'number')
                                <input type=number class="text2" id="{{ $field->name }}" name="{{ $field->name }}"{{ $field->required ? ' required' : '' }} >
                                    @if ($errors->has('{{ $field->name }}'))
                                        <div class="text-danger">{{ $errors->first('{{ $field->name }}') }}</div>
                                    @endif
                            @endif
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="form-lastname">
                            <label for="myInput">Компания:</label>
                        </div>
                        <div class="form-input-lastname2">
                            <select id="tag-select" name="company" class="form-select form-select-lg mb-3" aria-label="Default select example">
                            @foreach($companies as $company)
                                <option value={{ $company->company_name }} >{{ $company->company_name }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-lastname">
                            <label for="department">Отдел:</label>
                        </div>
                        <div class="form-input-lastname2">
                            <select id="department" name="department" class="form-select form-select-lg mb-3" aria-label="Default select example">
                             @foreach($departments as $department)
                                <option value="{{ $department->department_name }}">{{ $department->department_name }}</option>
                            @endforeach
                            </select>
                        </div>
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