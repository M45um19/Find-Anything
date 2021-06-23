<div>
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <br>
            <h3>Add Market</h3>
            <br>


            <a class="btn btn-dark" href="{{route('admin.market')}}">See All Market</a>

            <div class="">
                <div class="row">
                    <div class="col-6">
                        <br>
                        <form wire:submit.prevent="addMarket">
                            <div class="mb-3">
                                <label class="form-label">Market Name</label>
                                <input type="text" class="form-control" wire:model="market_name" required>

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Martket Address</label>
                                <input type="text" class="form-control" wire:model="market_address" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Shop Image</label>
                                <input type="file" class="form-control" wire:model="market_image" required>
                                @if($market_image)
                                <img src="{{$market_image->temporaryUrl()}}" alt="" width="100" height="100">
                                @endif
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                    <div class="col">

                    </div>
                </div>
            </div>
        </div>
    </main>

</div>