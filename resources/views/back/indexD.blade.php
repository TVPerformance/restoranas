@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h1>List of dishes</h1>
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        
                        @foreach($rests as $rest)
                        @foreach($rest->restDish as $dish)
                        
                        <li class="list-group-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-2">
                                        {{$dish->title}}
                                    </div>
                                    <div class="col-2">
                                        {{$rest->title}}
                                    </div>
                                   
                                    <div class="col-1 stay">
                                        {{$dish->price}} Eur
                                    </div>
                                   

                                   
                                    
                                            <div class="col-4 d-flex justify-content-end capital" style="display: flex">
                                              
                                                <a href="{{route('dishs-edit', $dish)}}" class="btn btn-outline-secondary me-2">Edit</a>

                                                <form action="{{route('dishs-destroy', $dish)}}" method="post">
                                                    <button type="submit" class="btn btn-danger capital">Delete</button>
                                            </div>
                                     
                                    @csrf
                                    @method('delete')
                                    </form>

                        </li>


                        @endforeach
                        @endforeach



                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
@endsection