<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{ route('category.store') }}" method="POST">
  @csrf
  <label for="category_name">First name:</label><br>
  <input type="text" id="category_name" name="category_name" value="John"><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

