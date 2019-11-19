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

                
<table id="example" class="display" style="width:100%">
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
                        <button disabled="disabled">ss</button>
                    </td>
                </tr>
            @endforeach
            
          
        </tbody>
  
    </table>


    <script>
			$(function(){
				//กำหนดให้  Plug-in dataTable ทำงาน ใน ตาราง Html ที่มี id เท่ากับ example
				$('#example').dataTable();
			});
    </script>

<!-----
<div class="container">
        <div class="col-md-12 text text-center">
                <font color="black"><h1>รายชื่อผู้ยืม</h1></font>
            </div><br>
<form>
    <div class="w3-cell-row">
            <div class="w3-cell">
                    <a class="w3-button w3-white w3-border w3-border-green w3-round-large" href="/adduser">เพิ่ม</a>
                </div>

                <div class="w3-cell">
                        <form action="" class="search-form">
                            <div class="form-group has-feedback">

                                <input type="text" class="w3-input" name="search" id="search" placeholder="ค้นหา">

                            </div>
                        </form>
                    </div>

    </div>
</form><br>
<form>
        <font color="black">
            <div class="w3-cell-row">
                    <div class="col-md-12">
                    <div class="table-responsive col-md-12">
                            <table id="mytable" class="w3-table-all">
                                    <thead>
                                    <th>ID</th>
                                    <th>Password</th>
                                    <th>ชื่อ</th>
                                    <th>นามสกุล</th>
                                    <th>ลบ</th>
                                    </thead>
                                <tbody>
                                    <tr>
                                    <td>user1</td>
                                    <td>123456789</td>
                                    <td>สารัญ</td>
                                    <td>อยู่เย็น</td>
                                    <td><a class="w3-button w3-white w3-border w3-border-red w3-round-large" href="#">ลบ</a></td>
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
    </div> --->
    @endsection