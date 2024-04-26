@extends('master')

@section('title')
    Activity
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <table class="table table-bordered mt-3">
                    <thead class="table-dark text-center">
                        <tr>
                            <th class="text-primary">รหัส</th>
                            <th class="text-primary">ชื่อกิจกรรม</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activities as $value)
                        <tr>
                            <td class="text-primary text-center">{{$value->id}}</td>
                            <td class="text-primary"><a class="link-offset-2 link-underline link-underline-opacity-0" href="{{URL::to('detail_activity/'.$value->id)}}">{{$value->name}}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection