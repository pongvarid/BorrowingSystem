@extends('layout')

@section('title','ตารางการยืมพัสดุของสงฆ์')

@section('header')
@parent
@endsection
@section('aside')
<li><a href="/index">
        <font size="6">หน้าหลัก</font>
    </a></li>
<li><a href="/book">
        <font size="6">จองพัสดุของสงฆ์</font>
    </a></li>
<li><a href="/booklist">
        <font size="6">รายการจองพัสดุของสงฆ์</font>
    </a></li>
<li class="colorlib-active"><a href="/borrowlist">
        <font size="6">รายการยืมพัสดุของสงฆ์</font>
    </a></li>
<li><a href="#">
        <font size="6">ออกจากระบบ</font>
    </a></li>
@endsection

@section('content')
<div class="w3-container">
    <div class="col-md-12 text text-center">
        <font color="black">
            <h1>ตารางการยืมพัสดุของสงฆ์</h1>
        </font>
    </div>
    <form>

        <font color="black">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive col-md-12">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>ลำดับ</th>
                                <th>ชื่อ</th>
                                <th>รายละเอียด</th>
                                <th>สถานะ</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>สารัญ</td>
                                    <td><a type="submit" class="btn btn-success" href="/borrowlistdetail">รายละเอียด</a></td>
                                    <td>อนุมัติ</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>สารัญ</td>
                                    <td><a type="submit" class="btn btn-success" href="/borrowlistdetail">รายละเอียด</a></td>
                                    <td>คืนแล้ว</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>สารัญ</td>
                                    <td><a type="submit" class="btn btn-success" href="/borrowlistdetail">รายละเอียด</a></td>
                                    <td>รับของ</td>
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
    @section('script')
    @parent
    @endsection
