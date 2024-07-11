@extends('adminlte::page')

@section('title', 'Kriteria Detail')

@section('content_header')
<h2> Show Kriteria </h2>
<div class="pull-right">

    @if ( !($is_favorite) )
        <form action="{{ route('myfavorites.store',$product->id) }}" method="POST">

            {{-- <a class="btn btn-secondary" href="{{ route('search.index') }}"> Back</a> --}}
            <a class="btn btn-secondary" href="{{ url()->previous()  }}"> Back</a>

            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            @csrf
            <button type="submit" class="btn btn-success"> <i class="fas fa-star"></i> Add to favorite</button>
            {{-- <a class="btn btn-danger" href="{{ route('myfavorites.store') }}"> Add to favorite</a> --}}
        </form>
    @else
        <form action="{{ route('myfavorites.destroy',$product->id) }}" method="POST">
            {{-- <a class="btn btn-secondary" href="{{ route('search.index') }}"> Back</a> --}}
            <a class="btn btn-secondary" href="{{ rekomendasi.hasil.index  }}"> Back</a>
            @csrf 
            @method('DELETE')
            <button type="submit" class="btn btn-danger"> <i class="far fa-star"></i> Remove from favorite</button>

        </form>  
    @endif

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
    <div class="card">
        <div class="card-body p-0">

{{-- <div class="row"> --}}
    <table class="table table-hover table-striped">
        <tr>
            <td><strong>Criteria Name</strong></td>
            <td><strong>{{ $product->name }}</strong></td>
        </tr><tr>
            <td><strong>Details</strong></td>
            <td><strong>{{ $product->detail }}</strong></td>
        </tr><tr>
            <td><strong>Lama Bekerja</strong></td>
            <td><strong>            Rp{{ $product->Lama Bekerja }}</strong></td>
        </tr><tr>
            <td><strong></strong> </td>
            <td><strong>            {{ $product }} GHz</td>
        </tr><tr>
            <td><strong>Management Resiko</strong></td>
            <td><strong>            {{ $product->Management_Resiko }} </strong></td>
        </tr><tr>
            <td><strong>Solidaritas Team</strong></td>
            <td><strong>            {{ $product->Solidaritas_Team }} GB</strong></td>
        </tr><tr>
            <td><strong>Pendidikan</strong></td>
            <td><strong>            {{ $product->Pendidikan }} </strong></td>
        </tr><tr>
            <td><strong>Kemampuan Lain</strong></td>
            <td><strong>            {{ $product->kemampuan_Lain }} </strong></td>
        </tr><tr>
            <td width='30%'><strong>Loyalitas</strong></td>
            <td><strong>            {{ $product->Loyalitas }} </strong></td>
        </tr><tr>
            <td><strong></strong></td>
            <td><strong>            {{ $product }} </strong></td>
        </tr><tr>
            <td><strong></strong></td>
            <td><strong>            {{ $product-> }} </strong></td>
        </tr><tr>
            <td><strong></strong></td>
            <td><strong>@if ( $product)@endif
                @if ( $product) @endif
                @if ( $product) @endif</strong></td>
        </tr><tr>
            <td><strong></strong></td>
            <td><strong>            {{ $product }} </strong></td>
        </tr><tr>
            <td><strong> ()</strong></td>
            <td><strong>            {{ $product }} </strong></td>
        </tr>
    </table>
{{-- </div> --}}

        </div>
    </div>
</section>

@endsection
