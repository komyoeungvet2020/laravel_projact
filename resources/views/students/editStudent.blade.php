<h2>Edit</h2>
<form action="{{route('student.update',$student->id)}}" method="POST">
    @method('patch')
    @csrf
    <input type="text" name="first" value="{{$student->Firstname}}">
    <input type="text" name="last" value="{{$student->Lastname}}" >
    <input type="number" name="age" value="{{$student->age}}" >
    <button type="submit">Submit</button>
</form>