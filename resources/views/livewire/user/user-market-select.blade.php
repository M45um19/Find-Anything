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
            <div class="col-5">
                <div class="input-group ">
                    <input class="form-control" type="search" placeholder="Search your market" aria-label="Search" wire:model="search_value" />

                </div>
            </div>
            <br>


            <div class="container">
                <div class="row">
                    @foreach($markets as $market)
                    <div class="card">
                        <div class="card-header">
                            <img src="{{asset('asset/image/market/')}}/{{$market->market_image}}" alt="rover" />
                        </div>
                        <div class="card-body">

                            <h4>
                                {{$market->market_name}}
                            </h4>
                            <p>
                                {{$market->market_address}}
                            </p>
                            <a href="{{route('user.addShopDetails',['id'=>$market->id])}}" class="btn btn-success tag tag-teal ">Select</a>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <h1>Your Have a Shop</h1>
                    @endif
                </div>
            </div>




            <div class="container">



            </div>
        </div>
    </main>

</div>


<style>
    * {
        box-sizing: border-box;
    }

    body {

        justify-content: center;
        align-items: center;
        margin: 0;
        background-color: #f7f8fc;

        color: #10182f;
    }

    .container {
        display: flex;
        width: 100%;
        justify-content: space-evenly;
        flex-wrap: wrap;
    }

    .card {
        margin: 10px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        width: 300px;
    }

    .card-header img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        padding: 20px;
        min-height: 250px;
    }

    .tag {

        border-radius: 50px;

        text-transform: uppercase;
        cursor: pointer;
    }





    .card-body p {
        font-size: 13px;
        margin: 0 0 40px;
    }

    @media (max-width: 992px) {
        .card {
            margin: auto;
            margin-bottom: 10px;
        }
    }
</style>