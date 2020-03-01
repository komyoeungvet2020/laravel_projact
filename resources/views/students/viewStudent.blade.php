<h2>Good morning</h2>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<a href="{{route('student.create')}}"><button>Add</button></a>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>FIRSTNAME</th>
        <th>LASTNAME</th>
        <th>AGE</th>
        <th>ACTION</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->Firstname}}</td>
        <td>{{$student->Lastname}}</td>
        <td>{{$student->age}}</td>
        <td>
            <a href="{{route('student.edit',$student->id)}}"><button type="submit">Edit</button></a>
                <div class="container">
                    <!-- Button to Open the Modal -->
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                      Delete
                    </button>
                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Modal Heading</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          
                          <!-- Modal body -->
                          <div class="modal-body">
                            Modal body..
                          </div>
                          <!-- Modal footer -->
                          <div class="modal-footer">
                              <form action="{{route('student.destroy',$student->id)}}" method="POST">
                                  @csrf
                                  @method('delete')
                            <button type="submit"class="btn btn-danger" data-dismiss="modal">Close</button>
                          </form>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    
                  </div>
        </td>
    </tr>
    @endforeach
</table>
