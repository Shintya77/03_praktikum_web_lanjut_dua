@extends('layouts.master')

@section('content')
<div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2>Halaman Product 1</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="products">
      <div class="container">
        <div class="row">
         <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">All Products</li>
                  <li data-filter=".des">Featured</li>
                  <li data-filter=".dev">Flash Deals</li>
                  <li data-filter=".gra">Last Minute</li>
              </ul>
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
              <td><img src="prak2/assets/images/{{ $s->Gambar }}"></td>
              <td>{{ $s->content }}</td>
              <td>{{ $s->Harga }}</td>
			        </tr>
            @endforeach
		        </tbody>
	        </table>
        </div>
      </div>
    </div>
    </div>
    @endsection