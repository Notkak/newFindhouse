<ul class="breadcrumb">
  <li>
    <i class="icon-home"></i>
    <a href="#">Home</a>
    <i class="icon-angle-right"></i>
  </li>
</ul>
<h1>รายการประกาศของคุณ</h1>
<?php
  $create_property=base_url()."property/create";
?>
<p style="margin-top: 30px;">
<a href="<?= $create_property ?>"><button class="btn btn-large btn-primary">สร้างประกาศใหม่</button></a></p>


<div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-header" data-original-title>
      <h2><i class="halflings-icon white user"></i><span class="break"></span>Members</h2>
      <div class="box-icon">
        <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
      </div>
    </div>
    <div class="box-content">
      <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
          <tr>
            <th>หมายเลขประกาศ</th>
            <th>ชื่อประกาศ</th>
            <th>วันที่สร้างประกาศ</th>
            <th>สถานะการอนุมัติ</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td>xxx</td>
          <td class="center">xxx</td>
          <td class="center">xxx</td>
          <td class="center">
            <span class="label label-success">Yes</span>
          </td>
          <td class="center">
            <a class="btn btn-success" href="#">
              <i class="halflings-icon white zoom-in"></i>
            </a>
            <a class="btn btn-info" href="#">
              <i class="halflings-icon white edit"></i>
            </a>
            <a class="btn btn-danger" href="#">
              <i class="halflings-icon white trash"></i>
            </a>
          </td>
        </tr>

        </tbody>
      </table>
    </div>
  </div><!--/span-->

</div><!--/row-->
