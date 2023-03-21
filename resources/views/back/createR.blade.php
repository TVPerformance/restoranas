@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h1>Add restaurant</h1>
                </div>

                <div class="card-body">

                    <form action="{{route('rests-store')}}" method="post">
                        <div class="mb-3">
                            <label class="form-label">Restaurant title</label>
                            <input type="text" class="form-control" placeholder="Restaurant*" name="title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" placeholder="City*" name="city">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Adress</label>
                            <input type="text" class="form-control" placeholder="Adress*" name="adress">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Business hours</label>
                            <input type="text" class="form-control" placeholder="examples: 11-23, 10:30-23:30*" name="hours">
                        </div>
                        
                        <div class="mb-3">
                        <button type="submit" class="btn btn-outline-primary">Add</button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection