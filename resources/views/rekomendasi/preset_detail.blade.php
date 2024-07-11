@extends('adminlte::page')

@section('title', 'Preset Preferences Management')

@section('content_header')
<h2> Show Preset Preference </h2>
<div class="pull-right">
    <a class="btn btn-secondary" href="{{ route('rekomendasi.list_preset') }}"> Back</a>
    <a class="btn btn-warning" href="{{ route('rekomendasi.preset.use',$presetpreference->id) }}">Gunakan preset</a>
</div>
@stop

@section('content')

<section class="content">
    <div class="card">
        <div class="card-body p-0">

{{-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Preset Preference</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('presetpreferences.index') }}"> Back</a>
            <a class="btn btn-primary" href="{{ route('presetpreferences.edit',$presetpreference->id) }}">Edit</a>
        </div>
    </div>
</div> --}}


<div class="row">
    <table class="table table-hover table-striped">
        <tr>
            <td><strong>Preset Preference Name</strong></td>
            <td>{{ $presetpreference->name }}</td>
        </tr><tr>
            <td><strong>Details</strong></td>
            <td>{{ $presetpreference->detail }}</td>
        </tr><tr>
            <td><strong>Lama Bekerja</strong></td>
            <td>            Rp{{ $presetpreference->harga }} </td>
        </tr><tr>
            <td><strong>Management Resiko</strong> </td>
            <td>            {{ $presetpreference->prosesor }} </td>
        </tr><tr>
            <td><strong>Solidaritas Team</strong></td>
            <td>            {{ $presetpreference->kapasitas_ram }} </td>
        </tr><tr>
            <td><strong>Pendidikan</strong></td>
            <td>            {{ $presetpreference->kapasitas_hdd }} </td>
        </tr><tr>
            <td><strong>Kemampuan Lain</td>
            <td>            {{ $presetpreference->kapasitas_ssd }} </td>
        </tr><tr>
            <td><strong>Loyalitas</strong></td>
            <td>            {{ $presetpreference->kapasitas_vram }} </td>
        </tr>
        
        {{-- <tr>
            <td width='30%'><strong></strong></td>
            <td>            {{ $presetpreference }} </td>
        </tr><tr>
            <td><strong></strong></td>
            <td>            {{ $presetpreferencet }} </td>
        </tr><tr>
            <td><strong>Jenis Kriteria</strong></td>
            <td>@if ( $presetpreference) @endif
                @if ( $presetpreference) @endif
                @if ( $presetpreference) @endif</td>
        </tr><tr>
            <td><strong></strong></td>
            <td>            {{ $presetpreference }} </td>
        </tr><tr>
            <td><strong></strong></td>
            <td>            {{ $presetpreference }} </td>
        </tr> --}}
    </table>
</div>

        </div>
    </div>
</section>

@endsection
