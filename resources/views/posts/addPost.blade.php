<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
           <div class="card">
               <div class="card-header text-center"><strong>Add Post</strong></div>
               <div class="card-body">
                <form action="{{route('addPost','id')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="title">
                    </div>
                     <div class="form-group">
                        <input type="text" name="body" class="form-control" placeholder="body">
                     </div>
                     <button type="submit" class="btn btn-success">Save</button>
                </form>
               </div>
           </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>