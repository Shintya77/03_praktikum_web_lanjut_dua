@extends('layouts.master')
@section('content')
<div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h2>Halaman Home</h2>
          </div>
        </div>
      </div>
</div>

<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <table class="table table-bordered">
		        <thead>
			        <tr>
              <th>id</th>
				      <th>Produk</th>
				      <th>Gambar</th>
				      <th>Deskripsi</th>	
              <th>harga</th>		
			        </tr>
		        </thead>
		        <tbody>
            @foreach($isi as $s)
			        <tr>
				      <td>{{ $s->id }}</td>
              <td>{{ $s->Produk }}</td>
              <td><img src="{{asset('prak2/assets/images/'.$s->Gambar)}}"></td>
              <td>{{ $s->content }}</td>
              <td>{{ $s->Harga }}</td>
			        </tr>
            @endforeach
		        </tbody>
	        </table>
        </div>
    </div>
</div>
@endsection
