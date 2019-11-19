@extends('layout')

@section('title','แก้ไขข้อมูลส่วนตัว')

@section('header')
@parent
@endsection
@section('aside')
                    <li class="colorlib-active"><a href="/index" ><font size="6">หน้าหลัก</font></a></li>
					<li><a href="/book"><font size="6">จองพัสดุของสงฆ์</font></a></li>
                    <li><a href="/booklist"><font size="6">รายการจองพัสดุของสงฆ์</font></a></li>
                    <li><a href="/borrowlist"><font size="6">รายการยืมพัสดุของสงฆ์</font></a></li>
                    <li><a href="#"><font size="6">ออกจากระบบ</font></a></li>
@endsection

@section('content')
<style>
.main{
    color:black;
}
</style>
<form>
    <div class="col-md-12 text text-center">
        <font color="black"><h1>แก้ไขข้อมูลส่วนตัว</h1></font>
    </div>
        <font color="black">
        <div class="form-row">
        <div class="form-group col-md-6" >
            <h3>ชื่อ</h3>
            <input type="text" class="form-control" id="ชื่อ">
        </div>
        <div class="form-group col-md-6" >
                <h3>นามสกุล</h3>
                <input type="text" class="form-control" id="นามสกุล">
            </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                <h3>รหัสบัตรประชาชน</h3>
                  <input type="text" class="form-control" id="name" placeholder="รหัสบัตรประชาชน">
                </div>
                <div class="form-group col-md-12">
                <h3>ที่อยู่</h3>
                  <input type="text" class="form-control" id="lastname" placeholder="ที่อยู่">
                </div>
              </div>
              <div class="form-row">
        <div class="form-group col-md-6">
                <h3>เบอร์โทร</h3>
                <input type="password" class="form-control" id="Reason" placeholder="เบอร์โทร">
        </div>
              </div>
              <div class="form-row">
                    <div class="form-group col-md-12">
                <a class="btn btn-success">แก้ไข</a>
                <a class="btn btn-danger" href="/index">ย้อนกลับ</a>
            </div>
        </div>


    </font>
      </form>
    @endsection
@section('script')
@parent
@endsection
