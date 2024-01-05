@extends('layout.layout')
@section('content')
<div style="margin-top: 10%;">
  <div class="text-center " >
    <h2>Add News</h2>
  </div>
  <div class="container" style="border: 1cm">

  <form  action="{{ url('/post') }}" method="POST" enctype="multipart/form-data">
  @csrf

      <div class="form-group  mt-4"> <h3>Title </h3>
    <Input size="50"  name="title" height="" placeholder="Title"/>
  </div>
  <div class="form-group col-md-6  mt-4">
    <h3>Short Description</h3>
    <Input size="100"  name="short_description" height="20" placeholder="Write here " style="height: 100px" />
  </div>
  <div class="form-group col-md-6  mt-4">
    <h3>Long Description</h3>
    <Input size="100"  name="long_description" height="20" placeholder="Write here " style="height: 200px" />
  </div>
 
  <div class="mt-4">
  <h3><label for="lang">News Type</label></h3>
  <select name="News_Type" id="lang">
    <option value="javascript">Top News</option>
    <option value="php">Breaking News</option>
    <option value="java">Recent News</option>
  </select>
</div>
  <div class="form-group col-md-6  mt-4">
    <h3>Author</h3>
    <Input size="100"  type="text" name="Author" height="20" placeholder="Write here "  />
  </div>
  <div class="form-group mt-4"><h3>Attach File (image/Video)</h3>
    <Input size="10" name="file" type="file" height="20" />
  </div>



  <div class="text-center  mb-4">
    <button type="submit" id=""   class="btn btn-primary btn-lg">Submit</button>
  </div>
  </form>
</div>


{{-- <table border=5  >
<tr>
  <th>title</th>
  <th>short_description</th>
  <th>long_description</th>
  <th>News_Type</th> 
  <th>Author</th>
  <th>file</th>
</tr>
@foreach ($post as $key => $item)


    <tr>
        <td>{{$item->title}}</td>
        <td>{{$item->short_description}}</td>
        <td>{{$item->long_description}}</td>
        <td>{{$item->News_Type}}</td>
        <td>{{$item->Author}}</td>
        <td>{{$item->file}}</td>
    </tr>

@endforeach

</table> --}}
</div>


 
   @endsection