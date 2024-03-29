@extends('layout')

@section('title','หน้าหลัก')

@section('header')
@parent
@endsection
@section('aside')
<li class="colorlib-active"><a href="/index">
        <font size="6">หน้าหลัก</font>
    </a></li>
<li><a href="/book">
        <font size="6">จองพัสดุของสงฆ์</font>
    </a></li>
<li><a href="/booklist">
        <font size="6">รายการจองพัสดุของสงฆ์</font>
    </a></li>
<li><a href="/borrowlist">
        <font size="6">รายการยืมพัสดุของสงฆ์</font>
    </a></li>
<li><a href="#">
        <font size="6">ออกจากระบบ</font>
    </a></li>
@endsection

@section('content')
<div class="container col-md-8 text text-center ">
    <div class="img mb-4" style="background-image: url(images/author.jpg);"></div>
    <div class="desc">
        <font size="6">
            <h1>ข้อมูลส่วนตัว</h1>
            <p>คุณ xxxxxxx xxxxxxxxxxxx</p>
            <p>รหัสบัตรประชาชน : xxxxxxxxxxxxx</p>
            <p>ที่อยู่ : xxxxxxxxxxxxxxxxxxxxxxx <br>
                xxxxxxxxxxxxxxxxxxxxxxx <br>
                xxxxxxxxxxxxxxxxxxxxxxx
            </p>
            <p>เบอร์โทรศัพท์ : 0812345678</p>
        </font>
        <!-- <button type="button" class="btn btn-warning" href="/editdataborrower">แก้ไขข้อมูลส่วนตัว</button> -->
        <a class="w3-button w3-white w3-border w3-border-yellow w3-round-large" href="/editdataborrower">แก้ไขข้อมูลส่วนตัว</a>

    </div>
</div>
@endsection
@section('script')
@parent
@endsection
