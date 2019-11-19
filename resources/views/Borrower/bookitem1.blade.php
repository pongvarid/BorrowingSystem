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
<!-- Horizontal Steppers -->
<div class="row">
    <div class="col-md-12">

        <!-- Stepers Wrapper -->
        <ul class="stepper stepper-horizontal">

            <!-- First Step -->
            <li class="completed">
                <a href="#!">
                    <span class="circle">1</span>
                    <span class="label">First step</span>
                </a>
            </li>

            <!-- Second Step -->
            <li class="active">
                <a href="#!">
                    <span class="circle">2</span>
                    <span class="label">Second step</span>
                </a>
            </li>

            <!-- Third Step -->
            <li class="warning">
                <a href="#!">
                    <span class="circle"><i class="fas fa-exclamation"></i></span>
                    <span class="label">Third step</span>
                </a>
            </li>

        </ul>
        <!-- /.Stepers Wrapper -->

    </div>
</div>
<!-- /.Horizontal Steppers -->
@endsection
@section('script')
@parent
@endsection