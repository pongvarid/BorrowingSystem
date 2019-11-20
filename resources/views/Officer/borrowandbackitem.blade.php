@extends('layout')

@section('title','รายการยืมคืนพัสดุของสงฆ์')

@section('header')
@parent
@endsection
@section('aside')
@endsection

@section('content')
<div class="w3-container">
        <div class="col-md-12 text text-center">
                <font color="black"><h1>รายการยืมคืนพัสดุของสงฆ์</h1></font>
            </div>
<form>
        <font color="black">
            <div class="row">
                    <div class="col-md-12">
                    <div class="table-responsive col-md-12">
                            <table id="mytable" class="w3-table-all">
                                    <thead>
                                    <th>ลำดับ</th>
                                    <th>ชื่อ</th>
                                    <th>รายละเอียด</th>
                                    <th>เจ้าหน้าที่</th>
                                    <th>เหตุผล</th>
                                    <th>วันที่คืน</th>
                                    <th>สถานะ</th>
                                    </thead>
                                <tbody>
                                    <tr>
                                    <td>1</td>
                                    <td>สารัญ</td>
                                    <td><a class="w3-button w3-white w3-border w3-border-green w3-round-large" href="/borrowandbackitemdetail">รายละเอียด</a></td>
                                    <td>เจ้าอาวาส</td>
                                    <td>ใช้ในธุระส่วนตัว</td>
                                    <td>25/10/2019</td>
                                    <td><select class="w3-select" id="exampleSelect1">
                                            <option>อนุมัติ</option>
                                            <option>รับของ</option>
                                            <option>คืนแล้ว</option>
                                          </select></td>
                                </tr>
                                <tr>
                                        <td>2</td>
                                        <td>สะสม</td>
                                        <td><a class="w3-button w3-white w3-border w3-border-green w3-round-large" href="/borrowandbackitemdetail">รายละเอียด</a></td>
                                        <td>เจ้าอาวาส</td>
                                    <td>ใช้ในธุระส่วนตัว</td>
                                    <td>25/10/2019</td>
                                    <td><select class="w3-select" id="exampleSelect1">
                                            <option>อนุมัติ</option>
                                            <option>รับของ</option>
                                            <option>คืนแล้ว</option>
                                          </select></td>
                                    </tr>
                                    <tr>
                                            <td>3</td>
                                            <td>มานพ</td>
                                            <td><a class="w3-button w3-white w3-border w3-border-green w3-round-large" href="/borrowandbackitemdetail">รายละเอียด</a></td>
                                            <td>เจ้าอาวาส</td>
                                    <td>ใช้ในธุระส่วนตัว</td>
                                    <td>25/10/2019</td>
                                    <td><select class="w3-select" id="exampleSelect1">
                                            <option>อนุมัติ</option>
                                            <option>รับของ</option>
                                            <option>คืนแล้ว</option>
                                          </select></td>
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
</div>
</font>
</form>
</div>
@endsection
@section('script')
@parent
@endsection
