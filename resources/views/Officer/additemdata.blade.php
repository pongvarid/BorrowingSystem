@extends('layout')

@section('title','เพิ่มรายการพัสดุของสงฆ์')

@section('header')
@parent
@endsection
@section('aside')
<li><a href="/admin">
        <font size="6">หน้าหลัก</font>
    </a></li>
<li><a href="/waititem">
        <font size="6">รายการพัสดุรอพิจารณา</font>
    </a></li>
<li><a href="/borrowandbackitem">
        <font size="6">รายการยืมคืนพัสดุของสงฆ์</font>
    </a></li>
<li><a href="/typeitem">
        <font size="6">ข้อมูลประเภทพัสดุของสงฆ์</font>
    </a></li>
<li class="colorlib-active"><a href="/itemdata">
        <font size="6">จัดการข้อมูลพัสดุของสงฆ์</font>
    </a></li>
<li><a href="/officermanage">
        <font size="6">จัดการข้อมูลเจ้าหน้าที่</font>
    </a></li>
<li><a href="/borrowermange">
        <font size="6">จัดการข้อมูลผู้ยืม</font>
    </a></li>
<li><a href="#">
        <font size="6">ออกจากระบบ</font>
    </a></li>
@endsection

@section('content')
<div class="container">
    <div class="col-md-12 text text-center">
        <font color="black">
            <h1>เพิ่มรายการพัสดุของสงฆ์</h1>
        </font>
    </div><br><br>
    <form>
        <font color="black">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <form>
                        <div class="form-group">
                            <h3 for="exampleFormControlFile1">เพิ่มรูปภาพ</h3>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </form>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <h3>ประเภทพัสดุ</h3>
                    <select class="form-control" id="exampleSelect1">
                        <option>เครื่องใช้ในครัว</option>
                        <option>ของใช้นอกสถานที่</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <h3>ชื่อ</h3>
                    <input type="text" class="form-control" id="name" placeholder="ชื่อ">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <h3>รายละเอียด</h3>
                    <input type="text" class="form-control" id="detail" placeholder="รายละเอียด">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <h3>จำนวน</h3>
                    <input type="text" class="form-control" id="number" placeholder="จำนวน">
                </div>
                <div class="form-group col-md-6">
                    <h3>คงเหลือ</h3>
                    <input type="text" class="form-control" id="remain" placeholder="คงเหลือ">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <a class="btn btn-success">เพิ่ม</a>
                    <a class="btn btn-danger" href="/itemdata">ย้อนกลับ</a>
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