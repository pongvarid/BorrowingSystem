@extends('layout')

@section('title','รายชื่อผู้ยืม')

@section('content')
 
<h2>จัดการข้อมูลผู้ยืม</h2>
<hr> 
 <form action="/core?type=edit" method="POST">
    @csrf
    <input  value="{{ $user->user_id }}" name="user_id" type="hidden" required><br>
     <input type="text" value="{{ $user->brw_ip }}" name="brw_ip" required ><br>
     <input type="text" value="{{ $user->brw_prefix }}" name="brw_prefix" required ><br>
     <input type="text" value="{{ $user->brw_firstname }}" name="brw_firstname" required ><br>
     <input type="text" value="{{ $user->brw_lastname }}" name="brw_lastname" required ><br>
     <input type="text" value="{{ $user->brw_address }}" name="brw_address" required ><br>
     <input type="text" value="{{ $user->brw_tel }}" name="brw_tel" required > <br>
     <button type="submit">Save</button>
 </form>
 


@endsection