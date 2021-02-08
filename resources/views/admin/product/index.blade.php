@extends('admin_master')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Product </h1>
    </div>

    <div class="container">
<form action="{{route('p-create')}}" method ="post" enctype="multipart/form-data">
 @csrf
       <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Product Category</label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" id="prod_cat_id" name="prod_cat_id">
                @foreach($productCat as $pcat)
                <option value="{{$pcat->id}}">{{ $pcat-> name }}</option>
                @endforeach
                  
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Product Sub Category</label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" id="prod_subcat_id" name="prod_subcat_id">
                @foreach($productsubCat as $pscat)
                <option value="{{$pscat->id}}">{{ $pscat-> name }}</option>
                @endforeach
                  
                </select>
            </div>
        </div>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"> Name</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name ="name" id="name" placeholder=" Name">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Upload</label>
      <div class="col-sm-6">
        
          <div class="input-group mb-3">
            <div class="custom-file">
              <input type="file" id="myfile" name="img"><br><br>
            </div>
          </div>
      </div>
    </div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-6">
        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
      </div>
    </div>
</form>
</div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th style="width:80px;">Id</th>
                <th>Product Category</th>
                <th>Product Sub Category</th>
                <th>Name</th>
                <th style="width:350px;">Image</th>
                <th style="width:150px;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $i )
                  <tr>
                      <td style="width:80px;">{{ $i-> id }}</td>
                      <th>{{ $i-> prod_cat_id }}</th>
                      <th>{{ $i-> prod_subcat_id }}</th>
                      <td>{{ $i-> name }}</td>
                      <td style="width:350px;"><img class="bd-placeholder-img " width="150px" 
                             height="150px" src="{{asset('uploades/product/').'/'.$i->img}}"></td>
                      <td style="width:150px;">
                      <a href="" class="btn btn-primary">Edit</a>
                      <a href="" class="btn btn-danger">Edit</a>
                      </td>  
                  </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection