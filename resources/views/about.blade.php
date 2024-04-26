@extends('master')

@section('title')
    About
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="mt-3 d-flex justify-content-end">{{ $staffs->links() }}</div>
                <table class="table table-bordered mt-3">
                    <thead class="table-dark text-center">
                        <tr>
                            <th class="text-primary">รหัสพนักงาน</th>
                            <th class="text-primary">ชื่อ</th>
                            <th class="text-primary">อายุ</th>
                            <th class="text-primary">อีเมล์</th>
                            <th class="text-primary">ตำแหน่ง</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 0 @endphp
                        @while ($i < count($staffs))
                            <tr>
                                <td class="text-primary text-center">{{$staffs[$i]->id}}</td>
                                <td class="text-primary">
                                    <a href="{{URL::to('/detail_about/'.$staffs[$i]->id)}}"
                                            class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                                        {{$staffs[$i]->name}}
                                    </a>
                                </td>
                                <td class="text-primary">{{$staffs[$i]->age}}</td>
                                <td class="text-primary">{{$staffs[$i]->email}}</td>
                                <td class="text-primary">{{$staffs[$i]->position}}</td>
                            </tr>
                            @php $i++; @endphp
                        @endwhile
                    </tbody>
                </table>
                <h4>พนักงานที่อายุมากว่า 35</h4>
                <table class="table table-bordered mt-3">
                    <thead class="table-dark text-center">
                        <tr>
                            <th class="text-primary">รหัสพนักงาน</th>
                            <th class="text-primary">ชื่อ</th>
                            <th class="text-primary">อายุ</th>
                            <th class="text-primary">อีเมล์</th>
                            <th class="text-primary">ตำแหน่ง</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 0 @endphp
                        @while ($i < count($staffs_age))
                            <tr>
                                <td class="text-primary text-center">{{$staffs_age[$i]->id}}</td>
                                <td class="text-primary">{{$staffs_age[$i]->name}}</td>
                                <td class="text-primary">{{$staffs_age[$i]->age}}</td>
                                <td class="text-primary">{{$staffs_age[$i]->email}}</td>
                                <td class="text-primary">{{$staffs_age[$i]->position}}</td>
                            </tr>
                            @php $i++; @endphp
                        @endwhile
                    </tbody>
                </table>
                <div class="card mt-3">
                    <div class="card-header text-bg-dark text-primary">
                        <h4>เฉลี่ยอายุของพนักงาน</h4>
                    </div>
                    <div class="card-body text-danger">
                        <li>อายุเฉลี่ย {{$staffs_avg}} ปี</li>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header text-bg-dark text-primary">
                        <h4>รวมอายุของพนักงาน</h4>
                    </div>
                    <div class="card-body text-danger">
                        <li>อายุรวม {{$staffs_sum}} ปี</li>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection