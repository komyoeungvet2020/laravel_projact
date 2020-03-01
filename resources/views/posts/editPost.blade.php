<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <div class="container mt-5">
     <div class="row">
         <div class="col-3"></div>
         <div class="col-6">
             <div class="card">
                 <div class="card-header text-center"><strong>Edit Post</strong></div>
                 <div class="card-body">
                    <form action="{{route('updatePost',$post->id)}}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" value="{{$post->title}}" placeholder="title">
                        </div>
                         <div class="form-group">
                            <input type="text" name="body" class="form-control" value="{{$post->body}}" placeholder="body">
                         </div>
                         <button type="submit" class="btn btn-success">Update</button>
                    </form>
                 </div>
             </div>
         </div>
         <div class="col-3"></div>
     </div>
 </div>