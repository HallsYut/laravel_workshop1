@extends('master')

@section('title')
    News
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
                        <ul>
                            <li><a href="{{URL::to('/news/'.$branches[0]->name)}}" class="link-offset-2 link-underline link-underline-opacity-0">{{$branches[0]->name}}</a></li>
                            <li><a href="{{URL::to('/news/'.$branches[1]->name)}}" class="link-offset-2 link-underline link-underline-opacity-0">{{$branches[1]->name}}</a></li>
                            <li><a href="{{URL::to('/news/'.$branches[2]->name)}}" class="link-offset-2 link-underline link-underline-opacity-0">{{$branches[2]->name}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection