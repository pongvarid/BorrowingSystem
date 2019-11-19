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
                <div class="w3-cell-row">
                <div class="w3-cell" >
                        <h3>สถานะผู้ใช้</h3>
                        <select class="w3-select" id="exampleSelect1">
                                <option>ผู้ยืม</option>
                                <option>เจ้าหน้าที่</option>
                              </select>
                    </div>
                </div>
                <div class="w3-cell-row">
                        <div class="w3-cell" >
                            <h3>ชื่อผู้ใช้</h3>
                            <input type="text" class="w3-input" id="username" placeholder="ชื่อผู้ใช้">
                        </div>
                        <div class="w3-cell" >
                                <h3>รหัสผ่าน</h3>
                                <input type="password" class="w3-input" id="password" placeholder="รหัสผ่าน">
                            </div>
                    </div>
                    <div class="w3-cell-row">
                            <div class="w3-cell" >
                                <h3>ชื่อ</h3>
                                <input type="text" class="w3-input" id="name" placeholder="ชื่อ">
                            </div>
                            <div class="w3-cell" >
                                    <h3>นามสกุล</h3>
                                    <input type="text" class="w3-input" id="lastname" placeholder="นามสกุล">
                                </div>
                        </div><br>
                        <div class="w3-cell-row">
                                <div class="w3-cell">
                            <a class="w3-button w3-white w3-border w3-border-green w3-round-large">เพิ่ม</a>
                        </div>
                        <div class="w3-cell">
                                <a class="w3-button w3-white w3-border w3-border-red w3-round-large" href="/admin">ย้อนกลับ</a>
                            </div>
                    </div>
    </font>
      </form>
    </div>
    @endsection
@section('script')
@parent
@endsection
