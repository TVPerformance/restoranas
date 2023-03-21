@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Add dish</h1>
                </div>

                <div class="card-body">

                    <form action="{{route('dishs-store')}}" method="post" enctype="multipart/form-data">
                        <div class="mb-2">
                            <label class="form-label">Restaurant</label>
                            <select class="form-select" name="rest_id">
                                @foreach($rests as $rest)
                                <option value="{{$rest->id}}">{{$rest->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Dish name</label>
                            <input type="text" class="form-control" placeholder="Dish name*" name="title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="text" class="form-control" placeholder="Price*" name="price">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Dish photo</label>
                            <input type="file" class="form-control" name="photo">
                        </div>
                       
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-primary">Add New</button>
                        </div>
                        @csrf



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection