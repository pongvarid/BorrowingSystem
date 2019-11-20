@extends('layout')

@section('title','ตารางการจองพัสดุของสงฆ์')

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
<li class="colorlib-active"><a href="/booklist">
        <font size="6">รายการจองพัสดุของสงฆ์</font>
    </a></li>
<li><a href="/borrowlist">
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
            <h1>ตารางการจองพัสดุของสงฆ์</h1>
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
                                <th>แก้ไข</th>
                                <th>ลบ</th>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $datas) { ?>
                                    <tr>
                                        <td>1</td>
                                        <td>{{$datas->brw_prefix}}{{$datas->brw_firstname}} {{$datas->brw_lastname}}</td>
                                        <td><a type="submit" class="btn btn-success" href="/bookitemdetail/{{$datas->id}}">รายละเอียด</a></td>
                                        <td>
                                            <p>{{$datas->stetus}}</p>
                                        </td>
                                        <td><a type="submit" class="btn btn-warning" href="/bookitem">แก้ไข</a></td>
                                        <td><button type="submit" class="btn btn-danger">ลบ</button></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                        <div class="clearfix "></div>
                        <ul class="pagination pull-right">
                            {!! $data->onEachSide(1)->links() !!}
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
