@extends('master')

@section('title')
    Map
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="colmd-8 offset-md-2">
                <div class="card mt-3">
                    <div class="card-header bg-dark text-primary">
                        รายชื่อสาขา
                    </div>
                    <div class="card-body text-primary">
                        <ul>
                            @foreach ($branches as $value)
                            <li><a href="{{URL::to('/detail_map/'.$value->name)}}"class="link-offset-2 link-underline link-underline-opacity-0">{{$value->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection