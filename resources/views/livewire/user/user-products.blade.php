<div>
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <br>
            <h3 class="text-center">My Products</h3>
            <hr>
            @if($shops->count() > 0 )

            <a class="btn btn-dark" href="{{route('user.addProduct')}}">Add Product</a>
            <hr>
            <div class="col-5">
                <div class="input-group ">
                    <input class="form-control" type="search" placeholder="Search your product" aria-label="Search" wire:model="search_value" />

                </div>
            </div>
            <br>

            <div class="container">

                <div class="row ">

                    @foreach($products as $product) <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                        <div class="card mb-3" style="width: 18rem;">
                            <?php
                            $imgInfo = getimagesize('asset/image/product/' . $product->product_image);
                            $w = $imgInfo[0];
                            $h = $imgInfo[1];
                            if ($h > $w) {
                                $r = $h / $w;
                                $nh = 246 + 30; // 30+ to cover lurma padding -_-
                                $nw = round(246 / $r) + 30;
                            } else {
                                $r = $w / $h;
                                $nw = 190 + 30;
                                $nh = round(190 / $r) + 30;
                            }
                            //echo "<h2 class='text-center'>h:{{$nh}}, w: {{$nw}}</h2>";
                            ?>

                            <div class="text-center">
                                <img class="card-img card_img_producr" src="{{asset('asset/image/product/')}}/{{$product->product_image}}" style="width: {{$nw}}px; height: {{$nh}}px" alt="product">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$product->product_name}}</h5>
                                @if($product->product_availability == 'Not Available')
                                <p class="card-text- text-warning">{{$product->product_availability}}</p>
                                @elseif($product->product_availability == 'Available')
                                <p class="card-text- text-success">{{$product->product_availability}}</p>
                                @endif
                                <p class="card-text">Reguler Price: <s>{{$product->product_regular_prize}}TK </s> </p>
                                <p class="card-text text-success">Sale Price: {{$product->product_sale_prize}}TK</p>

                                <div class="d-block">
                                    <a href="{{route('user.editProduct',['id'=>$product->id])}}" class="btn btn-secondary btn-sm btn_product">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm btn_product" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $product->id }}">Remove</a>
                                </div>


                                <!-- Modal -->

                                <div class="modal fade" id="exampleModal-{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">DELETE</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are You Sure You Want To Delete <b>{{$product->product_name}} </b> ??
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" wire:click="deleteProduct({{$product->id}})" class="btn btn-danger">YES</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>

            @else
            <h3>You don't have any shop yet.</h3>
            <a class="btn btn-success" href="{{route('user.marketSelect')}}">Add Shop details</a>
            @endif

        </div>
    </main>
</div>

<style>
    * {
        box-sizing: border-box;
    }

    body {


        margin: 0;
        background-color: #f7f8fc;

        color: #10182f;
    }

    .container {

        width: 100%;
        justify-content: space-evenly;
        flex-wrap: wrap;
    }

    .card {

        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        width: 300px;
    }


    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        padding: 20px;
        min-height: 250px;
    }

    .btn_product {
        border-radius: 50px;

    }
</style>