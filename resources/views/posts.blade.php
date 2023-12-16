<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')
<div class="container">
  <h2>Posts List</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Desctription</th>
        <th>created At</th>
        <th>Action </th>

      </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
      <tr>
        <td>{{ $post->title }}</td>
        <td>{{ $post->description }}</td>
        <td>{{ $post->author }}</td>
        <td><a href="updatePost/{{ $post->id}}" class='btn btn-primary'>Update </a> </td>

    @endforeach
</tr>
      
    </tbody>
  </table>
</div>

</body>
</html>