<div>
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <br>
            <h3 class="text-center">Add Your Shop Details</h3>
            <hr>

            <a class="btn btn-dark" href="{{route('user.Shop')}}">Deshboard</a>

            <div class="">
                <div class="row">
                    <div class="col-6">
                        <br>
                        <form wire:submit.prevent="addShopDetails" class="form-control">

                            <label for="">
                                <h5>You Select <b>{{ $this->m_name }}</b> market</h5>
                                <a href="{{route('user.marketSelect')}}" class="btn btn-outline-dark">Change</a>
                            </label>
                            <input type="text" value="{{ $this->m_id }}" wire:model="m_id" hidden>
                            <input type="text" value="{{ $this->m_name }}" wire:model="m_name" hidden>
                            <input type="text" value="{{ $this->m_add }}" wire:model="m_add" hidden>

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
                                <input type="file" class="form-control" wire:model="s_image">

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