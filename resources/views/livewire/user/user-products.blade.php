<div>
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <br>
            <h3 class="text-center">My Products</h3>
            <hr>

            <a class="btn btn-dark" href="{{route('user.Shop')}}">Dashboard</a>
            <a class="btn btn-outline-dark" href="{{route('user.addProduct')}}">Add Product</a>
            <hr>
            <div class="col-5">
                <div class="input-group ">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" wire:model="search_value" />

                </div>
            </div>
            <br>

            <div class="container">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card card_border_market mb-3" style="width: 18rem;">
                            <img class="card-img-top card_img_market" src="{{asset('asset/image/product/')}}/{{$product->product_image}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->product_name}}</h5>
                                <p class="card-text text-success"><s>{{$product->product_regular_prize}}TK </s> {{$product->product_sale_prize}}TK</p>
                                <p class="card-text"></p>
                                <p class="card-text" style="font-size: 10pt">{{$product->product_description}}</p>
                                <a href="{{route('user.editProduct',['id'=>$product->id])}}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Remove</a>


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

        </div>
    </main>
</div>