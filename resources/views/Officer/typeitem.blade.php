@extends('layout')

@section('title','รายการประเภทพัสดุของสงฆ์')

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
                <font color="black"><h1>รายการประเภทพัสดุของสงฆ์</h1></font>
            </div>
                    <div class="row">
                            <div class="col-lg-8">
                                <a class="w3-button w3-white w3-border w3-border-green w3-round-large">
                                    เพิ่ม
                                </a>
                                </div>

                    </div>
<form>
        <font color="black">
            <div class="row">
                    <div class="col-md-12">
                    <div class="table-responsive col-md-12">
                            <table id="mytable" class="w3-table-all">
                                    <thead>
                                    <th>ลำดับ</th>
                                    <th>ประเภทพัสดุ</th>
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>
                                    </thead>
                                <tbody>
                                    <tr>
                                    <td>1</td>
                                    <td>เครื่องใช้ในครัว</td>
                                    <td><a class="w3-button w3-white w3-border w3-border-yellow w3-round-large" href="/edittypeitem">แก้ไข</a></td>
                                    <td><a class="w3-button w3-white w3-border w3-border-red w3-round-large" href="#">ลบ</a></td>
                                </tr>
                                <tr>
                                        <td>2</td>
                                        <td>ของใช้นอกสถานที่</td>
                                        <td><a class="w3-button w3-white w3-border w3-border-yellow w3-round-large" href="/edittypeitem">แก้ไข</a></td>
                                        <td><a class="w3-button w3-white w3-border w3-border-red w3-round-large" href="#">ลบ</a></td>
                                    </tr>
                                    <tr>
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
