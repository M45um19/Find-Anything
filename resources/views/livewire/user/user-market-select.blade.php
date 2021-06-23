<div>
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <br>
            <h3 class="text-center">Add Your Shop Market First</h3>
            <hr>

            <a class="btn btn-dark" href="{{route('user.Shop')}}">Dashboard</a>
            <br>
            <br>
            @if($shops->count() === 0)
            <form class="col-5">
                <div class="input-group ">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" wire:model="search_value" />

                </div>
            </form>
            <br>


            <div class="container">
                <div class="row">
                    @foreach($markets as $market)
                    <div class="col-sm-4">
                        <div class="card card_border_market mb-4" style="width: 18rem;">
                            <img class="card-img-top card_img_market" src="{{asset('asset/image/market/')}}/{{$market->market_image}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$market->market_name}}</h5>
                                <p class="card-text">{{$market->market_address}}</p>
                                <a href="{{route('user.addShopDetails',['id'=>$market->id])}}" class="btn btn-success">Select</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <h1>Your Have a Shop</h1>
                    @endif
                </div>
            </div>




        </div>
    </main>

</div>