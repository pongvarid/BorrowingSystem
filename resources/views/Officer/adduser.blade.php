@extends('layout')

@section('title','เพิ่มผู้ใช้')

@section('header')
@parent
@endsection
@section('aside')
<li class="colorlib-active"><a href="/admin" ><font size="6">หน้าหลัก</font></a></li>
<li><a href="/waititem"><font size="6">รายการพัสดุรอพิจารณา</font></a></li>
<li><a href="/borrowandbackitem"><font size="6">รายการยืมคืนพัสดุของสงฆ์</font></a></li>
<li><a href="/typeitem"><font size="6">ข้อมูลประเภทพัสดุของสงฆ์</font></a></li>
<li><a href="/itemdata"><font size="6">จัดการข้อมูลพัสดุของสงฆ์</font></a></li>
<li><a href="/officermanage"><font size="6">จัดการข้อมูลเจ้าหน้าที่</font></a></li>
<li><a href="/borrowermange"><font size="6">จัดการข้อมูลผู้ยืม</font></a></li>
<li><a href="#"><font size="6">ออกจากระบบ</font></a></li>
@endsection

@section('content')
<div class="container">
        <div class="col-md-12 text text-center">
                <font color="black"><h1>เพิ่มผู้ใช้</h1></font>
            </div><br><br>
<form>
        <font color="black">
                <div class="form-row">
                <div class="form-group col-md-6" >
                        <h3>สถานะผู้ใช้</h3>
                        <select class="form-control" id="exampleSelect1">
                                <option>ผู้ยืม</option>
                                <option>เจ้าหน้าที่</option>
                              </select>
                    </div>
                </div>
                <div class="form-row">
                        <div class="form-group col-md-6" >
                            <h3>ชื่อผู้ใช้</h3>
                            <input type="text" class="form-control" id="username" placeholder="ชื่อผู้ใช้">
                        </div>
                        <div class="form-group col-md-6" >
                                <h3>รหัสผ่าน</h3>
                                <input type="password" class="form-control" id="password" placeholder="รหัสผ่าน">
                            </div>
                    </div>
                    <div class="form-row">
                            <div class="form-group col-md-6" >
                                <h3>ชื่อ</h3>
                                <input type="text" class="form-control" id="name" placeholder="ชื่อ">
                            </div>
                            <div class="form-group col-md-6" >
                                    <h3>นามสกุล</h3>
                                    <input type="text" class="form-control" id="lastname" placeholder="นามสกุล">
                                </div>
                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-6">
                            <a class="btn btn-success">เพิ่ม</a>
                        </div>
                        <div class="form-group col-md-6">
                                <a class="btn btn-danger" href="/admin">ย้อนกลับ</a>
                            </div>
                    </div>
    </font>
      </form>
    @endsection
@section('script')
@parent
@endsection
