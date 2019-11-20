@extends('layout')

@section('title','ตารางรายละเอียดพัสดุรอพิจารณาการยืม')

@section('header')
@parent
@endsection
@section('aside')
@endsection

@section('content')
<div class="container">
	<div class="col-md-12 text text-center">
		<font color="black">
			<h1>ตารางรายละเอียดพัสดุรอพิจารณาการยืม</h1>
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
								<th>จำนวน</th>
							</thead>
							<tbody>
								<?php $i = 0;
								foreach ($data as $datas) {
									$i++ ?>
									<tr>
										<td>{{$i}}</td>
										<td>{{$datas->item_name}}</td>
										<td>{{$datas->bookitemdetail_number}}</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>

						<div class="clearfix"></div>
						<ul class="pagination pull-right">
							{!! $data->links() !!}
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