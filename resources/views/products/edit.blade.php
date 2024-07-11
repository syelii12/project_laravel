@extends('adminlte::page')

@section('title', 'Products Management')

@section('content_header')
<h2> Edit Kriteria </h2>

<style>
    {
        box-sizing: border-box;
    }
    /* Set additional styling options for the columns*/
    .column {
    float: left;
    width: 50%;
    }

    .row:after {
    content: "";
    display: table;
    clear: both;
    }
    
    input{
        text-align: center;
        }
</style>

<form id="productEditForm" action="{{ route('products.update',$product->id) }}" method="POST">
    @csrf
    @method('PUT')

<div class="pull-right">
    <a class="btn btn-secondary" href="{{ route('products.index') }}"> Back</a>
    <noscript>
        <input type="submit" value="Submit form!" />
    </noscript>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
@stop

@section('content')

<div class="content">
    <div class="container-fluid">
        @include('partials.alert')
        @yield('content')
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    {{-- <div class="card">
        <div class="card-body"> --}}

{{-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div> --}}





    {{-- <div class="row"> --}}
    <div class="row" style="overflow: auto; max-height: 80vh">
        <div class="column">
        <div class="col-xs-11 col-sm-11 col-md-11">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name" required>
            </div>
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11">
            <div class="form-group">
                <strong>Lama_Bekerja: </strong>
                <input type="number" name="Lama_Bekerja" value="{{ $product->Lama_Bekerja }}" class="form-control" placeholder="" min=0 max="200000000" required>
            </div>
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11">
            <div class="form-group">
                <strong>Management_Resiko: </strong> 
                <input type="number" name="Management_Resiko" value="{{ $product->Management_Resiko }}" class="form-control" placeholder="" min=0 step="0.1" max="200" required>
            </div>
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11">
            <div class="form-group">
                <strong>Solidaritas_Team:</strong>
                <input type="number" name="Solidaritas_Team" value="{{ $product->Solidaritas_Team }}" class="form-control" placeholder="" min="0.1" step="0.1" max="64" required>
            </div>
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11">
            <div class="form-group">
                <strong>Pendidikan:</strong>
                <input type="number" name="Pendidikan" value="{{ $product->Pendidikan }}" class="form-control" placeholder="" min="0" step="0.1" max="5000" required>
            </div>
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11">
            <div class="form-group">
                <strong>Kemampuan_Lain:</strong>
                <input type="number" name="Kemampuan_Lain" value="{{ $product->Kemampuan_Lain }}" class="form-control" placeholder="" min="0" step="0.1" max="5000" required>
            </div>
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11">
            <div class="form-group">
                <strong>Loyalitas:</strong>
                <input type="number" name="Loyalitas" value="{{ $product->Loyalitas }}" class="form-control" placeholder="" min="0.1" step="0.1" max="32" required>
            </div>
        </div>
        </div>

        <div class="column">
        <div class="col-xs-11 col-sm-11 col-md-11">
            <div class="form-group">
                <strong></strong>
                <input type="number" name="" value="{{ $product-> }}" class="form-control" placeholder="Kapasitas maksimal upgrade RAM (GB)" min="0.1" step="0.1" max="64" required>
            </div>
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11">
            <div class="form-group">
                <strong></strong>
                <input type="number" name="" value="{{ $product->berat }}" class="form-control" placeholder="" min=0 max="10000" required>
            </div>
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11">
            <div class="form-group">
                <strong></strong>
                <input type="number" name="" value="{{ $product->ukuran_layar }}" class="form-control" placeholder="" min=5 step="0.1" max="30" required>
            </div>
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11">
            <div class="form-group">
                {{-- <label for="inputStatus">Jenis layar</label> --}}
                <strong>:</strong>
                <select name="" value="{{ $product->jenis_layar }}" class="form-control custom-select" required>
                    @if ( $product)<option value="" disabled></option> <option value="1" selected></option><option value="3"></option><option value="5"></option> @endif
                    @if ( $product)<option value="" disabled></option> <option value="1" ></option><option value="3" selected></option><option value="5"></option> @endif
                    @if ( $product)<option value="" disabled></option> <option value="1" ></option><option value="3"></option><option value="5" selected></option> @endif
                </select>
            </div>
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11">
            <div class="form-group">
                <strong></strong>
                <input type="number" name="" value="{{ $product }}" class="form-control" placeholder="" min=0 max="1000" required>
            </div>
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11">
            <div class="form-group">
                <strong></strong> 
                <input type="number" name="resolusi_layar" value="{{ $product->resolusi_layar }}" class="form-control" placeholder="Jumlah pixel (pixel vertical x pixel horizontal)" min=0 max="80000000" list="resolution" required>
                <datalist id="resolution">
                    <option value="8294400"></option>
                    <option value="2073600"></option>
                    <option value="1049088"></option>
                    <option value="921600" ></option>
                </datalist>
            </div>
        </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong></strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
            </div>
        </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div> --}}
    </div>


</form>

        {{-- </div>
    </div> --}}
</section>

@endsection