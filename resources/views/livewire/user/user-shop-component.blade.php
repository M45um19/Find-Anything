<div>
    <main class="mt-5 pt-3">
        <div class="container-fluid">



            @if($shops->count()>0)

            <p>
                <br>
                <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">

                    Tap to See Your Shop
                </a>

            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    @foreach($shops as $shop)
                    <br>

                    <h2 class="text-center">Your Shop</h2>
                    <br>
                    <div class="text-center">
                        <img class="shop_image_single" src="{{asset('asset/image/shop')}}/{{$shop->shop_image}}" alt="">
                    </div>
                    <br>
                    <h5 class="text-center">Shop Name: <span>{{$shop->shop_name}}</span>
                    </h5>
                    <h5 class="text-center">Market Name: <span>{{$shop->market_name}}</span></h5>
                    <h5 class="text-center">Market Address: <span>{{$shop->market_address}}</span></h5>
                    <h5 class="text-center">Shop Address: <span>{{$shop->shop_address}}</span></h5>
                    <h5 class="text-center">Mobile Number: <span>{{$shop->mobile_number}}</span></h5>
                    <h5 class="text-center">Description: <span>{{$shop->shop_description}}</span></h5>
                    <br>
                    <a href="{{route('user.shopEdit',['id'=>$shop->id])}}" class="btn btn-secondary">Edit you Details</a>
                    @endforeach
                </div>
            </div>


            @else
            <h3>First you have to add a shop</h3>
            <a class="btn btn-success" href="{{route('user.marketSelect')}}">Add Shop details</a>
            <br>
            <br>
            @endif


        </div>
    </main>
</div>