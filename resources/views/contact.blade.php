@extends('master')

@section('title')
    Contact
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3">
                    <div class="card-header bg-dark text-primary">
                        รายชื่อสาขา
                    </div>
                    <div class="card-body text-primary">
                            <ul>
                                @forelse ($branches as $value)
                                <li><a href="{{URL::to('contact/'.$value->name)}}" class="link-offset-2 link-underline link-underline-opacity-0">สาขา {{$value->name}}</a></li>
                                @empty
                                    <li>ไม่พบรายชื่อสาขา</li>
                                @endforelse
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection