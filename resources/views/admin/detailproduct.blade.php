<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Detail Produk') }}
        </h2>
        <!-- Button trigger modal -->
        <a href="" class="btn btn-primary">Tambah Data</a>
        <?php $urlEdit = "admin/dashboard/".$produk->id."/tambahdata";
        $urlDelete = "admin/dashboard/".$produk->id?>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="d-flex flex-wrap justify-content-between">

                <!-- Detail Product -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <img src="{{ asset($produk->img_produk) }}" class="card-img-top" alt="..." style="width: 500px; height: 500px">
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex-fill">
                    <div class="d-flex flex-wrap justify-content-between bg-white border-b border-gray-200">
                        <div class="p-3">
                            {{ $produk->id }}
                        </div>
                        <div class="d-flex">
                            <a href="{{ url($urlEdit) }}" class="btn btn-warning my-2 mr-2">Edit</a>
                            <a href="{{ url('admin/dashboard') }}" class="btn btn-secondary my-2 mr-2">Kembali</a>
                        </div>
                    </div>
                    <div class="container mt-2 mx-2">
                        <h2><b>{{ $produk->nama_produk }}</b></h2>
                    </div>
                    <div class="container mx-3"><h5>Rp. {{ $produk->harga_produk }}</h2></div>
                    <div class="card mx-2" style="width: 660px; height: auto;">
                        <div class="card-title my-2 ml-3 border-bottom">
                            <h4><b>Deskripsi</b></h4>
                        </div>
                        <div class="card-body">
                        {{ $produk->deskripsi_produk }}
                        </div>
                    </div>
                </div>
                <!-- End Detail Product -->
            </div>
            <!-- Bagian Transaksi -->
            <div class="container align-content-center mt-2">
                <div class="card" style="width:75rem;">
                    <div class="card-body">
                        <h5 class="card-title">Atur jumlah dan Catatan</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">Stok 120</h6>
                        <div class="mb-3">
                            <input type="number" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Jumlah produk dibeli</small>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="" class="btn btn-success">Beli</a>
                        <a href="" class="btn btn-outline-success">Masukan dalam Keranjang</a>
                    </div>
                </div>
            </div>
            <!-- End Transaksi -->
        </div>
    </div>
</x-app-layout>
