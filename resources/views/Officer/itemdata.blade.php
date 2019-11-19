@extends('layout')

@section('title','ข้อมูลพัสดุของสงฆ์')

@section('header')
@parent
@endsection
@section('aside')
<li><a href="/admin" ><font size="6">หน้าหลัก</font></a></li>
<li><a href="/waititem"><font size="6">รายการพัสดุรอพิจารณา</font></a></li>
<li><a href="/borrowandbackitem"><font size="6">รายการยืมคืนพัสดุของสงฆ์</font></a></li>
<li><a href="/typeitem"><font size="6">ข้อมูลประเภทพัสดุของสงฆ์</font></a></li>
<li class="colorlib-active"><a href="/itemdata"><font size="6">จัดการข้อมูลพัสดุของสงฆ์</font></a></li>
<li><a href="/officermanage"><font size="6">จัดการข้อมูลเจ้าหน้าที่</font></a></li>
<li><a href="/borrowermange"><font size="6">จัดการข้อมูลผู้ยืม</font></a></li>
<li><a href="#"><font size="6">ออกจากระบบ</font></a></li>
@endsection

@section('content')
<div class="container">
        <div class="col-md-12 text text-center">
                <font color="black"><h1>ข้อมูลพัสดุของสงฆ์</h1></font>
            </div>< br><br>
<form>
    <div class="row">
            <div class="col-lg-8">
                    <a class="btn btn-success btn-lg" href="/additemdata">เพิ่ม</a>
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
                    <div class="col-md-2">
                                    <select class="form-control" id="exampleSelect1">
                                            <option>เครื่องใช้ในครัว</option>
                                            <option>ของใช้นอกสถานที่</option>
                                          </select>
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
                                    <th>รูปภาพ</th>
                                    <th>ประเภทพัสดุ</th>
                                    <th>ชื่อ</th>
                                    <th>รายละเอียด</th>
                                    <th>จำนวน</th>
                                    <th>คงเหลือ</th>
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>
                                    </thead>
                                <tbody>
                                    <tr>
                                    <td>รูปขนาด 50*50px</td>
                                    <td>เครื่องใช้ในครัว</td>
                                    <td>จาน</td>
                                    <td>*******</td>
                                    <td>100</td>
                                    <td>50</td>
                                    <td><a class="btn btn-warning" href="/edititemdata">แก้ไข</a></td>
                                    <td><a class="btn btn-danger" href="#">ลบ</a></td>
                                </tr>
                                <tr>
                                        <td>รูปขนาด 50*50px</td>
                                        <td>เครื่องใช้ในครัว</td>
                                        <td>ซ้อม</td>
                                        <td>*******</td>
                                        <td>300</td>
                                        <td>100</td>
                                        <td><a class="btn btn-warning" href="/edititemdata">แก้ไข</a></td>
                                        <td><a class="btn btn-danger" href="#">ลบ</a></td>
                                    </tr>
                                    <tr>
                                            <td>รูปขนาด 50*50px</td>
                                            <td>เครื่องใช้ในครัว</td>
                                            <td>ช้อน</td>
                                            <td>*******</td>
                                            <td>200</td>
                                            <td>100</td>
                                            <td><a class="btn btn-warning" href="/edititemdata">แก้ไข</a></td>
                                            <td><a class="btn btn-danger" href="#">ลบ</a></td>
                                        </tr>
                                </tbody>
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
