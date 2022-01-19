<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h1>Hii... <span>{{Auth::user()->name}}</span></h1>
        </h2>
    </x-slot>


<br><br>
<a href="{{route('employee.details')}}" class="btn btn-info">SEE ALL DETAILS</a>
<br><br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <form action="{{route('create.employee.data')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Employee Name</label>
                        <input type="text" name="employee_name" class="form-control" placeholder="Enter Employee Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Designation Name</label>
                        <input type="text" name="designation_id" class="form-control" placeholder="Enter Designation">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Date Of Birth</label>
                        <input type="date" name="date_of_birth" class="form-control" placeholder="Enter DOB">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
