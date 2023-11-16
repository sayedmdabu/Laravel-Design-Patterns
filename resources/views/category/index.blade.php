<!DOCTYPE html>
<html>
<head>
<style>
th, td {
  border-style:solid;
  border-color: #96D4D4;
}
</style>

<style>
  a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
  }
  
  a:hover, a:active {
    background-color: rgb(114, 8, 8)(0, 153, 255);
  }
</style>

</head>
<body>

<h2>Table With Border Color</h2>

<p><a href="{{route('category.add')}}"> Add</a></p>

<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Action</th>
  </tr>
  @forelse ($categories as $category)
  <tr>
    <td>{{$category->id}}</td>
    <td>{{$category->category_name}}</td>
    <td>
      <a href="{{route('category.edit', $category->id)}}">edit </a>
      <a href="{{route('category.detele', $category->id)}}"> Delete</a>
    </td>
  </tr>
  @empty
      
  @endforelse
  
</table>

</body>
</html>

