{{--@extends('adminShow')--}}
@extends('layouts.app')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@section('content')
    <div class="card">
        <div class=" text-center"><h2 class="card-header bg-danger">Update Product Here</h2> </div>
        <div class="card-body">
            <form action="{{route('pro.update',$p->id)}}">
                <div class="form-group">
                    <label for="txttitle"><h4>Title:</h4></label>
                    <input type="text" name="txttitle" value="{{$p->title}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="txtdescri"><h4>Description:</h4></label>
                    <textarea  name="txtdescri" rows="5"  class="form-control">{{$p->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="txtcolor"><h4>color:</h4></label>
                    <select name="txtcolor" >
                        <option>{{$p->color}}</option>
                        <option>Red</option>
                        <option>Gray</option>
                        <option>White</option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="txtprice"><h4>Price:</h4></label>
                    <input type="number" name="txtprice" value="{{$p->price}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="txtcate"><h4>Category:</h4></label>
                    <select name="txtcate">
                        <option>{{$p->category}}</option>
                      @foreach($cat as $cat)
                            <option>{{$cat->cname}}</option>
                          @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" name="btn_submit" CLASS="btn btn-primary">Update</button>
                </div>

            </form>
        </div>
    </div>

@endsection