

@section('content')
<div class="card" style="margin: 20px;">
<div class="card-header"style="font-family: sans-serif;">Create New Post</div>
<div class="card-body">

<form action="" method="post" enctype="multipart/form-data">
    <label>Title</label></br>
    <input type="text" name="title" id="title" class="form-control"></br>
    <label>Content</label></br>
    <input type="text" name="content" id="content" class="form-control"></br>
    <input class="form-control" name="image" type="file" id="image">
<button class="btn btn-block btn-primary "type ="submit" style="margin-top: 20px font-family: sans-serif;"">Add post</button>
</form>

</div>
</div>
@stop 
