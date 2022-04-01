<div class="container align-content-center mt-2">
                <div class="card" style="width:75rem;">
                    <div class="card-body">
                        <h5 class="card-title">Atur jumlah dan Catatan</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">Stok 120</h6>
                        <form action="/dashboard" method="post">
                            @csrf
                            <div class="mb-3">
                                <input type="number" name="jumlah_beli" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                <small id="helpId" class="text-muted">Jumlah produk dibeli</small>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="produk_id" value="{{ $produk->id }}" class="btn btn-outline-success">Masukan dalam Keranjang</button>
                        </form>
                        <a href="" class="btn btn-success">Beli</a>
                    </div>
                </div>
            </div>