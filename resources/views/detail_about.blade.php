@extends('master')

@section('title')
    Detail about
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3">
                    <div class="card-header bg-dark text-primary">
                        <h4>ทักษะ/ความสามารถ</h4>
                    </div>
                    <div class="card-body text-primary" id="fade">
                        <p>ชื่อ : {{$staff->name}}</p>
                        <p>อายุ : {{$staff->age}} ปี</p>
                        <p>อีเมล์ : {{$staff->email}}</p>
                        <p>ตำแหน่ง : {{$staff->position}}</p>
                        <p>ทักษะ : </p>
                        <ol>
                            @php $i = 0; @endphp
                            @while ($i < count($staff->skill))
                                <li>{{$staff->skill[$i]->name}}</li>
                            @php $i++; @endphp
                            @endwhile
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function(){
            $('#fade').hide().fadeIn(1000);
        });
    </script>
@endsection