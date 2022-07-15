<h2>New Post</h2>

{{\Session()->get('message')}}

<form action="{{URL::to('/')}}/posts" method="post"> @csrf
    <input type="text" name="heading" placeholder="heading"><br>
    <textarea name="contant" placeholder="contant" cols="30" rows="10"></textarea><br>
    <button type="submit">Save</button>
</form>

 