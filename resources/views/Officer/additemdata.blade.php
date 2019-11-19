@extends('layout')

@section('title','เพิ่มรายการพัสดุของสงฆ์')

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
                <font color="black"><h1>เพิ่มรายการพัสดุของสงฆ์</h1></font>
            </div><br>
                    <form>
                                <font color="black">
                                <div class="w3-cell-row">
                                <div class="w3-cell" >
                                        <form>
                                                <div class="form-group">
                                                  <h3 for="exampleFormControlFile1">เพิ่มรูปภาพ</h3>
                                                  <input type="file" class="w3-input" id="exampleFormControlFile1">
                                                </div>
                                              </form>
                                </div>
                            </div>
                            <div class="w3-cell-row">
                                    <div class="w3-cell" >
                                        <h3>ประเภทพัสดุ</h3>
                                        <select class="w3-select" id="exampleSelect1">
                                                <option>เครื่องใช้ในครัว</option>
                                                <option>ของใช้นอกสถานที่</option>
                                              </select>
                                    </div>
                                    <div class="w3-cell" >
                                            <h3>ชื่อ</h3>
                                            <input type="text" class="w3-input" id="name" placeholder="ชื่อ">
                                        </div>
                                </div>
                                <div class="w3-cell-row">
                                        <div class="w3-cell" >
                                            <h3>รายละเอียด</h3>
                                            <input type="text" class="w3-input" id="detail" placeholder="รายละเอียด">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                            <div class="w3-cell" >
                                                <h3>จำนวน</h3>
                                                <input type="text" class="w3-input" id="number" placeholder="จำนวน">
                                            </div>
                                            <div class="w3-cell" >
                                                    <h3>คงเหลือ</h3>
                                                    <input type="text" class="w3-input" id="remain" placeholder="คงเหลือ">
                                                </div>
                                        </div>
                                        <br>
                            <div class="w3-cell-row">
                                            <div class="w3-cell">
                                        <a class="w3-button w3-white w3-border w3-border-green w3-round-large"">เพิ่ม</a>
                                        <a class="w3-button w3-white w3-border w3-border-red w3-round-large" href="/itemdata">ย้อนกลับ</a>
                                    </div>
                                </div>
                            </form>
                                </div>
                            </font>

</div>
    @endsection
@section('script')
@parent
@endsection
