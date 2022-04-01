<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __((empty(@$produk->id) ? 'Tambah Data Produk' : 'Edit Data Produk')) }}
        </h2>
        <!-- Button trigger modal -->
        <a href="" class="btn btn-primary">Tambah Data</a>
        <?php 
        $urlUpdate = "admin/dashboard/".@$produk->id;
        ?>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ empty(@$produk->id) ? url('admin/dashboard') : url($urlUpdate) }}" method="post" class="row g-3" enctype="multipart/form-data">
                        @csrf
                        @if(!empty(@$produk_id))
                        @method('PUT')
                        @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-8">
                                    <label for="" class="form-label">Nama Produk</label>
                                </div>
                                <div class="col-2">
                                    <label for="" class="form-label">Harga Produk</label>
                                </div>
                                <div class="col-2">
                                    <label for="" class="form-label">Stok Produk</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <input type="text" name="nama_produk" id="" class="form-control" placeholder="Nama Produk" aria-describedby="helpId" value="{{ (empty(@$produk->id) ? '' : $produk->nama_produk) }}">
                                </div>
                                <div class="col-2">
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text">Rp. </div>
                                        </div>
                                        <input name="harga_produk" type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Harga" value="{{ (empty(@$produk->id) ? '' : $produk->harga_produk) }}">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <input type="number" class="form-control" name="stok_produk" id="" aria-describedby="helpId" placeholder="Stok" value="{{ (empty(@$produk->id) ? '' : $produk->stok_produk) }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                          <label for="" class="form-label">Deskripsi Produk</label>
                          <textarea class="form-control" name="deskripsi_produk" id="" rows="3" aria-valuetext=>{{ (empty(@$produk->id) ? '' : @$produk->deskripsi_produk) }}</textarea>
                        </div>
                        <div class="mb-3">
                          <label for="" class="form-label">Gambar Produk</label>
                          <input type="file" class="form-control" name="img_produk" id="" placeholder="" aria-describedby="fileHelpId" src="{{ asset(@$produk->img_produk) }}">
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <div class="col-1">
                                <a href="/admin/dashboard" class="btn btn-outline-danger">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
