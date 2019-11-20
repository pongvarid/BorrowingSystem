@extends('layout')

@section('title','รายการพัสดุรอพิจารณาการยืม')

@section('header')
@parent
@endsection
@section('aside')
@stopsection

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
						<table id="mytable" class="w3-table-all">
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
								<?php $i = 1;
								foreach ($data as $datas) { ?>
									<tr>
										<td>{{$i}}</td>
										<td>{{$datas->brw_prefix}}{{$datas->brw_firstname}} {{$datas->brw_lastname}}</td>
										<td><a class="w3-button w3-white w3-border w3-border-green w3-round-large" href="{{ route('waititem.show',$datas->id)}}">รายละเอียด</a></td>
										<td>{{$datas->bookitem_day}}</td>
										<td>{{$datas->bookitem_borrowDay}}</td>
										<td>{{$datas->bookitem_deadline}}</td>
										<td><select class="w3-select" id="exampleSelect1" name="bookitem_status" value='{{$datas->bookitem_status}}'>
												<option value="0">รอการพิจารณา</option>
												<option value="1">อนุมัติ</option>
												<option value="2">ไม่อนุมัติ</option>
											</select>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>

						<div class="clearfix"></div>
						<ul class="pagination pull-right">
							{!! $data->links() !!} </ul>
					</div>

				</div>
			</div>
		</font>
	</form>
</div> @endsection</div>
</font>
</form>
</div> @endsection
@section('script')
@parent
@endsection