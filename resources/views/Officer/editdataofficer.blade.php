@extends('layout')

@section('title','แก้ไขข้อมูลส่วนตัว')

@section('header')
@parent
@endsection
@section('aside')
<li class="colorlib-active"><a href="/index" ><font size="6">หน้าหลัก</font></a></li>
<li><a href="/book"><font size="6">รายการพัสดุรอพิจารณา</font></a></li>
<li><a href="/borrowandbackitem"><font size="6">รายการยืมคืนพัสดุของสงฆ์</font></a></li>
<li><a href="/typeitem"><font size="6">ข้อมูลประเภทพัสดุของสงฆ์</font></a></li>
<li><a href="/itemdata"><font size="6">จัดการข้อมูลพัสดุของสงฆ์</font></a></li>
<li><a href="/officermanage"><font size="6">จัดการข้อมูลเจ้าหน้าที่</font></a></li>
<li><a href="/borrowermange"><font size="6">จัดการข้อมูลผู้ยืม</font></a></li>
<li><a href="#"><font size="6">ออกจากระบบ</font></a></li>
@endsection

@section('content')
<style>
</style>
<form>
    <div class="col-md-12 text text-center">
        <font color="black"><h1>แก้ไขข้อมูลส่วนตัว</h1></font>
    </div>
        <font color="black">
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
                <h3>ตำแหน่ง</h3>
                  <input type="text" class="form-control" id="role" placeholder="ตำแหน่ง">
                </div>
                <div class="form-group col-md-6">
                        <h3>ฉายา</h3>
                          <input type="text" class="form-control" id="nickname" placeholder="ฉายา">
                        </div>
                <div class="form-group col-md-12">
                <h3>ที่อยู่</h3>
                  <input type="text" class="form-control" id="adddress" placeholder="ที่อยู่">
                </div>
              </div>
              <div class="form-row">
        <div class="form-group col-md-6">
                <h3>เบอร์โทร</h3>
                <input type="password" class="form-control" id="Tel" placeholder="เบอร์โทร">
        </div>
              </div>
              <div class="form-row">
                    <div class="form-group col-md-12">
                <a class="btn btn-warning">แก้ไข</a>
                <a class="btn btn-danger" href="/admin">ย้อนกลับ</a>
            </div>
        </div>


    </font>
      </form>
    @endsection
@section('script')
@parent
@endsection
