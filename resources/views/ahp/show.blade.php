{{-- {{$ahp}}
<br><br>
{{$bobot}}
<br><br>
{{$PB_obj}} --}}

@extends('adminlte::page')

@section('title', 'AHP Management')

@section('content_header')
<h2> AHP Calculation Detail</h2>

<form id="productCreateForm" action="{{ route('ahp.store') }}" method="POST">
    @csrf
    
<div class="pull-right">
    <a class="btn btn-secondary" href="{{ route('ahp.index') }}"> Back</a>
    <noscript>
        <input type="submit" value="Submit form!" />
    </noscript>

    <a class="btn btn-primary" href="{{ route('ahp.edit', $ahp->id_perhitungan) }}">Edit</a>
    
</div>
@stop

@section('content')

<style>
    * {
        box-sizing: border-box;
    }

    th {
    position: relative;
    top: 0;
    background: #6c7ae0;
    text-align: Center;
    font-weight: normal;
    font-size: 1.1rem;
    color: white;
    }

    /* td 
    {
        height: 5px; 
        width: 5px;
    } */

    input{
        text-align: center;
    }

    .custColor{
        top: 0;
        background: #6c7ae0;
        text-align: Center;
        font-weight: normal;
        font-size: 1.1rem;
        color: white;
    }

    .cssTableCenter td
    {
        text-align: center; 
        vertical-align: middle;
    }

    .goCenter
    {
        text-align: center; 
        vertical-align: middle;
    }

    .column {
        float: left;
        width: 50%;
        }

</style>

{{-- <p>Hello {{ auth()->user()->name }}, here you can preview your AHP weighting</p> --}}

<div class="content">
    <div class="container-fluid">
        @include('partials.alert')
        @yield('content')
    </div><!-- /.container-fluid -->
</div>




{{-- card --}}
<div class="row">

    <div class="col-md-4">

        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Bobot Kriteria</h3>
    
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table table-hover table-borderless table-striped">
                <thead>
                  <tr>
                    <th class="goCenter">No</th>
                    <th class="goCenter" style="text-align: left">Kriteria</th>
                    <th class="goCenter">Bobot</th>
                    {{-- <th></th> --}}
                  </tr>
                </thead>
                <tbody>
    
                  <tr>
                    <td class="goCenter custColor">C1</td>
                    <td><strong> Lama Bekerja </strong></td>
                    <td class="goCenter"> <strong> {{ number_format($bobot->c1 * 100 ,0,",",".") . ' %' }} </strong> </td>
                  </tr><tr>
                    <td class="goCenter custColor">C2</td>
                    <td><strong> Management Resiko </strong></td>
                    <td class="goCenter"> <strong> {{ number_format($bobot->c2 * 100 ,0,",",".") . ' %' }} </strong> </td>
                  </tr><tr>
                    <td class="goCenter custColor">C3</td>
                    <td><strong> Solidaritas Team </strong></td>
                    <td class="goCenter"> <strong> {{ number_format($bobot->c3 * 100 ,0,",",".") . ' %' }} </strong> </td>
                  </tr><tr>
                    <td class="goCenter custColor">C4</td>
                    <td><strong> Pendidikan </strong></td>
                    <td class="goCenter"> <strong> {{ number_format($bobot->c4 * 100 ,0,",",".") . ' %' }} </strong> </td>
                  </tr><tr>
                    <td class="goCenter custColor">C5</td>
                    <td><strong> Kemampuan Lain(Skill-leader) </strong></td>
                    <td class="goCenter"> <strong> {{ number_format($bobot->c5 * 100 ,0,",",".") . ' %' }} </strong> </td>
                  </tr><tr>
                    <td class="goCenter custColor">C6</td>
                    <td><strong> Loyalitas </strong></td>
                    <td class="goCenter"> <strong> {{ number_format($bobot->c6 * 100 ,0,",",".") . ' %' }} </strong> </td>
                  </tr><tr>
                    
                  </tr>
                  

                
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
        </div>
      <!-- /.card -->
    </div>

    <div class="col-md-8">

        <div>
        <div class="card card-primary">

            <div class="card-header">
              <h3 class="card-title" >Detail Perhitungan</h3>
    
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>

            <div class="card-body p-0">

                <table class="table table-hover table-">
                    <thead>
                      <tr>
                        {{-- <th class="goCenter">Intensitas kepentingan</th>
                        <th class="goCenter">Definisi</th> --}}
                        {{-- <th></th> --}}
                      </tr>
                    </thead>
                    <tbody>
        
                      <tr>
                        <td class=""> <strong> Nama Perhitungan </strong></td>
                        <td style="width: 70%"> {{ $ahp->nama_perhitungan }} </td>
                      </tr><tr>
                        <td class=""> <strong> Detail </strong></td>
                        <td> {{ $ahp->detail }} </td>
                      </tr><tr>
                        <td class=""> <strong> Lamda Max </strong> </td>
                        <td> {{ $bobot->lamda_max }} </td>
                      </tr><tr>
                        <td class=""> <strong> Consistency Index (CI)</strong> </td>
                        <td> {{ $bobot->consistency_index }} </td>
                      </tr><tr>
                        <td class=""> <strong> Consistency Ratio (CR) </strong> </td>
                        <td> {{ $bobot->consistency_ratio }} </td>
                      </tr>
                      </tr><tr>
                        <td class=""> <strong> Consistency </strong> </td>
                        @if ( $ahp->is_konsisten ) <td> <label class="badge badge-pill badge-success"> Perhitungan sudah konsisten (CR < 0.1) </label> </td>
                        @else     <td> <label class="badge badge-danger"> Perhitungan belum konsisten (CR >= 0.1) </label> </td>
                        @endif
                      </tr>
      
                    </tbody>
                  </table>
        
        
        
        
            </div>
        </div>
        

        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Tabel Acuan Skala Perbandingan Kriteria</h3>
    
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table table-hover table-stripe table-borderles">
                <thead>
                  <tr>
                    <th class="goCenter">Intensitas kepentingan</th>
                    <th class="goCente">Definisi</th>
                    {{-- <th></th> --}}
                  </tr>
                </thead>
                <tbody>
    
                  <tr>
                    <td class="goCenter"><strong> 1</strong></td>
                    <td>Kedua kriteria tersebut sama pentingnya.</td>
                  </tr><tr>
                    <td class="goCenter"><strong> 3</strong></td>
                    <td>Satu kriteria sedikit lebih penting.</td>
                  </tr><tr>
                    <td class="goCenter"><strong>5</strong></td>
                    <td>Satu kriteria lebih penting.</td>
                  </tr><tr>
                    <td class="goCenter"><strong>7</strong></td>
                    <td>Satu kriteria jauh lebih penting.</td>
                  </tr><tr>
                    <td class="goCenter"><strong>9</strong></td>
                    <td>Satu kriteria sangatlah penting.</td>
                  </tr>
                  <tr>
                    <td class="goCenter"><strong>2, 4, 6, 8</strong></td>
                    <td>Nilai antara dua penilaian yang berdekatan.</td>
                  </tr>
                  <tr>
                    <td class="goCenter"><strong>Timbal-balik</strong></td>
                    <td>Jika kriteria i ditetapkan dengan salah satu nilai di atas jika dibandingkan dengan kriteria j, maka kriteria j memiliki nilai timbal balik jika dibandingkan dengan kriteria i. (Contoh: i : j = 3 maka j : i = 1 / 3)</td>
                  </tr>
                
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
        </div>
      <!-- /.card -->
    </div>


</div>



<section class="content">
    <div class="card card-primary">

        <div class="card-header">
            <h3 class="card-title">Tabel Perbandingan Berpasangan</h3>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
        </div>

        <div class="card-body p-0">

<div class="row">
    <div class="col-s-12 col-md-12 col-lg-12 margin-tb">
        {{-- <div class="pull-left">
            <h2>Users Management</h2>
        </div> --}}
        {{-- <div class="pull-right">
             <h3>Tabel Perbandingan Berpasangan</h3>
        </div> --}}
    </div>
</div>





<table class="table table-borderless table-sm table- cssTableCenter">
<tr>
    <th>Kriteria</th>
    <th>C1</th>
    <th>C2</th>
    <th>C3</th>
    <th>C4</th>
    <th>C5</th>
    <th>C6</th>
    
</tr>


{{-- <div class="form-group">
    <strong>Resolusi layar (jumlah pixel):</strong> (pixel vertical x pixel horizontal) 
    <input type="number" name="resolusi_layar" class="form-control" placeholder="Jumlah pixel (pixel vertical x pixel horizontal)" min=0 max="80000000" list="resolution">
    <datalist id="resolution">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="1/2">1/2</option>
        <option value="1/3">1/3</option>
        <option value="1/4">1/4</option>
        <option value="1/5">1/5</option>
        <option value="1/6">1/6</option>
    </datalist>
</div> --}}

<datalist id="bobot">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  {{-- <option value="1">1/1</option> --}}
  <option value="0.5">1/2</option>
  <option value="0.33">1/3</option>
  <option value="0.25">1/4</option>
  <option value="0.20">1/5</option>
  <option value="0.17">1/6</option>
  <option value="0.14">1/7</option>
  <option value="0.13">1/8</option>
  <option value="0.11">1/9</option>
  {{-- <option value="1">2/2</option> --}}
  <option value="0.67">2/3</option>
  <option value="0.5">2/4</option>
  <option value="0.4">2/5</option>
  <option value="0.33">2/6</option>
  <option value="0.29">2/7</option>
  <option value="0.25">2/8</option>
  <option value="0.22">2/9</option>
  {{-- <option value="1">3/3</option> --}}
  <option value="0.75">3/4</option>
  <option value="0.6">3/5</option>
  <option value="0.5">3/6</option>
  <option value="0.43">3/7</option>
  <option value="0.38">3/8</option>
  <option value="0.33">3/9</option>
  {{-- <option value="1">4/4</option> --}}
  <option value="0.8">4/5</option>
  <option value="0.67">4/6</option>
  <option value="0.57">4/7</option>
  <option value="0.5">4/8</option>
  <option value="0.44">4/9</option>
  {{-- <option value="1">5/5</option> --}}
  <option value="0.83">5/6</option>
  <option value="0.71">5/7</option>
  <option value="0.63">5/8</option>
  <option value="0.56">5/9</option>
  {{-- <option value="1">6/6</option> --}}
  <option value="0.86">6/7</option>
  <option value="0.75">6/8</option>
  <option value="0.67">6/9</option>
  {{-- <option value="1">7/7</option> --}}
  <option value="0.88">7/8</option>
  <option value="0.78">7/9</option>
  {{-- <option value="1">8/8</option> --}}
  <option value="0.89">8/9</option>
  {{-- <option value="1">9/9</option> --}}
</datalist>

@php
  function float_to_divide_form($value)
  {
    $sharedOptions = [
      ['', '.....'],
      [1, '1'],
      [2, '2'],
      [3, '3'],
      [4, '4'],
      [5, '5'],
      [6, '6'],
      [7, '7'],
      [8, '8'],
      [9, '9'],
      [0.5, '1/2'],
      [0.33, '1/3'],
      [0.25, '1/4'],
      [0.20, '1/5'],
      [0.17, '1/6'],
      [0.14, '1/7'],
      [0.13, '1/8'],
      [0.11, '1/9']
  ];

    foreach ($sharedOptions as $item) {
      if ($item[0] == $value) {
        $gettedItem = $item;
        return $item[1];
      }
    }

  };
@endphp

@foreach ($PB_obj as $row)
    <tr>
        <td class="custColor">{{ $row->nama_kriteria }}</td>
        
        <td> <input disabled type="text" name="c1c2" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ float_to_divide_form($row->c1) }}"> </td>
        <td> <input disabled type="text" name="c1c3" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ float_to_divide_form($row->c2) }}"> </td>
        <td> <input disabled type="text" name="c1c4" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ float_to_divide_form($row->c3) }}">  </td>
        <td> <input disabled type="text" name="c1c5" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ float_to_divide_form($row->c4) }}">  </td>
        <td> <input disabled type="text" name="c1c6" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ float_to_divide_form($row->c5) }}">  </td>
        <td> <input disabled type="text" name="c1c7" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ float_to_divide_form($row->c6) }}">  </td>
        <td> <input disabled type="text" name="c1c8" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ float_to_divide_form($row->c7) }}">  </td>
        <td> <input disabled type="text" name="c1c9" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ float_to_divide_form($row->c8) }}">  </td>
        <td> <input disabled type="text" name="c1c10" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ float_to_divide_form($row->c9) }}">  </td>
        <td> <input disabled type="text" name="c1c11" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ float_to_divide_form($row->c10) }}">  </td>
        <td> <input disabled type="text" name="c1c12" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ float_to_divide_form($row->c11) }}">  </td>
        <td> <input disabled type="text" name="c1c12" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ float_to_divide_form($row->c12) }}"> </td> <input type="number" name="c1c1" class="form-control center" style="display: none" value="1">
    </tr>

    {{-- <tr>
      <td class="custColor">{{ $row->nama_kriteria }}</td>
      
      <td> <input disabled list="bobot" type="number" name="c1c2" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ $row->c1 }}"> </td>
      <td> <input disabled list="bobot" type="number" name="c1c3" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ $row->c2 }}"> </td>
      <td> <input disabled list="bobot" type="number" name="c1c4" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ $row->c3 }}">  </td>
      <td> <input disabled list="bobot" type="number" name="c1c5" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ $row->c4 }}">  </td>
      <td> <input disabled list="bobot" type="number" name="c1c6" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ $row->c5 }}">  </td>
      <td> <input disabled list="bobot" type="number" name="c1c7" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ $row->c6 }}">  </td>
      <td> <input disabled list="bobot" type="number" name="c1c8" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ $row->c7 }}">  </td>
      <td> <input disabled list="bobot" type="number" name="c1c9" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ $row->c8 }}">  </td>
      <td> <input disabled list="bobot" type="number" name="c1c10" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ $row->c9 }}">  </td>
      <td> <input disabled list="bobot" type="number" name="c1c11" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ $row->c10 }}">  </td>
      <td> <input disabled list="bobot" type="number" name="c1c12" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ $row->c11 }}">  </td>
      <td> <input disabled list="bobot" type="number" name="c1c12" class="form-control" placeholder="" min=0.11 max="9" step="0.01" value="{{ $row->c12 }}"> </td> <input type="number" name="c1c1" class="form-control center" style="display: none" value="1">
  </tr> --}}
@endforeach

</table>

</form>


        </div>
    </div>
</section>
@endsection
