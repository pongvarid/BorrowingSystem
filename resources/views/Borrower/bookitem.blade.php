@extends('layout')

@section('title','จองพัสดุของสงฆ์')

@section('header')
@parent
@endsection

@section('content')
<div class="container">
    <div class="col-md-12 text text-center">
        <font color="black">
            <h1>กรอกรายละเอียดการจองพัสดุของสงฆ์</h1>
        </font>
    </div>
    <font color="black">

</div>
</font>

<div class="container">

        <div class="stepwizard col-md-offset-3">
            <div class="stepwizard-row setup-panel">
              <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>ขั้นตอนที่ 1</p>
              </div>
              <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>ขั้นตอนที่ 2</p>
              </div>
            </div>
          </div>

          <form role="form" action="" method="post">
            <div class="row setup-content" id="step-1">
              <div class="col-xs-6 col-md-offset-3">
                    <div class="form-row">
                            <div class="form-group col-md-12">
                                <h3>รหัสการจอง</h3>
                                <input type="text" class="form-control" id="Bookcode">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <h3>ชื่อ</h3>
                                <input type="text" class="form-control" id="name" placeholder="ชื่อ">
                            </div>
                            <div class="form-group col-md-6">
                                <h3>นามสกุล</h3>
                                <input type="text" class="form-control" id="lastname" placeholder="นามสกุล">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <h3>เหตุผลการใช้งาน</h3>
                                <input type="password" class="form-control" id="Reason" placeholder="เหตุผลการใช้งาน">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-4">
                                <label>วันที่จอง</label>
                                <input class="form-control" type="date" value="2019-08-19" id="Bookday">
                            </div>
                            <div class="col-4">
                                <label>วันที่ยืม</label>
                                <input class="form-control" type="date" value="2019-08-19" id="Borrowday">
                            </div>
                            <div class="col-4">
                                <label>วันที่คืน</label>
                                <input class="form-control" type="date" value="2019-08-19" id="Backday">
                            </div>
                        </div>
                        <div class="form-row">
                            <a class="btn btn-primary nextBtn btn-lg pull-right" >ถัดไป</a>
                        </div>
                </div>
              </div>
            </div>
            <div class="row setup-content" id="step-2">
              <div class="col-xs-6 col-md-offset-3">
                    <div class="form-row">
                            <div class="form-group col-md-8">
                            <h3>รหัสรายละเอียดการจอง</h3>
                              <input type="text" class="form-control" id="name" placeholder="รหัสรายละเอียดการจอง">
                            </div>
                            <div class="form-group col-md-4">
                            <h3>รหัสการจอง</h3>
                              <input type="text" class="form-control" id="lastname" placeholder="รหัสการจอง">
                            </div>
                          </div>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                            <h3>พัสดุ</h3>
                            <select class="form-control" id="exampleSelect1">
                                    <option>โต๊ะ</option>
                                    <option>เก้าอี้</option>
                                    <option>เต็นท์</option>
                                    <option>จาน</option>
                                    <option>ชาม</option>
                                  </select>
                            </div>
                            <div class="form-group col-md-5">
                                <h3>จำนวน</h3>
                                <input type="text" class="form-control" id="Number" placeholder="จำนวน">

                            </div>
                            <div class="form-group col-md-2">

                                    <button type="submit" class="btn btn-succer">เพิ่ม</button>
                                </div>
                        </div>


                                <div class="row">
                                <div class="col-md-12">
                                <div class="table-responsive">
                                <table id="mytable" class="table table-bordred table-striped">
                                    <thead>
                                    <th>ชื่อ</th>
                                    <th>จำนวน</th>
                                    <th>ลบ</th>
                                    </thead>
                                <tbody>
                                    <tr>
                                    <td>โต๊ะ</td>
                                    <td>100</td>
                                    <td><button class="w3-button w3-white w3-border w3-border-red w3-round-large">ลบ</button></td>
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
                                        <div class="form-row">
                                        <a class="w3-button w3-white w3-border w3-border-green w3-round-large" href="/booklist">ตกลง</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

              </div>
            </div>
          </form>

        </div>
@endsection
@section('script')
@parent
@endsection

