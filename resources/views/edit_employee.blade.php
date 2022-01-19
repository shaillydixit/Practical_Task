<x-app-layout>
<br><br>
<h4>Edit Data</h4>
<br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <form action="{{route('employee.update', $editdata->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Employee Name</label>
                        <input type="text" name="employee_name" class="form-control" value="{{$editdata->employee_name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Designation Name</label>
                        <input type="text" name="designation_id" class="form-control" value="{{$editdata->designation_id}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Date Of Birth</label>
                        <input type="date" name="date_of_birth" class="form-control" value="{{$editdata->date_of_birth}}">
                    </div>

                    <button type="update" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
