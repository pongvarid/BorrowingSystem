@extends('layout')

@section('title','รายการประเภทพัสดุของสงฆ์')
@section('header')
@parent
@endsection
@section('aside')
@stopsection

@section('content')
<div class="w3-container">
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
			<h1>รายการประเภทพัสดุของสงฆ์</h1>
		</font>
	</div>
	<div class="row">
		<div class="col-lg-8">
			<a class="w3-button w3-white w3-border w3-border-green w3-round-large" href="{{route('typeitem.create')}}">
				เพิ่ม
			</a>
		</div>

	</div><br>
	<form>
		<font color="black">
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive col-md-12">
						<table id="mytable" class="w3-table-all">
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
										<td><a class="btn btn-warning" href="{{ route('typeitem.edit',$datas->id)}}">แก้ไข</a></td>
										<td>
											<form action="{{ route('typeitem.destroy', $datas->id)}}" method="post">
												@csrf
												@method('DELETE')
												<button class="btn btn-danger" type="submit">Delete</button>
											</form>
										</td>

									<?php } ?>
							</tbody>
						</table>

						<div class="clearfix"></div>
						<ul class="pagination pull-right">
							{!! $data->onEachSide(1)->links() !!}
						</ul>

					</div>
				</div>
			</div>
		</font>
	</form>
</div> @endsection @section('script') @parent @endsection</font>
</form>
</div> @endsection
