@extends('layout')

@section('title','เพิ่มรายการพัสดุของสงฆ์')

@section('header')
@parent
@endsection
@section('aside')
@endsection

@section('content')
<div class="container">
	<div class="col-md-12 text text-center">
		<font color="black">
			<h1>แก้ไขรายการพัสดุของสงฆ์</h1>
		</font>
	</div><br><br>
	<form method="post" action="{{ route('itemdata.update', $data->id) }}" enctype="multipart/form-data">
		@method('PUT')
		@csrf
		<font color="black">
			<div class="form-row">
				<div class="form-group col-md-6">
					<div class="form-group">
						<h3 for="exampleFormControlFile1">แก้ไขรูปภาพ</h3>
						<input type="file" class="form-control-file" id="exampleFormControlFile1" value='{{ $data->item_img }}' name='item_img'>
					</div>
				</div>
			</div>
			<div class="w3-cell-row">
				<div class="w3-cell">
					<h3>ประเภทพัสดุ</h3>
					<select class="w3-select" id="exampleSelect1" name="type_id" value='{{ $data->type_id }}'>
						<?php
						foreach ($select as $selects) { ?>
							<option value="{{ $selects->id }}">{{$selects->type_name}}</option>
						<?php } ?>
					</select>
				</div>
				<div class="w3-cell">
					<h3>ชื่อ</h3>
					<input type="text" class="w3-input" id="name" name="item_name" value='{{ $data->item_name }}' placeholder="ชื่อ">
				</div>
			</div>
			<div class="w3-cell-row">
				<div class="w3-cell">
					<h3>รายละเอียด</h3>
					<input type="text" class="w3-input" id="detail" name="item_detail" value='{{ $data->item_detail }}' placeholder="รายละเอียด">
				</div>
			</div>
			<div class="form-row">
				<div class="w3-cell">
					<h3>จำนวน</h3>
					<input type="text" class="w3-input" id="number" name="item_number" value='{{ $data->item_number }}' placeholder="จำนวน">
				</div>
				<div class="w3-cell">
					<h3>คงเหลือ</h3>
					<input type="text" class="w3-input" id="remain" name="item_remain" value='{{ $data->item_remain }}' placeholder="คงเหลือ">
				</div>
			</div>
			<br>
			<div class="w3-cell-row">
				<div class="w3-cell">
					<button class="w3-button w3-white w3-border w3-border-green w3-round-large" type="submit">แก้ไข</button>
					<a class=" w3-button w3-white w3-border w3-border-red w3-round-large" href="/itemdata">ย้อนกลับ</a>
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