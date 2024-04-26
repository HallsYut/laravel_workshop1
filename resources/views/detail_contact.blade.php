@extends('master')

@section('title')
    Detail contact
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3">
                    <div class="card-header bg-dark text-primary">
                        พนักงานในสาขา
                    </div>
                    <div class="card-body text-primary">
                        <ul>
                            @for ($i = 0; $i < count($staffs_id); $i++)
                                <li>รหัส : {{$staffs_id[$i]->staff_id}} </li>
                                <li>ชื่อ : {{$staffs_info[$i]->name}}</li>
                                <li>{{$staffs_info[$i]->position}} : {{$branches_info[$i]->name}}</li>
                                <li>เบอร์โทร : </li>
                                @for ($k = 0; $k < count($staffs_info[$i]->telephone); $k++)
                                <li>{{$staffs_info[$i]->telephone[$k]->name}}</li>
                                @endfor
                                <hr>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection