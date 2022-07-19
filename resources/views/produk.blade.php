@extends('partials.beranda')
@section('body')
    <div class="container pt-5">
        <div class="col-lg">
            <div class="card mt-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <h5 class="card-title">PetsQu Shop</h5>
                            <p class="card-text">Menjual Berbagai Makanan Kucing</p>
                        </div>
                        <div class="col-lg-4 text-center">
                            <img src="/home/images/cat.png" class="card-img-top" alt="..."
                                style="width:100px;height:100px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- content -->
        <div class="row">
            @if ($produk->count())
                @foreach ($produk as $pd)
                    <div class="col-lg-4">
                        <div class="card mt-4">
                            <img src="{{ '/storage/produk/' . $pd->gambar }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <p class="card-text">{{ $pd->nama_barang }}</p>
                                <p class="card-text">Rp. {{ $pd->harga }},-</p>
                                <div class="d-grid gap-2">
                                    <a href="/produkDetail/{{ $pd->id }}" class="btn btn-primary">
                                        <i class="bi bi-cart"></i> Pilih
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h1 class="text-center mt-5">Belum ada produk</h1>
            @endif
        </div>
    </div>

    <!-- end content -->
@endsection
