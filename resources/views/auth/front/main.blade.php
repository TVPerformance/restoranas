<div class="container">
        <div class="row justify-content-center">
            <div>
                <h1>Destinations</h1>
            </div>
            <div class="col-3">
                
            </div>
            <div class="col-9">
                <div class="card-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            @foreach($hotels as $hotel)
                            <div class="col-3 list-table">
                                <h2>{{$hotel->title}}</h2>
                                <h4>{{$hotel->hotelCountry->title}}</h4>
                                <h6>{{$hotel->duration}} days</h6>
                                <h5>{{$hotel->price}} Eur</h5>
                                <h6>{{$hotel->hotelCountry->start}}</h6>
                                <h6>{{$hotel->hotelCountry->end}}</h6>

                                <a href="{{route('show-hotel', $hotel)}}">
                                    <div>
                                        @if($hotel->picture)
                                        <img class="smallimg" src="{{asset($hotel->picture)}}">
                                        @else
                                        <img class="img-thumbnail" src="{{asset('hotel/absent.jpg')}}">
                                        @endif
                                    </div>
                                </a>
                                <div>
                                    <form action="{{route('add-to-cart')}}" method="post">
                                        <button type="submit" class="btn btn-danger mt-1">Buy Now</button>
                                        <input type="number" min="1" value="1" name="count">
                                        <input type="hidden" min="1" name="product" value="{{$hotel->id}}">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>