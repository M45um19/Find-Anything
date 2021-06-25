<div>
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <br>
            <h3 class="text-center">Add Product</h3>
            <hr>

            <a class="btn btn-dark" href="{{route('user.Shop')}}">Dashboard</a>
            <hr>

            <div class="">
                <div class="row">
                    <div class="col-6">
                        <form wire:submit.prevent="addProduct" class="form-control">

                            <input type="text" value="{{ $this->u_id }}" wire:model="u_id" hidden>
                            <input type="text" value="{{ $this->s_id }}" wire:model="s_id" hidden>
                            <input type="text" value="{{ $this->m_name }}" wire:model="m_name" hidden>
                            <input type="text" value="{{ $this->m_des }}" wire:model="m_des" hidden>

                            <div class="mb-2 mt-2">
                                <label for="form-label">Product Category</label>
                                <select class="form-control" wire:model="p_catagory" required>
                                    <option value="">select</option>
                                    <option value="all type">All Type</option>
                                    <option value="mobile">Mobile</option>
                                    <option value="pc">PC</option>
                                    <option value="watch">Watch</option>
                                </select>
                            </div>


                            <div class="mb-2 mt-2">
                                <label class="form-label">Product Name</label>
                                <input type="text" class="form-control" wire:model="p_name" required>

                            </div>

                            <div class="mb-2">
                                <label class="form-label">Product Image</label>
                                <input type="file" class="form-control" wire:model="p_image" required>
                                @if($p_image)
                                <img src="{{$p_image->temporaryUrl()}}" alt="" width="100" height="100">
                                @endif
                            </div>

                            <div class="mb-2">
                                <label class="form-label">Sale Prize</label>
                                <input type="number" class="form-control" wire:model="p_sprize" required>

                            </div>

                            <div class="mb-2">
                                <label class="form-label">Regular Prize</label>
                                <input type="number" class="form-control" wire:model="p_rprize" required>

                            </div>

                            <div class="mb-2">
                                <label class="form-label">Availability</label>
                                <select class="form-control" wire:model="p_able" required>
                                    <option value="">select</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>

                            </div>

                            <div class="mb-2">
                                <label class="form-label">Product Description</label>
                                <textarea type="text" class="form-control" wire:model="p_des" required></textarea>

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