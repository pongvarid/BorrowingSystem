@extends('layout')

@section('title','เพิ่มรายการประเภทพัสดุของสงฆ์')

@section('header')
@parent
@endsection
@section('aside')
<li><a href="/admin" ><font size="6">หน้าหลัก</font></a></li>
<li><a href="/waititem"><font size="6">รายการพัสดุรอพิจารณา</font></a></li>
<li><a href="/borrowandbackitem"><font size="6">รายการยืมคืนพัสดุของสงฆ์</font></a></li>
<li class="colorlib-active"><a href="/typeitem"><font size="6">ข้อมูลประเภทพัสดุของสงฆ์</font></a></li>
<li><a href="/itemdata"><font size="6">จัดการข้อมูลพัสดุของสงฆ์</font></a></li>
<li><a href="/officermanage"><font size="6">จัดการข้อมูลเจ้าหน้าที่</font></a></li>
<li><a href="/borrowermange"><font size="6">จัดการข้อมูลผู้ยืม</font></a></li>
<li><a href="#"><font size="6">ออกจากระบบ</font></a></li>
@endsection

@section('content')
<div class="container">
        <div class="col-md-12 text text-center">
                <font color="black"><h1>เพิ่มรายการประเภทพัสดุของสงฆ์</h1></font>
            </div><br><br>
                    <form>
                                <font color="black">
                                <div class="form-row">
                                <div class="form-group col-md-6" >
                                    <h3>ชื่อ</h3>
                                    <input type="text" class="w3-input" id="name" placeholder="ชื่อ">
                                </div>
                            </div>
                        </br>
                            <div class="form-row">
                                            <div class="form-group col-md-6">
                                        <a class="w3-button w3-white w3-border w3-border-green w3-round-large">เพิ่ม</a>
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
