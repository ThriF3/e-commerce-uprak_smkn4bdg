<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Produk') }}
        </h2>
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
                        <a href="{{ url('admin/dashboard') }}" class="btn btn-secondary my-2 mr-2">Kembali</a>
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
            @include('addtocart')
            <!-- End Transaksi -->
        </div>
    </div>
</x-app-layout>
