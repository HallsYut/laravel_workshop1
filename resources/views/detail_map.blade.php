@extends('master')

@section('title')
    Detail map
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3 text-primary">
                    <div class="card-header bg-dark">
                        รายละเอียดสาขา
                    </div>
                    <div class="card-body">
                        <p>ชื่อสาขา : {{$name}}</p>
                        <p>สถานที่ใกล้เคียง : </p>
                        <ul>
                            @foreach ($branch as $value)
                                <li>{{$value->bd_name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection