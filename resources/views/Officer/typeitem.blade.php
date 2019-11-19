@extends('layout')

@section('title','รายการประเภทพัสดุของสงฆ์')

@section('aside')
@endsection

@section('content')
<div class="container">
        <div class="col-md-12 text text-center">
                <font color="black"><h1>รายการประเภทพัสดุของสงฆ์</h1></font>
            </div>
                    <div class="row">
                            <div class="col-lg-8">
                                <a class="w3-button w3-white w3-border w3-border-green w3-round-large">
                                    เพิ่ม
                                </a>
                                </div>

                    </div>
<form>
        <font color="black">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive col-md-12">
<<<<<<< HEAD
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>ลำดับ</th>
                                <th>ประเภทพัสดุ</th>
                                <th>แก้ไข</th>
                                <th>ลบ</th>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($data as $datas) { ?>
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$datas->type_name}}</td>
                                        <td><a class="btn btn-warning" href="/edittypeitem">แก้ไข</a></td>
                                        <td>
                                            <form action="{{ route('typeitem.destroy', $datas->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
=======
                            <table id="mytable" class="w3-table-all">
                                    <thead>
                                    <th>ลำดับ</th>
                                    <th>ประเภทพัสดุ</th>
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>
                                    </thead>
                                <tbody>
                                    <tr>
                                    <td>1</td>
                                    <td>เครื่องใช้ในครัว</td>
                                    <td><a class="w3-button w3-white w3-border w3-border-yellow w3-round-large" href="/edittypeitem">แก้ไข</a></td>
                                    <td><a class="w3-button w3-white w3-border w3-border-red w3-round-large" href="#">ลบ</a></td>
                                </tr>
                                <tr>
                                        <td>2</td>
                                        <td>ของใช้นอกสถานที่</td>
                                        <td><a class="w3-button w3-white w3-border w3-border-yellow w3-round-large" href="/edittypeitem">แก้ไข</a></td>
                                        <td><a class="w3-button w3-white w3-border w3-border-red w3-round-large" href="#">ลบ</a></td>
>>>>>>> 4e998ba8a03cca61a6295423d0c1de3264f5780b
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                        <div class="clearfix"></div>
                        <ul class="pagination pull-right">
                            {!! $data->onEachSide(1)->links() !!}
                        </ul>

                    </div>
<<<<<<< HEAD

                </div>
            </div>
        </font>
    </form>
</div>
@endsection
@section('script')
@parent
@endsection
=======
    </font>
      </form>
</div>
    @endsection
>>>>>>> 4e998ba8a03cca61a6295423d0c1de3264f5780b
