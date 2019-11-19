@extends('layout')

@section('title','รายชื่อเจ้าหน้าที่')

@section('header')
@parent
@endsection
@section('aside')
@endsection

@section('content')
<div class="w3-container">
        <div class="col-md-12 text text-center">
                <font color="black"><h1>รายชื่อเจ้าหน้าที่</h1></font>
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

    </div><br>
</form>
<form>
        <font color="black">
            <div class="row">
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
                                        <td>officer1</td>
                                        <td>123456789</td>
                                        <td>เจ้าอาวาส</td>
                                        <td>เจ้าอาวาส</td>
                                        <td><a class="btn btn-danger" href="#">ลบ</a></td>
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
    </font>
      </form>
    </div>
    @endsection
@section('script')
@parent
@endsection