@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header d-flex justify-content-between">
        <h4>Data Sandal</h4>
        <a href="{{ route('sandals.create') }}" class="btn btn-primary btn-sm">Tambah</a>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            @foreach ($sandals as $s)
            <tr>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->stok }}</td>
                <td width="120">
                    <a href="{{ route('sandals.edit', $s->id) }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection