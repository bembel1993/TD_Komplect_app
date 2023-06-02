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
            <form method="POST" action="{{ route('forms.store') }}">
                {{ csrf_field() }}
              
                <label for="name">Form name:</label>
                <input type="text" id="name" name="name" required>
              
                <div id="fields">
                  <div class="field">
                    <label for="field-name-0">Field name:</label>
                    <input type="text" id="field-name-0" name="fields[0][name]" required>
              
                    <label for="field-type-0">Field type:</label>
                    <select id="field-type-0" name="fields[0][type]" required>
                      <option value="text">Text</option>
                      <option value="email">Email</option>
                      <option value="number">Number</option>
                    </select>
              
                    <label for="field-required-0">Required:</label>
                    <input type="checkbox" id="field-required-0" name="fields[0][required]">
                  </div>
                </div>
              
                <button type="button" id="add-field-btn">Add field</button>
              
                <button type="submit">Save</button>
              </form>
                <p class="styletext2"></p>
        </div>
                <div class="block6">
                    <p class="styletext3">
                        
                    </p>
                </div>
        </div>
    </div>

    <script src="{{ asset('jsstyle.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var fieldCount = 1;
      
        $('#add-field-btn').click(function() {
          var field = '<div class="field">' +
            '<label for="field-name-' + fieldCount + '">Field name:</label>' +
            '<input type="text" id="field-name-' + fieldCount + '" name="fields[' + fieldCount + '][name]" required>' +
      
            '<label for="field-type-' + fieldCount + '">Field type:</label>' +
            '<select id="field-type-' + fieldCount + '" name="fields[' + fieldCount + '][type]" required>' +
              '<option value="text">Text</option>' +
              '<option value="email">Email</option>' +
              '<option value="number">Number</option>' +
            '</select>' +
      
            '<label for="field-required-' + fieldCount + '">Required:</label>' +
            '<input type="checkbox" id="field-required-' + fieldCount + '" name="fields[' + fieldCount + '][required]">' +
          '</div>';
      
          $('#fields').append(field);
          fieldCount++;
        });
    </script>
</body>

</html>