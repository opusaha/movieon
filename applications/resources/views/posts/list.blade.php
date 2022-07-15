<h2>welcome views</h2>

{{\Session()->get('message')}}

<a href="{{URL::to('/')}}/posts/create" style="float:right;">new post</a>
<table width="100%" border="1">
    <tr>
        <th>heading</th>
        <th>contant</th>
        <th>action</th>
    </tr>
    @foreach($data as $item)
    <tr> 
        <td>{{$item ->heading}}</td>
        <td>{{$item ->contant}}</td>
        <td><a href="{{URL::to('/')}}/posts/{{$item->id}}/edit">edit</a></td>
    </tr>
    @endforeach
</table> 