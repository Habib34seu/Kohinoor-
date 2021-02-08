@extends('admin_master')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Product Sub Category</h1>
    </div>

    <div class="container">
<form action="{{route('psc-create')}}" method ="post" enctype="multipart/form-data">
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
      <label for="inputEmail3" class="col-sm-2 col-form-label"> Name</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name ="name" id="name" placeholder=" Name">
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
                <th>Name</th>
                <th style="width:150px;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $i )
                  <tr>
                      <td style="width:80px;">{{ $i-> id }}</td>
                      <th></th>
                      <td>{{ $i-> name }}</td>
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