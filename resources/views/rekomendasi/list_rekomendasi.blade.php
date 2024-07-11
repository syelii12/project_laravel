@extends('adminlte::page')

@section('title', 'Hasil Rekomendasi Karyawan')

@section('content_header')

{{-- <h2> Hasil Rekomendasi Karyawan </h2> --}}
@stop

@section('content')

<h3> Berikut hasil rekomendasi Karyawan berdasarkan bobot kriteria dan nilai preferensi yang Anda masukkan</h3>

<div class="content">
    <div class="container-fluid">
        @include('partials.alert')
        @yield('content')
    </div><!-- /.container-fluid -->
</div>

{{-- card --}}
<div class="row">

    <div class="col-md-5">

        <div class="card card-dark">
            <div class="card-header">
              <h3 class="card-title">Input Bobot Antar Kriteria</h3>
    
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table table-hover table-borderless table-striped">

                <tbody>
    
                  <tr>
                    <td class="goCenter custColor">C1</td>
                    <td><strong> Lama Bekerja</strong></td>
                    <td class="goCenter"> <strong> {{ number_format($bobotKriteriaDanPreferensiKriteria->bobot_harga * 100 ,0,",",".") . ' %' }} </strong> </td>
                  </tr><tr>
                    <td class="goCenter custColor">C2</td>
                    <td><strong> Management Resiko </strong></td>
                    <td class="goCenter"> <strong> {{ number_format($bobotKriteriaDanPreferensiKriteria->bobot_prosesor * 100 ,0,",",".") . ' %' }} </strong> </td>
                  </tr><tr>
                    <td class="goCenter custColor">C3</td>
                    <td><strong> Solidaritas Team </strong></td>
                    <td class="goCenter"> <strong> {{ number_format($bobotKriteriaDanPreferensiKriteria->bobot_kapasitas_ram * 100 ,0,",",".") . ' %' }} </strong> </td>
                  </tr><tr>
                    <td class="goCenter custColor">C4</td>
                    <td><strong> Pendidikan</strong></td>
                    <td class="goCenter"> <strong> {{ number_format($bobotKriteriaDanPreferensiKriteria->bobot_kapasitas_hdd * 100 ,0,",",".") . ' %' }} </strong> </td>
                  </tr><tr>
                    <td class="goCenter custColor">C5</td>
                    <td><strong> Kemampuan Lain</strong></td>
                    <td class="goCenter"> <strong> {{ number_format($bobotKriteriaDanPreferensiKriteria->bobot_kapasitas_ssd * 100 ,0,",",".") . ' %' }} </strong> </td>
                  </tr><tr>
                    <td class="goCenter custColor">C6</td>
                    <td><strong> Loyalitas</strong></td>
                    <td class="goCenter"> <strong> {{ number_format($bobotKriteriaDanPreferensiKriteria->bobot_kapasitas_vram * 100 ,0,",",".") . ' %' }} </strong> </td>
                  </tr>
                  

                
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
        </div>
      <!-- /.card -->
    </div>

    {{-- <div class="col-md-1">

    </div> --}}
    @php
      $kriteria = $bobotKriteriaDanPreferensiKriteria;
      function isNumber($str)
      {
        if ($str == trim($str) && strpos($str, ' ') !== false) {
            // echo 'has spaces, but not at beginning or end';
            return false;
        } else { return true;}
      }
      function isKriteriaDiabaikan($str)
      {
        if ($str === 'Kriteria Diabaikan') {return true;} else { return false; }
      }
      function isDiabaikan($str)
      {
        if ($str === 'Kriteria Diabaikan') {$str = '-'; return $str;} else { return $str;}
      }
    @endphp

    <div class="col-md-7">

        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">Input Preferensi Kriteria Produk</h3>
      
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
    
                <table class="table table-hover table-striped table-borderless">
                    <tr>
                        <td><strong>Lama Bekerja</strong></td>
                        <td><strong> @if(isNumber($kriteria->pref_harga)){{ number_format($kriteria->pref_harga,0,",",".")  }} @else {{ isDiabaikan($kriteria->pref_harga) }} @endif </strong></td>
                    </tr><tr>
                        <td><strong> Management Resiko</strong> </td>
                        <td><strong>            {{ isDiabaikan($kriteria->pref_prosesor) }} @if(!(isKriteriaDiabaikan($kriteria->pref_prosesor))) @endif </strong></td>
                    </tr><tr>
                        <td><strong>Solidaritas Team</strong></td>
                        <td><strong>            {{ isDiabaikan($kriteria->pref_kapasitas_ram) }} @if(!(isKriteriaDiabaikan($kriteria->pref_kapasitas_ram))) @endif </strong></td>
                    </tr><tr>
                        <td><strong>Pendidikan</strong></td>
                        <td><strong>            {{ isDiabaikan($kriteria->pref_kapasitas_hdd) }} @if(!(isKriteriaDiabaikan($kriteria->pref_kapasitas_hdd))) @endif </strong></td>
                    </tr><tr>
                        <td><strong>Kemampuan Lain</strong></td>
                        <td><strong>            {{ isDiabaikan($kriteria->pref_kapasitas_ssd) }} @if(!(isKriteriaDiabaikan($kriteria->pref_kapasitas_ssd))) @endif </strong></td>
                    </tr><tr>
                        <td><strong>Loyalitas</strong></td>
                        <td><strong>            {{ isDiabaikan($kriteria->pref_kapasitas_vram) }} @if(!(isKriteriaDiabaikan($kriteria->pref_kapasitas_vram))) @endif </strong></td>
                    </tr>
                    {{-- <tr>
                        <td width='50%'><strong>Kapasitas maksimal upgrade RAM (GB)</strong></td>
                        <td><strong>            {{ isDiabaikan($kriteria->pref_kapasitas_maxram) }} @if(!(isKriteriaDiabaikan($kriteria->pref_kapasitas_maxram)))GB @endif </strong></td>
                    </tr><tr>
                        <td><strong>Berat (Gram)</strong></td>
                        <td><strong>            {{ isDiabaikan($kriteria->pref_berat) }} @if(!(isKriteriaDiabaikan($kriteria->pref_berat)))gram @endif </strong></td>
                    </tr><tr>
                        <td><strong>Ukuran layar</strong></td>
                        <td><strong>            {{ isDiabaikan($kriteria->pref_ukuran_layar) }} @if(!(isKriteriaDiabaikan($kriteria->pref_ukuran_layar)))Inci @endif </strong></td>
                    </tr><tr>
                        <td><strong>Jenis layar</strong></td>
                        <td><strong>
                            @if (!(isNumber($kriteria->pref_jenis_layar))) {{isDiabaikan($kriteria->pref_jenis_layar)}}  @endif
                            @if ( $kriteria->pref_jenis_layar  == 1)Twisted Nematic (TN)@endif
                            @if ( $kriteria->pref_jenis_layar  == 3)In-Plane Switching (IPS) @endif
                            @if ( $kriteria->pref_jenis_layar  == 5)Organic Light-emitting Diode (OLED) @endif
                            </strong>
                        </td>
                    </tr><tr>
                        <td><strong></strong></td>
                        <td><strong>            {{ isDiabaikan($kriteria->) }} @if(!(isKriteriaDiabaikan($kriteria->))) @endif </strong></td>
                    </tr><tr>
                        <td><strong></strong></td>
                        <td><strong>            {{ isDiabaikan($kriteria->) }} @if(!(isKriteriaDiabaikan($kriteria->))) @endif </strong></td>
                    </tr> --}}
                </table>

    
            </div>
        </div>



    </div>


</div>



<section class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Hasil Rekomendasi Karyawan</h3>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body p-0">
            
<table class="table table- table-hover">
    <tr>
        <th style="text-align: center">Peringkat</th>
        <th>Nama Karyawan</th>
        <th>Karyawan yang di Rekomendasi</th>
        <th>Nilai</th>
        <th>Deskripsi</th>
        <th width='320px'>Action</th>
    </tr>
    @foreach ($products as $key => $product)
    <tr>
        <td style="text-align: center"> <strong> @if ($key===0) <i class="fas fa-fw fa-crown"></i>@else {{ $key+1 }} @endif   </strong></td>
        <td><i class="fas fa-fw fa-Kriteria"></i> <strong> {{ $product->name }} </strong></td>
        <td><strong>{{ $product->n_bobot }} </strong></td>
        <td>Rp{{ number_format($product->,0,",",".") }}</td>
        <td>{{ $product->detail }}</td>
        <td>
            {{-- <a class="btn btn-info" href="{{ route('search.show',$product->id) }}">Show</a> --}}

            @if ( !($product->fav_product_id) )

                <form action="{{ route('myfavorites.store',$product->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('rekomendasi.hasil.product.detail',$product->id) }}"> Detail</a>

                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    @csrf
                    <button type="submit" class="btn btn-link"> <i class="fas fa-star"></i> Add to favorite</button>
                    {{-- <a class="btn btn-danger" href="{{ route('myfavorites.store') }}"> Add to favorite</a> --}}
                </form>
            @else
                <form action="{{ route('myfavorites.destroy',$product->id) }}" method="POST">
                    
                    <a class="btn btn-info" href="{{ route('search.show',$product->id) }}">Detail</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link "> <i class="far fa-star"></i> Remove from favorite</button>

                </form>  
            @endif

        </td>
    </tr>
    @endforeach
</table>


{{-- {!! $products->links() !!} --}}
{{-- @include('pagination.index', ['paginator' => $products]) --}}

        </div>
    </div>
</section>



@endsection
