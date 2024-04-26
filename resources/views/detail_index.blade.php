@extends('master')

@section('title')
    Type
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3">
                    <div class="card-header bg-dark text-primary">
                        ประเภทสินค้า
                    </div>
                    <div class="card-body text-primary">
                        <ol>
                            @for ($i = 0; $i < count($types); $i++)
                                <li>{{ $types[$i]->name }}</li>
                            @endfor
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection