@extends('layout.page')
@section('content')
<x-header-page title="Insumos"/>
<x-form-filter />
<div class="table-responsive">
    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                @foreach ($headers as $header)
                <th style="width: {{$header[1]}}%;text-align:center">{{$header[0]}}</th>
                @endforeach
                <th style="text-align: center">...</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->description}}</td>
                <td style="text-align: center"><x-icon-eye-or-eye-close :status="$data->complement"/></td>
                <td style="text-align: center">
                    <a href="" class="btn btn-primary"><x-ico-edit/></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div style="text-align:center;width:100%">{{$datas->links()}}</div>
</div>
@endsection
