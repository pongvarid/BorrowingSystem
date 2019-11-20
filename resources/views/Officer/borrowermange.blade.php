@extends('layout')

@section('title','รายชื่อผู้ยืม')

@section('content')
<!-- นำเข้า  CSS จาก Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- นำเข้า  CSS จาก dataTables -->
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.css">

<!-- นำเข้า  Javascript จาก  Jquery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- นำเข้า  Javascript  จาก   dataTables -->
<script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>

<h2>จัดการข้อมูลผู้ยืม</h2>
<hr>
@if (isset($username))
<div class="w3-panel w3-green w3-text-white">
    <h2>สำเร็จ!</h2>
    <hr>
    <h3>ชื่อผู้ใช้ : {{ $username }}</h3>
    <h3>รหัสผ่าน : {{ $password }}</h3>
</div>
@endif

สร้างผู้ใช้
<form action="/core?type=create" method="post">
    @csrf
    <input type="text" placeholder="เลขบัติประจำตัวประชาชน" name="brw_ip" required><br>
    <input type="text" placeholder="คำนำหน้า" name="brw_prefix" required><br>
    <input type="text" placeholder="ชื่อ" name="brw_firstname" required><br>
    <input type="text" placeholder="สกุล" name="brw_lastname" required><br>
    <input type="text" placeholder="ที่อยู่" name="brw_address" required><br>
    <input type="text" placeholder="เบอร์" name="brw_tel" required> <br>
    <button type="submit">Save</button>
</form>

<a href="/management/user"></a>
<table id="usr_table" class="display" style="width:100%">
    <thead>
        <tr>
            <th>คำนำหน้า</th>
            <th>ชื่อ</th>
            <th>สกุล</th>
            <th>ที่อยู่</th>
            <th>เบอร์โทร</th>
            <th>จัดการ</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>

            <td>{{ $user->brw_prefix }}</td>
            <td>{{ $user->brw_firstname }}</td>
            <td>{{ $user->brw_lastname }}</td>
            <td>{{ $user->brw_address }}/25</td>
            <td>{{ $user->brw_tel }}/25</td>
            <td>
                <a href="/management/user?type=edit&id={{ $user->user_id  }}">แก้ไขข้อมูล</a>
                <!--- <a href="/management/user?type=login&id={{ $user->user_id  }}">แก้ไขการเข้าใช้งาน</a> -->
                <a href="/management/user?type=delete&id={{ $user->user_id  }}">ลบ</a>
            </td>
        </tr>
        @endforeach


    </tbody>

</table>


<script>
    $(function(){
				//กำหนดให้  Plug-in dataTable ทำงาน ใน ตาราง Html ที่มี id เท่ากับ example
				$('#usr_table').dataTable();
			});
</script>


<?php



?>


@endsection