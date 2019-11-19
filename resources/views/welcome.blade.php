@extends('layout')

@section('title','จองพัสดุของสงฆ์')

@section('header')
@parent
@endsection
@section('aside')
<li><a href="/index">
        <font size="6">หน้าหลัก</font>
    </a></li>
<li class="colorlib-active"><a href="/book">
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

@endsection
@section('script')
@parent
@endsection