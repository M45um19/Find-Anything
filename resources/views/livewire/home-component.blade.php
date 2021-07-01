<div>

    <section class="slider_section">
        <div class="slider_container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="detail-box">
                                        <h1>
                                            Welcome To Our <br>
                                            Gift Naim
                                        </h1>
                                        <p>
                                            Sequi perspiciatis nulla reiciendis, rem, tenetur impedit, eveniet non
                                            necessitatibus error distinctio mollitia suscipit. Nostrum fugit
                                            doloribus consequatur distinctio esse, possimus maiores aliquid repellat
                                            beatae cum, perspiciatis enim, accusantium perferendis.
                                        </p>
                                        <a href="">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-5 ">
                                    <div class="img-box">
                                        <img src="{{asset('asset/image/images/p6.png')}}" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="detail-box">
                                        <h1>
                                            Welcome To Our <br>
                                            Gift Shop
                                        </h1>
                                        <p>
                                            Sequi perspiciatis nulla reiciendis, rem, tenetur impedit, eveniet non
                                            necessitatibus error distinctio mollitia suscipit. Nostrum fugit
                                            doloribus consequatur distinctio esse, possimus maiores aliquid repellat
                                            beatae cum, perspiciatis enim, accusantium perferendis.
                                        </p>
                                        <a href="">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-5 ">
                                    <div class="img-box">
                                        <img src="{{asset('asset/image/images/p5.png')}}" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn-box">
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <img src="{{asset('asset/image/line.png')}}" alt="" />
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end slider section -->

    <!-- end hero area -->

    <!-- shop section -->

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    All Products
                </h2>
            </div>
            <div class="Search_home">
                <form>

                    <div class="wrapper">
                        <p>Search Bar</p>
                        <div class="search-container">

                            <input type="text" class="date-from" placeholder="Product Name" wire:model="search_product_name">
                            <input type="text" class="date-from" placeholder="Product Place" wire:model="search_product_place">


                            <button type="submit" class="button">Search</button>
                        </div>
                    </div>


                </form>


            </div>
            <br>
            <br>
            <div class="row ">

                @foreach($products as $product) <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-stretch">
                    <div class="card mb-3" style="width: 18rem;">
                        <?php
                        $imgInfo = getimagesize('asset/image/product/' . $product->product_image);
                        $w = $imgInfo[0];
                        $h = $imgInfo[1];
                        if ($h > $w) {
                            $r = $h / $w;
                            $nh = 200 + 30; // 30+ to cover lurma padding -_-
                            $nw = round(200 / $r) + 30;
                        } else {
                            $r = $w / $h;
                            $nw = 200 + 30;
                            $nh = round(200 / $r) + 30;
                        }
                        //echo "<h2 class='text-center'>h:{{$nh}}, w: {{$nw}}</h2>";
                        ?>

                        <div class="text-center">
                            <img class="card-img card_img_producr" src="{{asset('asset/image/product/')}}/{{$product->product_image}}" style="width: {{$nw}}px; height: {{$nh}}px" alt="product">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$product->product_name}}</h5>
                            @if($product->product_availability == 'Not Available')
                            <p class="">Availablity: <Availablity: class="text-warning">{{$product->product_availability}}</Availablity:>
                            </p>
                            @elseif($product->product_availability == 'Available')

                            <p class="">Availablity: <Availablity: class="text-success">{{$product->product_availability}}</Availablity:>
                            </p>
                            @endif
                            <p class="">Market Name: {{$product->market_name}} </p>

                            <p class="">Sale Price: <span class="text-success">{{$product->product_sale_prize}}TK</span></p>

                            <div class="d-block">
                                <a href="{{route('details',['product_id'=>$product->id])}}" class="btn btn_details">Details</a>

                            </div>


                        </div>
                    </div>
                </div>
                @endforeach



            </div>

            <div class="wrap-pagination-info">
                {{$products->links()}}
            </div>
        </div>

    </section>

</div>