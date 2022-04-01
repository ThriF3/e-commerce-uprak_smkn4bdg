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
        </div>
        @endforeach
    </div>
</div>
