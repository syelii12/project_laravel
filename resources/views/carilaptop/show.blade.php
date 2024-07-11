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
            <a class="btn btn-secondary" href="{{ url()->previous()  }}"> Back</a>
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

<div class="row">
    <table class="table table-hover table-striped">
        <tr>
            <td><strong>Product Name</strong></td>
            <td>{{ $product->name }}</td>
        </tr><tr>
            <td><strong>Details</strong></td>
            <td>{{ $product->detail }}</td>
        </tr><tr>
            <td><strong>Lama_Bekerja</strong></td>
            <td>            Rp{{ $product->Lama_Bekerja }}</td>
        </tr><tr>
            <td><strong>Management_Resiko</strong> </td>
            <td>            {{ $product->Management_Resiko }} </td>
        </tr><tr>
            <td><strong>Solidaritas_Team</strong></td>
            <td>            {{ $product->Solidaritas_Team }} </td>
        </tr><tr>
            <td><strong>Pendidikan</strong></td>
            <td>            {{ $product->Pendidikan }} </td>
        </tr><tr>
            <td><strong>Kemampuan_Lain</strong></td>
            <td>            {{ $product->Kemampuan_Lain }} </td>
        </tr><tr>
            <td><strong>Loyalitas</strong></td>
            <td>            {{ $product->Loyalitas }} </td>
        </tr><tr>
            <td width='30%'><strong></strong></td>
            <td>            {{ $product }} </td>
        </tr><tr>
            <td><strong></strong></td>
            <td>            {{ $product-> }} </td>
        </tr><tr>
            <td><strong></strong></td>
            <td>            {{ $product }} </td>
        </tr><tr>
            <td><strong>Je</strong></td>
            <td>@if ( $product)@endif
                @if ( $product)@endif
                @if ( $product)@endif</td>
        </tr><tr>
            <td><strong></strong></td>
            <td>            {{ $product }} </td>
        </tr><tr>
            <td><strong></strong></td>
            <td>            {{ $product }} </td>
        </tr>
    </table>
</div>

        </div>
    </div>
</section>

@endsection
