
<h1> Hello data from API</h1>
<table border="1"> 
    @foreach($collection as $item)
    <tr>
        <td>{{$item["id"]}}</td>
        <td>{{$item["email"]}}</td>
        <td>{{$item["first_name"]}}</td>
        <td>{{$item["last_name"]}}</td>
        <td><img src={{$item["avatar"]}} /></td>
    </tr>
    @endforeach
</table>