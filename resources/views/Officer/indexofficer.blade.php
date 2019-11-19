@extends('layout')

@section('title','หน้าหลัก - เจ้าหน้าที่')

@section('header')
@parent
@endsection
@section('aside')
                    <li class="colorlib-active"><a href="/admin" ><font size="6">หน้าหลัก</font></a></li>
					<li><a href="/waititem"><font size="6">รายการพัสดุรอพิจารณา</font></a></li>
                    <li><a href="/borrowandbackitem"><font size="6">รายการยืมคืนพัสดุของสงฆ์</font></a></li>
                    <li><a href="/typeitem"><font size="6">ข้อมูลประเภทพัสดุของสงฆ์</font></a></li>
                    <li><a href="/itemdata"><font size="6">จัดการข้อมูลพัสดุของสงฆ์</font></a></li>
                    <li><a href="/officermanage"><font size="6">จัดการข้อมูลเจ้าหน้าที่</font></a></li>
                    <li><a href="/borrowermange"><font size="6">จัดการข้อมูลผู้ยืม</font></a></li>
                    <li><a href="#"><font size="6">ออกจากระบบ</font></a></li>
@endsection

@section('content')
        <div class="col-md-8 text text-center">
                <div class="img mb-4" style="background-image: url(images/author.jpg);"></div>
                <div class="desc" ><font size="6">
                    <h1>ข้อมูลส่วนตัว</h1>
                    <p>คุณ xxxxxxx  xxxxxxxxxxxx</p>
                    <p>ตำแหน่ง : xxxxxxxxxxxxx</p>
                    <p>ฉายา : xxxxxxxxxxxxx</p>
                    <p>ที่อยู่ : xxxxxxxxxxxxxxxxxxxxxxx <br>
                             xxxxxxxxxxxxxxxxxxxxxxx <br>
                             xxxxxxxxxxxxxxxxxxxxxxx
                    </p>
                    <p>เบอร์โทรศัพท์ : 0812345678</p></font>
                    <a class="w3-button w3-white w3-border w3-border-yellow w3-round-large" href="/adminedit">แก้ไขข้อมูลส่วนตัว</a>
                    <a class="w3-button w3-white w3-border w3-border-green w3-round-large"" href="/adduser">เพิ่มผู้ใช้</a>

                </div>
            </div>
    @endsection
@section('script')
@parent
@endsection
