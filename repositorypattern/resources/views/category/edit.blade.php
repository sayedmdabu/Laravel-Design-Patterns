<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{ route('category.update') }}" method="POST">
  @csrf
  @method('PUT')

  <input type="hidden" name="id" value="{{$category->id}}">
  <label for="category_name">First name:</label><br>
  <input type="text" id="category_name" name="category_name" value="{{$category->category_name}}"><br>
  <input type="submit" value="update">
</form> 


</body>
</html>

