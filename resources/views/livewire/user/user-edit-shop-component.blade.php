<div>
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <br>
            <h3 class="text-center">Edit Your Shop Details</h3>
            <hr>

            <a class="btn btn-dark" href="{{route('user.Shop')}}">Dashboard</a>

            <div class="">
                <div class="row">
                    <div class="col-6">
                        <br>
                        <form wire:submit.prevent="edtShopDetails" class="form-control">


                            <div class="mb-2 mt-2">
                                <label class="form-label">Shop Name</label>
                                <input type="text" class="form-control" wire:model="s_name" required>

                            </div>

                            <div class="mb-2">
                                <label class="form-label">Shop Address</label>
                                <input type="text" class="form-control" wire:model="s_add" required>

                            </div>

                            <div class="mb-2">
                                <label class="form-label">Shop Image</label>
                                <input type="file" class="form-control" wire:model="new_image">
                                @if($new_image)
                                <img src="{{$new_image->temporaryUrl()}}" alt="" width="100" height="100">
                                @else
                                <img src="{{asset('asset/image/shop')}}/{{$shop_image}}" alt="" width="100" height="100">
                                @endif
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" wire:model="m_number" required>

                            </div>

                            <div class="mb-2">
                                <label class="form-label">Shop Description</label>
                                <textarea type="text" class="form-control" wire:model="s_des" required></textarea>

                            </div>

                            <button type="submit" class="btn btn-success mb-3">Submit</button>
                        </form>
                    </div>
                    <div class="col">

                    </div>
                </div>
            </div>
        </div>
    </main>

</div>