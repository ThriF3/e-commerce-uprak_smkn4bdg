<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Keranjang') }}
        </h2>
        <!-- Button trigger modal -->
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <table class="table">
                            <thead>
                              <tr>
                                <th>No.</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Subtotal</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($carts as $cart)
                              <tr>
                                <td scope="row">{{ $loop->index }}.</td>
                                <td>{{ $cart->produk->nama_produk }}</td>
                                <td>{{ $cart->produk->harga_produk }}</td>
                                <td>{{ $cart->jumlah_beli }}</td>
                                <td>{{ $subtotal = $cart->produk->harga_produk*$cart->jumlah_beli }}</td>
                                <td>
                                  <form action="{{ url('dashboard/cart', $cart->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                  </form>
                                </td>
                              </tr>
                              @endforeach
                              <tr scope="row">
                                <td colspan="5">Jumlah</td>
                                <td>30.000</td>
                              </tr>
                            </tbody>
                          </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>