@extends('layout')

@section('title','ข้อมูลพัสดุของสงฆ์')

@section('header')
@parent
@endsection
@section('aside')
@endsection

@section('content')
<div class="container">
        <div class="col-md-12 text text-center">
                <font color="black"><h1>ข้อมูลพัสดุของสงฆ์</h1></font>
            </div><br>
<form>
    <div class="w3-cell-row">
            <div class="w3-cell">
                    <a class="w3-button w3-white w3-border w3-border-green w3-round-large" href="/additemdata">เพิ่ม</a>
                </div>
                <div class="w3-cell">
                        <form action="" class="search-form">
                            <div class="form-group has-feedback">
                                <input type="text" class="w3-input" name="search" id="search" placeholder="ค้นหา">
                            </div>
                        </form>
                    </div>
                    <div class="w3-cell">
                                    <select class="w3-select" id="exampleSelect1">
                                            <option>เครื่องใช้ในครัว</option>
                                            <option>ของใช้นอกสถานที่</option>
                                          </select>
                        </div>
    </div>
</form>
</br>
<form>
        <font color="black">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive col-md-12">
<<<<<<< HEAD
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
=======
                            <table id="mytable" class="w3-table-all">
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
>>>>>>> d4df741b2506e95985181fd1e5d7834cf13c0eda
                                    <td>รูปขนาด 50*50px</td>
                                    <td>เครื่องใช้ในครัว</td>
                                    <td>จาน</td>
                                    <td>*******</td>
                                    <td>100</td>
                                    <td>50</td>
                                    <td><a class="w3-button w3-white w3-border w3-border-yellow w3-round-large" href="/edititemdata">แก้ไข</a></td>
                                    <td><a class="w3-button w3-white w3-border w3-border-red w3-round-large" href="#">ลบ</a></td>
                                </tr>
                                <tr>
<<<<<<< HEAD
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
=======
                                        <td>รูปขนาด 50*50px</td>
                                        <td>เครื่องใช้ในครัว</td>
                                        <td>ซ้อม</td>
                                        <td>*******</td>
                                        <td>300</td>
                                        <td>100</td>
                                        <td><a class="w3-button w3-white w3-border w3-border-yellow w3-round-large" href="/edititemdata">แก้ไข</a></td>
                                        <td><a class="w3-button w3-white w3-border w3-border-red w3-round-large" href="#">ลบ</a></td>
                                </tr>
                                    <tr>
                                            <td>รูปขนาด 50*50px</td>
                                            <td>เครื่องใช้ในครัว</td>
                                            <td>ช้อน</td>
                                            <td>*******</td>
                                            <td>200</td>
                                            <td>100</td>
                                            <td><a class="w3-button w3-white w3-border w3-border-yellow w3-round-large" href="/edititemdata">แก้ไข</a></td>
                                            <td><a class="w3-button w3-white w3-border w3-border-red w3-round-large" href="#">ลบ</a></td>
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
>>>>>>> d4df741b2506e95985181fd1e5d7834cf13c0eda

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
    </font>
      </form>
    </div>
    @endsection
@section('script')
@parent
@endsection