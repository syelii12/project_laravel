@extends('adminlte::page')

@section('title', 'Preset Preferences Management')

@section('content_header')
<h2> Show Preset Preference </h2>
<div class="pull-right">
    <a class="btn btn-secondary" href="{{ route('presetpreferences.index') }}"> Back</a>
    <a class="btn btn-primary" href="{{ route('presetpreferences.edit',$presetpreference->id) }}">Edit</a>
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
            <td><strong>Lama_Bekerja</strong></td>
            <td>            Rp{{ $presetpreference->Lama_Bekerja }} </td>
        </tr><tr>
            <td><strong>Management_Resiko</strong> </td>
            <td>            {{ $presetpreference->Management_Resiko }} </td>
        </tr><tr>
            <td><strong>Solidaritas_Team</strong></td>
            <td>            {{ $presetpreference->Solidaritas_Team }} </td>
        </tr><tr>
            <td><strong>Pendidikan</strong></td>
            <td>            {{ $presetpreference->Pendidikan }} </td>
        </tr><tr>
            <td><strong>Kemampuan_Lain</strong></td>
            <td>            {{ $presetpreference->Kemampuan_Lain }} </td>
        </tr><tr>
            <td><strong>Loyalitas</strong></td>
            <td>            {{ $presetpreference->Loyalitas }} </td>
        </tr><tr>
            <td width='30%'><strong></strong></td>
            <td>            {{ $presetpreference }} </td>
        </tr><tr>
            <td><strong>)</strong></td>
            <td>            {{ $presetpreference }} </td>
        </tr><tr>
            <td><strong></strong></td>
            <td>@if ( $presetpreference) @endif
                @if ( $presetpreference) @endif
                @if ( $presetpreference) @endif</td>
        </tr><tr>
            <td><strong></strong></td>
            <td>            {{ $presetpreference }} </td>
        </tr><tr>
            <td><strong></strong></td>
            <td>            {{ $presetpreference }} </td>
        </tr>
    </table>
</div>

        </div>
    </div>
</section>

@endsection
