@extends('layout.layout')
@section('content')
<div style="margin-top: 10%;">
  <div class="text-center " >
    <h2>Submit Your News</h2>
  </div>
  <div class="container" style="border: 1cm">

  <form  action="{{ url('/blog') }}" method="POST">
  @csrf

      <div class="form-group  mt-4">
    <Input size="50"  name="title" height="" placeholder="Title"/>
  </div>
  <div class="form-group col-md-6  mt-4">
    <Input size="100"  name="info" height="20" placeholder="Description" style="height: 300px" />
  </div>
    <div class="form-group mt-4">
    <Input size="10" name="file" placeholder="Add File" type="file" height="20" />
  </div>
  <div class="form-group mt-4">
    <Input size="10" name="name" placeholder="Your Name" type="name" height="20" />
  </div>

  <div class="form-group mt-4">
    <Input size="10" name="Phone" maxlength="10" placeholder="Mobile No." type="name" height="20" />
  </div>

    <div class="form-group mt-4">
    <Input size="10" name="email" placeholder="E-mail" type="email" height="20" />
  </div>
  <div class="text-center  mb-4">
    <button type="submit" id=""   class="btn btn-primary btn-lg">Submit</button>
  </div>
  </form>
</div>
</div>
 
   @endsection