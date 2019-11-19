@extends('layout')

@section('title','รายการพัสดุรอพิจารณาการยืม')

@section('header')
@parent
@endsection
@section('aside')
@endsection

@section('content')
<div class="container">
        <div class="col-md-12 text text-center">
                <font color="black">
                        <h1>รายการพัสดุรอพิจารณาการยืม</h1>
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
                                                                <th>วันที่จอง</th>
                                                                <th>วันที่ยืม</th>
                                                                <th>วันที่คืน</th>
                                                                <th>สถานะ</th>
                                                        </thead>
                                                        <tbody>
                                                                <tr>
                                                                        <td>1</td>
                                                                        <td>สารัญ</td>
                                                                        <td><a type="submit" class="btn btn-success" href="/waititemdetail">รายละเอียด</a></td>
                                                                        <td>19/10/2019</td>
                                                                        <td>19/10/2019</td>
                                                                        <td>25/10/2019</td>
                                                                        <td><select class="form-control" id="exampleSelect1">
                                                                                        <option>รอการพิจารณา</option>
                                                                                        <option>อนุมัติ</option>
                                                                                        <option>ไม่อนุมัติ</option>
                                                                                </select></td>
                                                                </tr>
                                                                <tr>
                                                                        <td>2</td>
                                                                        <td>สะสม</td>
                                                                        <td><a type="submit" class="btn btn-success" href="/waititemdetail">รายละเอียด</a></td>
                                                                        <td>19/10/2019</td>
                                                                        <td>19/10/2019</td>
                                                                        <td>25/10/2019</td>
                                                                        <td><select class="form-control" id="exampleSelect1">
                                                                                        <option>รอการพิจารณา</option>
                                                                                        <option>อนุมัติ</option>
                                                                                        <option>ไม่อนุมัติ</option>
                                                                                </select></td>
                                                                </tr>
                                                                <tr>
                                                                        <td>3</td>
                                                                        <td>มานพ</td>
                                                                        <td><a type="submit" class="btn btn-success" href="/waititemdetail">รายละเอียด</a></td>
                                                                        <td>19/10/2019</td>
                                                                        <td>19/10/2019</td>
                                                                        <td>25/10/2019</td>
                                                                        <td><select class="form-control" id="exampleSelect1">
                                                                                        <option>รอการพิจารณา</option>
                                                                                        <option>อนุมัติ</option>
                                                                                        <option>ไม่อนุมัติ</option>
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
                </font>
        </form>
</div>
@endsection
@section('script')
@parent
@endsection