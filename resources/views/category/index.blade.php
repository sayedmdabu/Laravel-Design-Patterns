<!DOCTYPE html>
<html>
<head>
<style>
th, td {
  border-style:solid;
  border-color: #96D4D4;
}
</style>
</head>
<body>

<h2>Table With Border Color</h2>

<p>Use the CSS border-color property to set the color of the borders.</p>

<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Name</th> 
  </tr>
  @forelse ($categories as $category)
  <tr>
    <td>{{$category->id}}</td>
    <td>{{$category->category_name}}</td>
  </tr>
  @empty
      
  @endforelse
  
</table>

</body>
</html>

