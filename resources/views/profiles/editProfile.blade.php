<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<form action="{{route('updateProfile',$user->id)}}" method="POST">
       @method('patch')
       @csrf
     <div class="form-group">
            <input type="text" name="name" value="{{$user->name}}">
     </div>
     <div class="form-group">
            <input type="email" name="email" value="{{$user->email}}" >
     </div>
     <div class="form-group">
            <input type="text" name="phone" value="{{$user->profile->phone}}">
     </div>
     <div class="form-group">
            <input type="text" name="address" value="{{$user->profile->address}}">
     </div>
     <button type="submit" class="btn btn-primary">Update</button>
</form>