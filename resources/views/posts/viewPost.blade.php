<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>title</th>
                    <th>body</th>
                    <th>action</th>
                </tr>
                 @foreach ($posts as $post)
                 <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>
                        <a href="{{route('editPost',$post->id)}}"><button type="submit" class="btn btn-primary">Edit</button></a>
                        <a href="{{route('deletePost',$post->id)}}"><button class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
                 @endforeach
            </table>
        </div>
    </div>
</div>