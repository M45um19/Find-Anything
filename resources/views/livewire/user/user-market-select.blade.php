<div>
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <br>
            <h3 class="text-center">Add Your Shop Market First</h3>
            <hr>

            <a class="btn btn-outline-dark" href="{{route('user.Shop')}}">Deshboard</a>

            <form class="mt-3">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-primary" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>

            <div class="row row-cols-1 row-cols-md-4 g-1">
                @foreach($markets as $market)
                <div class="col">
                    <div class="card border-dark mt-2" style="width: 18rem;">
                        <img src="{{asset('asset/image/market/market.png')}}" class="card-img-top" style="height: 12rem;width: 16rem" alt="market_image">
                        <div class="card-body">
                            <h5 class="card-title">{{$market->market_name}}</h5>
                            <p class="card-text">{{$market->market_address}}</p>
                            <a href="{{route('user.addShopDetails',['id'=>$market->id])}}" class="btn btn-outline-dark">Select</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="">
                <div class="row">
                    <div class="col-6">
                        <br>

                    </div>
                    <div class="col">

                    </div>
                </div>
            </div>
        </div>
    </main>

</div>