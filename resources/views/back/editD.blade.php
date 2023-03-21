@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Edit dish</h1>
                </div>

                <div class="card-body">

                    <form action="{{route('dishs-update', $dish)}}" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Dish name</label>
                            <input type="text" class="form-control" name="title" value="{{old('title', $dish->title)}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="text" class="form-control" name="price" value="{{old('price', $dish->price)}}">
                        </div>
                       

                        @if($dish->picture)
                        <div class="col-12">
                            <div class="mb-3">
                                <img class="img-responsive" src="{{asset($hotel->picture)}}"  width="460" height="345">
                            </div>
                        </div>
                        @endif

                        <div class="mb-3">
                            <label class="form-label">Hotel photo</label>
                            <input type="file" class="form-control" name="photo">
                        </div>
                       
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-primary">Update</button>

                            @if($dish->picture)
                            <button type="submit" class="btn btn-outline-danger" name="delete_photo" value="1">Delete photo</button>
                            @endif
                        </div>
                        @method('put')
                        @csrf



                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection