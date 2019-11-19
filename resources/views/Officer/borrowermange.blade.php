@extends('layout')

@section('title','รายชื่อผู้ยืม')

@section('header')
@parent
@endsection
@section('aside')
@endsection

@section('content')
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
<<<<<<< HEAD
                                        <td>user1</td>
                                        <td>123456789</td>
                                        <td>สารัญ</td>
                                        <td>อยู่เย็น</td>
                                        <td><a class="btn btn-danger" href="#">ลบ</a></td>
                                    </tr>
                            </table>
=======
                                    <td>user1</td>
                                    <td>123456789</td>
                                    <td>สารัญ</td>
                                    <td>อยู่เย็น</td>
                                    <td><a class="w3-button w3-white w3-border w3-border-red w3-round-large" href="#">ลบ</a></td>
                                </tr>
                    </table>
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

                    </div>
    </font>
      </form>
    </div>
    @endsection
@section('script')
@parent
@endsection