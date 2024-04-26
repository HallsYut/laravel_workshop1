@extends('master')

@section('title')
    Detail activity
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3">
                    <div class="card-header bg-dark text-primary">
                        อุปกรณ์กีฬา
                    </div>
                    <div class="card-body text-primary">
                        <ol id="card">
                            @foreach ($gadgets as $value)
                            <li>{{ $value->name }}</li>
                            @endforeach
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
            $('#card').hide().fadeIn('show');
        });
    </script>
@endsection