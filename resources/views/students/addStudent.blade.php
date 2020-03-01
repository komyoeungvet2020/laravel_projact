<h2>Hello</h2>
<form action="{{route('student.store')}}" method="POST">
    @csrf
    <input type="text" name="first" placeholder="firstname">
    <input type="text" name="last" placeholder="lastname">
    <input type="number" name="age" placeholder="age">
    <button type="submit">Submit</button>
</form>