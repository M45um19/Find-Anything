<div>
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <br>
            <h3>All Market</h3>
            <br>
            <a class="btn btn-success" href="{{route('admin.addMarket')}}">Add Market</a>
            <br>
            <br>

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead class="admin_table">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Market Name</th>
                            <th scope="col">Market Address</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($markets as $market)
                        <tr>
                            <th scope="row">{{$market->id}}</th>
                            <td>{{$market->market_name}}</td>
                            <td>{{$market->market_address}}</td>
                            <td>
                                <a class="btn btn-secondary" href="{{route('admin.editMarket',['id'=>$market->id])}}">Edit</a>
                                <a class="btn btn-danger delete_anything" wire:click.prevent="deleteMarket({{$market->id}})">Delete</a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </main>
</div>