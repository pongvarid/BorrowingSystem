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
			<h1>เพิ่มรายการพัสดุของสงฆ์</h1>
		</font>
	</div><br>
	<form method="post" action="{{ route('itemdata.store') }}" enctype="multipart/form-data">
		@method('POST')
		@csrf
		<font color="black">
			<div class="w3-cell-row">
				<div class="w3-cell">
					<form>
						<div class="form-group">
							<h3 for="exampleFormControlFile1">เพิ่มรูปภาพ</h3>
							<input type="file" class="w3-input" id="exampleFormControlFile1" name='item_img'>
						</div>
					</form>
				</div>
			</div>
			<div class="w3-cell-row">
				<div class="w3-cell">
					<h3>ประเภทพัสดุ</h3>
					<select class="w3-select" id="exampleSelect1" name="type_id">
						<?php
						foreach ($select as $selects) { ?>
							<option value="{{ $selects->id }}">{{$selects->type_name}}</option>
						<?php } ?>
					</select>
				</div>
				<div class="w3-cell">
					<h3>ชื่อ</h3>
					<input type="text" class="w3-input" id="name" name="item_name" placeholder="ชื่อ">
				</div>
			</div>
			<div class="w3-cell-row">
				<div class="w3-cell">
					<h3>รายละเอียด</h3>
					<input type="text" class="w3-input" id="detail" name="item_detail" placeholder="รายละเอียด">
				</div>
			</div>
			<div class="form-row">
				<div class="w3-cell">
					<h3>จำนวน</h3>
					<input type="text" class="w3-input" id="number" name="item_number" placeholder="จำนวน">
				</div>
				<div class="w3-cell">
					<h3>คงเหลือ</h3>
					<input type="text" class="w3-input" id="remain" name="item_remain" placeholder="คงเหลือ">
				</div>
			</div>
			<br>
			<div class="w3-cell-row">
				<div class="w3-cell">
					<button class="w3-button w3-white w3-border w3-border-green w3-round-large" type="submit">เพิ่ม</button>
					<a class=" w3-button w3-white w3-border w3-border-red w3-round-large" href="/itemdata">ย้อนกลับ</a>
				</div>
			</div>
	</form>
</div>
</font>

</div>
@endsection
@section('script')
@parent
@endsection