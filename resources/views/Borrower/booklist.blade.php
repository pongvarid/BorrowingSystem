@extends('layout')

@section('title','ตารางการจองพัสดุของสงฆ์')

@section('header')
@parent
@endsection
@section('aside')
                    <li ><a href="/index" ><font size="6">หน้าหลัก</font></a></li>
					<li><a href="/book"><font size="6">จองพัสดุของสงฆ์</font></a></li>
                    <li class="colorlib-active"><a href="/booklist"><font size="6">รายการจองพัสดุของสงฆ์</font></a></li>
                    <li><a href="/borrowlist"><font size="6">รายการยืมพัสดุของสงฆ์</font></a></li>
                    <li><a href="#"><font size="6">ออกจากระบบ</font></a></li>
@endsection

@section('content')
<div class="container">
        <div class="col-md-12 text text-center">
                <font color="black"><h1>ตารางการจองพัสดุของสงฆ์</h1></font>
            </div>
<form>
        <font color="black">
            <div class="row">
                    <div class="col-md-12">
                    <div class="table-responsive col-md-12">
                    <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                        <th>ลำดับ</th>
                        <th>ชื่อ</th>
                        <th>รายละเอียด</th>
                        <th>สถานะ</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                        </thead>
                    <tbody>
                        <tr>
                        <td>1</td>
                        <td>สารัญ อยู่เย็น</td>
                        <td><a type="submit" class="btn btn-success" href="/bookitemdetail">รายละเอียด</a></td>
                        <td><p>รอการพิจารณา</p></td>
                        <td><a type="submit" class="btn btn-warning" href="/bookitem">แก้ไข</a></td>
                        <td><button type="submit" class="btn btn-danger">ลบ</button></td>
                    </tr>
                    <tr>
                            <td>2</td>
                            <td>ชนาธิป สงกระสิน</td>
                            <td><a type="submit" class="btn btn-success" href="/bookitemdetail">รายละเอียด</a></td>
                            <td><p>รอการพิจารณา</p></td>
                            <td><a type="submit" class="btn btn-warning" href="/bookitem">แก้ไข</a></td>
                            <td><button type="submit" class="btn btn-danger">ลบ</button></td>
                        </tr>
                        <tr>
                                <td>3</td>
                                <td>ธีรศิลป์ แดงดา</td>
                                <td><a type="submit" class="btn btn-success" href="/bookitemdetail">รายละเอียด</a></td>
                                <td><p>รอการพิจารณา</p></td>
                                <td><a type="submit" class="btn btn-warning" href="/bookitem">แก้ไข</a></td>
                                <td><button type="submit" class="btn btn-danger">ลบ</button></td>
                            </tr>
                            <tr>
                                    <td>4</td>
                                    <td>ธีรธรณ์ บุญมาทัน</td>
                                    <td><a type="submit" class="btn btn-success" href="/bookitemdetail">รายละเอียด</a></td>
                                    <td><p>รอการพิจารณา</p></td>
                                    <td><a type="submit" class="btn btn-warning" href="/bookitem">แก้ไข</a></td>
                                    <td><button type="submit" class="btn btn-danger">ลบ</button></td>
                                </tr>
                                <tr>
                                        <td>5</td>
                                        <td>มานูเอล ทอมเบียร์</td>
                                        <td><a type="submit" class="btn btn-success" href="/bookitemdetail">รายละเอียด</a></td>
                                        <td><p>รอการพิจารณา</p></td>
                                        <td><a type="submit" class="btn btn-warning" href="/bookitem">แก้ไข</a></td>
                                        <td><button type="submit" class="btn btn-danger">ลบ</button></td>
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
    @endsection
@section('script')
@parent
@endsection
