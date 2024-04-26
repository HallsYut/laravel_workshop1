@extends('master')

@section('title')
    Home
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 p-3">
                <table class="table table-bordered mt-3">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>รหัสสินค้า</th>
                            <th>หมวดสินค้า</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < count($categories_orderby); $i++)
                            <tr>
                                <td class="text-center">{{$categories_orderby[$i]->id}}</td>
                                <td><a class="link-offset-2 link-underline link-underline-opacity-0" href="{{URL::to('detail_index/'.$categories_orderby[$i]->id)}}" class="nav-item">{{$categories_orderby[$i]->name}}</a></td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
        <h6>การนัดจำนวนแบบมีเงื่อนไข</h6>
        <table class="table table-bordered mt-3">
            <thead class="table-primary text-center">
                <tr>
                    <th>รหัสสินค้า</th>
                    <th>หมวดสินค้า</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($categories); $i++)
                    <tr>
                        <td class="text-center">{{ $categories[$i]->id }}</td>
                        <td>
                            <span class="badge rounded-pill text-bg-warning">{{$types->where('category_id',$categories[$i]->id)->count()}}</span>
                            {{ $categories[$i]->name }}
                        </td>
                    </tr>  
                    @endfor
            </tbody>
        </table>

    </div>
@endsection