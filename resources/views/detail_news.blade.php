@extends('master')

@section('title')
    Detail news
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3 text-primary">
                    <div class="card-header bg-dark">
                        โปรโมชั่น
                    </div>
                    <div class="card-body">
                        <p>ชื่อสาขา : {{$name}} </p>
                        <p>โปรโมชั่น : </p>
                        <ul>
                            @switch($name)
                                @case('บางบอน')
                                    <li>ซื้อ 5 แถม 1</li>
                                    <li>ซื้อ 10 แถม 3</li>
                                    @break
                                @case('บางแค')
                                <li>นักศึกษาลด 80%</li>
                                <li>นาทีทอง</li>
                                    @break
                                @default
                                <li>ชิ้นที่ 2 ราคา 1 บาท</li>
                            @endswitch
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection