@extends('layout')

@section('title','จองพัสดุของสงฆ์')

@section('header')
@parent
@endsection
@section('aside')
                    <li ><a href="/index" ><font size="6">หน้าหลัก</font></a></li>
					<li class="colorlib-active"><a href="/book"><font size="6">จองพัสดุของสงฆ์</font></a></li>
                    <li><a href="/booklist"><font size="6">รายการจองพัสดุของสงฆ์</font></a></li>
                    <li><a href="/borrowlist"><font size="6">รายการยืมพัสดุของสงฆ์</font></a></li>
                    <li><a href="#"><font size="6">ออกจากระบบ</font></a></li>
@endsection

@section('content')
<div class="container">
        <div class="col-md-12 text text-center">
                <font color="black"><h1>กรอกรายละเอียดการจองพัสดุของสงฆ์</h1></font>
            </div>
        <font color="black">
        <div class="form-row">
        <div class="form-group col-md-12" >
            <h3>รหัสการจอง</h3>
            <input type="text" class="form-control" id="Bookcode">
        </div>
    </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                <h3>ชื่อ</h3>
                  <input type="text" class="form-control" id="name" placeholder="ชื่อ">
                </div>
                <div class="form-group col-md-6">
                <h3>นามสกุล</h3>
                  <input type="text" class="form-control" id="lastname" placeholder="นามสกุล">
                </div>
              </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <h3>เหตุผลการใช้งาน</h3>
                <input type="password" class="form-control" id="Reason" placeholder="เหตุผลการใช้งาน">
            </div>
        </div>

        <div class="form-group row">
                <div class="col-4">
                <label>วันที่จอง</label>
                    <input class="form-control" type="date" value="2019-08-19" id="Bookday">
                </div>
                <div class="col-4">
                <label>วันที่ยืม</label>
                    <input class="form-control" type="date" value="2019-08-19" id="Borrowday">
                </div>
                <div class="col-4">
                <label>วันที่คืน</label>
                    <input class="form-control" type="date" value="2019-08-19" id="Backday">
                </div>
            </div>
            <div class="form-row">
            <a class="btn btn-danger col-4" href="/bookitem">ถัดไป</a>
            </div>
    </div>
    </font>
    @endsection
@section('script')
@parent
@endsection
