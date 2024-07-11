@extends('adminlte::page')

@section('title', 'Kriteria Management')

@section('content_header')
<h2> Show Product </h2>
<div class="pull-right">
    <a class="btn btn-secondary" href="{{ route('products.index') }}"> Back</a>
    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

    
    {{-- <form action="{{ route('myfavorites.store',$product->id) }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <button type="submit" class="btn btn-danger">Add to favorite</button>
        <a class="btn btn-danger" href="{{ route('myfavorites.store') }}"> Add to favorite</a>
    </form> --}}

</div>
@stop

@section('content')

<section class="content">
    <div class="card">
        <div class="card-body p-0">

{{-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
        </div>
    </div>
</div> --}}


<table class="table table-hover table-striped">
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>{{ $product->name }}</td>
    </tr><tr>
        <td><strong>Details</strong></td>
        <td><strong>{{ $product->detail }}</strong></td>
    </tr><tr>
        <td><strong>Lama Bekerja</strong></td>
        <td><strong>            {{ $product->harga }}</strong></td>
    </tr><tr>
        <td><strong>Management Resiko</strong> </td>
        <td><strong>            {{ $product->prosesor }} </strong></td>
    </tr>
    <tr>
        <td><strong>Solidaritas Team</strong></td>
        <td><strong>            {{ $product->kapasitas_ram }} </strong></td>
    </tr><tr>
        <td><strong>Pendidikan</strong></td>
        <td><strong>            {{ $product->kapasitas_hdd }} </strong></td>
    </tr><tr>
        <td><strong>Kemampuan Lain</strong></td>
        <td><strong>            {{ $product->kapasitas_ssd }} </strong></td>
    </tr><tr>
        <td><strong>Loyalitas</strong></td>
        <td><strong>            {{ $product->kapasitas_vram }} </strong></td>
    </tr>
    
</table>


        </div>
    </div>
</section>

@endsection
