@extends('layout')

@section('title','ข้อมูลพัสดุของสงฆ์')

@section('header')
@parent
@endsection
@section('aside')
@endsection

@section('content')
<div class="container">
	<div class="col-sm-12">

		@if(session()->get('success'))
		<div class="w3-panel w3-green w3-display-container">
			<span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>
			<h3>Success!</h3>
			<p>{{ session()->get('success') }}</p>
		</div>
		@endif @if(session()->get('error'))
		<div class="w3-panel w3-red w3-display-container">
			<span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>
			<h3>Error!</h3>
			<p>{{ session()->get('error') }}</p>
		</div>
		@endif
	</div>
	<div class="col-md-12 text text-center">
		<font color="black">
			<h1>ข้อมูลพัสดุของสงฆ์</h1>
		</font>
		<div class="w3-cell">
			<a class="w3-button w3-white w3-border w3-border-green w3-round-large" href="{{route('itemdata.create')}}">เพิ่ม</a>
		</div>
		<br>
		<form>
			<font color="black">
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive col-md-12">
							<table id="mytable" class="w3-table-all">
								<thead>
									<th>รูปภาพ</th>
									<th>ประเภทพัสดุ</th>
									<th>ชื่อ</th>
									<th>รายละเอียด</th>
									<th>จำนวน</th>
									<th>คงเหลือ</th>
									<th>แก้ไข</th>
									<th>ลบ</th>
								</thead>
								<tbody>
									<?php $i = 1;
									foreach ($data as $datas) { ?>
										<tr>
											<td>รูปขนาด 50*50px</td>
											<td>{{$datas->type_name}}</td>
											<td>{{$datas->item_name}}</td>
											<td>{{$datas->item_detail}}</td>
											<td>{{$datas->item_number}}</td>
											<td>{{$datas->item_remain}}</td>
											<td><a class="w3-button w3-white w3-border w3-border-yellow w3-round-large" href="{{ route('itemdata.edit',$datas->id)}}">แก้ไข</a></td>
											<td>
												<form action="{{ route('itemdata.destroy', $datas->id)}}" method="post">
													@csrf
													@method('DELETE')
													<button class="btn btn-danger" type="submit">Delete</button>
												</form>
											</td>
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
</div>
@endsection
@section('script')
@parent
@endsection