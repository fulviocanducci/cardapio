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
                @php($source = $data->toArray())
                @php($keys = array_keys($source))
                @foreach ($keys as $key)
                <td>{{$source[$key]}}</td>
                @endforeach
                <td style="text-align: center">
                    <a href="" class="btn btn-primary"><x-ico-edit/></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
