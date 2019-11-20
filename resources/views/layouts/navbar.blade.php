<!-- Sidebar/menu -->
<nav class="w3-sidebar box-green w3-collapse w3-top w3-large w3-padding wh" style="z-index:3;width:300px;  color:white;"
    id="mySidebar"><br>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft"
        style="width:100%;font-size:22px">Close Menu</a>
    <div class="w3-container">
        <h3 class="w3-padding-64 wh"><b class="fs18">ระบบ<br><b class="fs30">ยืมคืนพัสดุของสงฆ์</b></h3>
    </div>
    <div class="w3-bar-block">
        <?php 
         session_start();
         if(! $_SESSION["type"] ){
            $_SESSION["type"]  = 2;
         }else{
            $_SESSION["type"]  = 1;
         }
       
        ?>
            @if ($_SESSION["type"] == 1 )
        <a href="/"  class="w3-bar-item w3-button w3-hover-white ">หน้าหลัก</a>
        <a href="/waititem"  class="w3-bar-item w3-button w3-hover-white mrt-40">รายการพัสดุรอพิจารณา</a>
        <a href="/borrowandbackitem"   class="w3-bar-item w3-button w3-hover-white">รายการยืมคืนพัสดุของสงฆ์</a>
        <a href="/typeitem"   class="w3-bar-item w3-button w3-hover-white">ข้อมูลประเภทพัสดุของสงฆ์</a>
        <a href="/itemdata"  class="w3-bar-item w3-button w3-hover-white">จัดการข้อมูลพัสดุของสงฆ์</a>
        <a href="/officermanage"   class="w3-bar-item w3-button w3-hover-white">จัดการข้อมูลเจ้าหน้าที่</a>
        <a href="/borrowermange"  class="w3-bar-item w3-button w3-hover-white">จัดการข้อมูลผู้ยืม</a>
        @endif
        @if ($_SESSION["type"] == 2 )
        <a href="/book" class="w3-bar-item w3-button w3-hover-white">จองพัสดุของสงฆ์</a>
        <a href="/booklist" class="w3-bar-item w3-button w3-hover-white">รายการจองพัสดุของสงฆ์</a>
        <a href="/borrowlist" class="w3-bar-item w3-button w3-hover-white">รายการยืมพัสดุของสงฆ์</a>
        @endif
       
        <a href="/logout"  class="w3-bar-item w3-button w3-hover-white">ออกจากระบบ</a>
    </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large box-green w3-xlarge w3-padding">
    <a href="javascript:void(0)" class="w3-button rounded w3-margin-right" onclick="w3_open()">☰</a>
    <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"
    id="myOverlay"></div>

<style>
.box-green{
    background: rgb(39,201,107);
background: linear-gradient(90deg, rgba(39,201,107,1) 0%, rgba(15,193,155,1) 100%);
}
</style>
