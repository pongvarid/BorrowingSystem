@extends('layout')

@section('title','รายชื่อเจ้าหน้าที่')

@section('header')
@parent
@endsection
@section('aside')
<li><a href="/admin" ><font size="6">หน้าหลัก</font></a></li>
<li><a href="/waititem"><font size="6">รายการพัสดุรอพิจารณา</font></a></li>
<li><a href="/borrowandbackitem"><font size="6">รายการยืมคืนพัสดุของสงฆ์</font></a></li>
<li><a href="/typeitem"><font size="6">ข้อมูลประเภทพัสดุของสงฆ์</font></a></li>
<li><a href="/itemdata"><font size="6">จัดการข้อมูลพัสดุของสงฆ์</font></a></li>
<li class="colorlib-active"><a href="/officermanage"><font size="6">จัดการข้อมูลเจ้าหน้าที่</font></a></li>
<li><a href="/borrowermange"><font size="6">จัดการข้อมูลผู้ยืม</font></a></li>
<li><a href="#"><font size="6">ออกจากระบบ</font></a></li>
@endsection

@section('content')
<div class="container">
        <div class="col-md-12 text text-center">
                <font color="black"><h1>รายชื่อเจ้าหน้าที่</h1></font>
            </div>< br><br>
<form>
    <div class="row">
            <div class="col-lg-10">
                    <a class="btn btn-success btn-lg" href="/adduser">เพิ่ม</a>
                </div>

                <div class="col-md-2">
                        <form action="" class="search-form">
                            <div class="form-group has-feedback">
                                <label for="search" class="sr-only">Search</label>
                                <input type="text" class="form-control" name="search" id="search" placeholder="ค้นหา">
                                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                        </form>
                    </div>

    </div>
</form>
<form>
        <font color="black">
            <div class="row">
                    <div class="col-md-12">
                    <div class="table-responsive col-md-12">
                            <table id="mytable" class="table table-bordred table-striped">
                                    <thead>
                                    <th>ID</th>
                                    <th>Password</th>
                                    <th>ชื่อ</th>
                                    <th>นามสกุล</th>
                                    <th>ลบ</th>
                                    </thead>
                                <tbody>
                                    <tr>
                                    <td>officer1</td>
                                    <td>123456789</td>
                                    <td>เจ้าอาวาส</td>
                                    <td>เจ้าอาวาส</td>
                                    <td><a class="btn btn-danger" href="#">ลบ</a></td>
                                </tr>
                    </table>

                <div class="clearfix"></div>
                <ul class="pagination pull-right">
                  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                </ul>

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
