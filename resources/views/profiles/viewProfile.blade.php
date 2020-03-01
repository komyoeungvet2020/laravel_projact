<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>address</th>
                    <th>action</th>
                </tr>
                 @foreach ($user as $item)
                 <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->profile->phone}}</td>
                    <td>{{$item->profile->address}}</td>
                    <td>
                        <a href="{{route('editProfile',$item->id)}}"><button type="submit" class="btn btn-primary">Edit</button></a>
                        <a href="{{route('deleteProfile',$item->id)}}"><button type="submit" class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
                 @endforeach
            </table>
        </div>
    </div>
</div>