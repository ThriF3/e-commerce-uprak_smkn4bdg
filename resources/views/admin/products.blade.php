<div class="container mt-2 border rounded">
    <div class="card-header">
        <h4 class="display-7">Products</h4>
    </div>
    <div class="container d-flex justify-content-around flex-wrap">
        <!-- <div class="card d-inline-flex flex-wrap m-2 shadow-md">
            <img src="{{ asset('img/img-example1.png') }}" class="card-img-top" alt="..." style="width: 250; height: 250px">
            <div class="card-body">
                <h5 class="card-title"><a href="dashboard/detail">Nama Produk</a></h5>
            </div>
            <div class="card-footer d-flex flex-wrap justify-content-between position-static">
                <p class="card-text"><small class="text-secondary">Rp. </small>10.000</p>
                <p class="card-text"><small class="text-secondary">Stok </small>120</p>
            </div>
        </div> -->
        @foreach($produks as $produk)
        <div class="card d-inline-flex flex-wrap m-2 shadow-md">
            <img src="{{ asset($produk->img_produk) }}" class="card-img-top" alt="..." style="width: 250; height: 250px">
            <div class="card-body">
                <h5 class="card-title"><a href="dashboard/detail/{{ $produk->id }}">{{ $produk->nama_produk }}</a></h5>
            </div>
            <div class="card-footer d-flex flex-wrap justify-content-between position-static">
                <p class="card-text"><small class="text-secondary">Rp. </small>{{ $produk->harga_produk }}</p>
                <p class="card-text"><small class="text-secondary">Stok </small>{{ $produk->stok_produk }}</p>
            </div>
            <div class="position-absolute">
                <form action="{{ url('admin/dashboard', $produk->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger my-2 mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
