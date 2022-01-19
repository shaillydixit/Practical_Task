<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h1>Hii... <span>{{Auth::user()->name}}</span></h1>
        </h2>
    </x-slot>


<br><br>
<h4>Employees Data</h4> 
<a href="{{route('dashboard')}}" class="btn btn-success">Add Data</a>
<br><br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
              <form action="{{route('search')}}" method="POST">
                @csrf
              <input type="search" placeholder="search....">
              </form>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">SNo:</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Designation </th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Age</th>
      <th scope="col">Action
      </th>

    </tr>
  </thead>
  <tbody>
      @php($i = 1)
      @foreach($data as $row)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$row->employee_name}}</td>
      <td>{{$row->designation_id}}</td>
      <td>{{$row->date_of_birth}}</td>
      <td>{{$row->age}}</td>
<td>
<a href="{{route('employee.edit', $row->id)}}" class="btn btn-primary">Edit</a>
    <a href="{{route('employee.delete', $row->id)}}" class="btn btn-danger">Delete</a>

</td>
    </tr>
    @endforeach
  </tbody>
</table>   
            </div>
        </div>
    </div>
</x-app-layout>