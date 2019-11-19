@extends('layout')

@section('title','เพิ่มรายการประเภทพัสดุของสงฆ์')

@section('header')
@parent
@endsection
@section('aside')
@endsection

@section('content')
<div class="container">
    <div class="col-md-12 text text-center">
        <font color="black">
            <h1>เพิ่มรายการประเภทพัสดุของสงฆ์</h1>
        </font>
    </div><br><br>
    <form method="post" action="{{ route('typeitem.store') }}">
        @method('POST')
        @csrf
        <font color="black">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <h3>ชื่อ</h3>
                    <input type="text" class="w3-input" id="name" placeholder="ชื่อ">
                </div>
            </div>
            </br>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <button class="w3-button w3-white w3-border w3-border-green w3-round-large" type="submit">เพิ่ม</button>
                    <a class="w3-button w3-white w3-border w3-border-red w3-round-large" href="/typeitem">ย้อนกลับ</a>
                </div>
            </div>
</div>


</font>
</form>
</div>
@endsection
@section('script')
@parent
@endsection