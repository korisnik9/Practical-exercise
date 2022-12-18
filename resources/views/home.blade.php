@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         
         <form  action="{{ route ('home.store') }}" method="POST">
            @csrf
            <div class="form-group">
               <label for="formGroupExampleInput">First name</label>
               <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Please enter a first name">
               @error('name')
               <span class="text-danger">{{$message}}</span>
               @enderror
            </div>
            <div class="form-group">
               <label for="formGroupExampleInput">Last name</label>
               <input name="last_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Please enter a last name">
               @error('last_name')
               <span class="text-danger">{{$message}}</span>
               @enderror
            </div>
            <div class="form-group">
               <label for="formGroupExampleInput">Age</label>
               <input name="age" type="text" class="form-control w-25" id="age"  placeholder="Please insert age">
               @error('age')
               <span class="text-danger">{{$message}}</span>
               @enderror
            </div>
            <div class="form-group">
               <label for="formGroupExampleInput">Enter your favorite car brand</label>
               <input name="car" type="text" class="form-control w-50" id="formGroupExampleInput" placeholder="Please enter here">
               @error('car')
               <span class="text-danger">{{$message}}</span>
               @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
         </form>
      </div>
   </div>
</div>
</div>
<script>
   $(function () {
       $("#age").datepicker({
           changeMonth: true,
           changeYear: true,
       });
   });
</script>
@endsection