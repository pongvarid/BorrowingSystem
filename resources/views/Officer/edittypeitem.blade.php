@extends('layout')

@section('title','แก้ไขรายการประเภทพัสดุของสงฆ์')

@section('header')
@parent
@endsection
@section('aside')
@endsection

@section('content')
<div class="container">
    <div class="col-md-12 text text-center">
        <font color="black">
            <h1>แก้ไขรายการประเภทพัสดุของสงฆ์</h1>
        </font>
    </div><br><br>
    <form method="post" action="{{ route('typeitem.update', $data->id) }}">
        @method('PUT')
        @csrf
        <font color="black" class="w3-margin">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <h3>ชื่อ</h3>
                    <input type="text" class="w3-input" id="name" value='{{ $data->type_name }}' placeholder="ชื่อประเภท">
                </div>
            </div>
            <div class="form-row w3-margin">
                <div class="form-group col-md-6">
                    <a class="w3-button w3-white w3-ripple" href="/typeitem">ย้อนกลับ</a>
                    <button class="w3-button w3-blue" type="submit">เพิ่ม</button>
                </div>
            </div>
        </font>
    </form>

</div>
@endsection
@section('script')
@parent
@endsection