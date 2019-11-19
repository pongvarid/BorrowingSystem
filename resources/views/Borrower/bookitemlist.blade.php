@extends('layout')

@section('title','จองพัสดุของสงฆ์')

@section('header')
@parent
@endsection
@section('aside')
                    <li ><a href="/index" ><font size="6">หน้าหลัก</font></a></li>
					<li class="colorlib-active"><a href="/book"><font size="6">จองพัสดุของสงฆ์</font></a></li>
                    <li><a href="/booklist"><font size="6">รายการจองพัสดุของสงฆ์</font></a></li>
                    <li><a href="/borrowlist"><font size="6">รายการยืมพัสดุของสงฆ์</font></a></li>
                    <li><a href="#"><font size="6">ออกจากระบบ</font></a></li>
@endsection

@section('content')
<div class="container">
        <div class="col-md-12 text text-center">
                <font color="black"><h1>กรอกรายละเอียดการจองพัสดุของสงฆ์</h1></font>
            </div>
<form>
        <font color="black">
        <div class="form-row">
                <div class="form-group col-md-8">
                <h3>รหัสรายละเอียดการจอง</h3>
                  <input type="text" class="form-control" id="name" placeholder="รหัสรายละเอียดการจอง">
                </div>
                <div class="form-group col-md-4">
                <h3>รหัสการจอง</h3>
                  <input type="text" class="form-control" id="lastname" placeholder="รหัสการจอง">
                </div>
              </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                <h3>พัสดุ</h3>
                <select class="form-control" id="exampleSelect1">
                        <option>โต๊ะ</option>
                        <option>เก้าอี้</option>
                        <option>เต็นท์</option>
                        <option>จาน</option>
                        <option>ชาม</option>
                      </select>
                </div>
                <div class="form-group col-md-5">
                    <h3>จำนวน</h3>
                    <input type="text" class="form-control" id="Number" placeholder="จำนวน">

                </div>
                <div class="form-group col-md-2">

                        <button type="submit" class="btn btn-succer">เพิ่ม</button>
                    </div>
            </div>


                    <div class="row">
                    <div class="col-md-12">
                    <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                        <th>ชื่อ</th>
                        <th>จำนวน</th>
                        <th>ลบ</th>
                        </thead>
                    <tbody>
                        <tr>
                        <td>โต๊ะ</td>
                        <td>100</td>
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
                            <div class="form-row">
                            <a type="button" class="btn btn-success" href="/booklist">ตกลง</a>
                            <a type="button" class="btn btn-danger" href="/book">ย้อนกลับ</a>
                            </div>
                        </div>
                    </div>
                </div>

    </font>
      </form>
    @endsection
@section('script')
@parent
@endsection
