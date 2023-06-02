<table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Form name</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($forms as $form)
        <tr>
          <td>{{ $form->id }}</td>
          <td>{{ $form->name }}</td>
          <td><a href="{{ route('forms.edit', $form->id) }}">Edit</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>