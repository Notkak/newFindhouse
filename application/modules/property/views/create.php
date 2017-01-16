<ul class="breadcrumb">
  <li>
    <i class="icon-home"></i>
    <a href="<?= base_url()."property/manage"; ?>">Home</a>
    <i class="icon-angle-right"></i>
  </li>
  <li>
    <i class="icon-edit"></i>
    <a href="#">Create property</a>
  </li>
</ul>
<h1><?= $headline ?></h1>
<?= validation_errors("<p style='color: red;'>","</p>")?>
<?php
  if(isset($flash)){
    echo $flash;
  }
?>
<div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-header" data-original-title>
      <h2><i class="halflings-icon white edit"></i><span class="break"></span>กรอกข้อมูลด้านล่าง</h2>
    </div>
    <div class="box-content">
      <?php $from_location=base_url()."property/create/".$update_id; ?>
      <form class="form-horizontal" method="post" action="<?php $from_location ?>">
        <fieldset>
          <div class="control-group">
          <label class="control-label" for="focusedInput">ชื่อประกาศ</label>
          <div class="controls">
            <input class="input-xlarge focused" name="propertyname" type="text" value="<?= $propertyname ?>" placeholder="กรุณาใส่ชื่อประกาศ">
          </div>
          </div>
          <div class="control-group">
          <label class="control-label" for="selectError3">ประเภทการประกาศ</label>
          <div class="controls">
            <select name="proptype">
            <option value="" selected>--------- ตัวเลือก ---------</option>
            <option value="ขาย">ขาย</option>
            <option value="ให้เช่า">ให้เช่า</option>
            </select>
          </div>
          </div>
          <div class="control-group">
          <label class="control-label" for="selectError3">ประเภทอสังหาริมทรัพย์</label>
          <div class="controls">
            <select name="ptype">
              <option value="" selected>--------- ตัวเลือก ---------</option>
              <option value="บ้านเดี่ยว">บ้านเดี่ยว</option>
              <option value="ทาวน์เฮ้าส์">ทาวน์เฮ้าส์</option>
              <option value="คอนโด">คอนโด</option>
              <option value="อพาร์ตเมนต์">อพาร์ตเมนต์</option>
              <option value="ที่ดิน">ที่ดิน</option>
            </select>
          </div>
          </div>
          <div class="control-group">
          <label class="control-label" for="selectError3">สถานที่ใกล้เคียง</label>
          <div class="controls">
            <select name="ntype">
              <option value="" selected>--------- ตัวเลือก ---------</option>
              <option value="สถานีรถไฟฟ้าบีทีเอส">สถานีรถไฟฟ้าบีทีเอส</option>
              <option value="สถานีรถไฟฟ้าเอ็มอาร์ที">สถานีรถไฟฟ้าเอ็มอาร์ที</option>
              <option value="โรงพยาบาล">โรงพยาบาล</option>
              <option value="โรงเรียน">โรงเรียน</option>
              <option value="วัด">วัด</option>
              <option value="สถานที่ราชการ">สถานที่ราชการ</option>
              <option value="อื่นๆ">อื่นๆ</option>
            </select>
          </div>
          </div>
          <div class="control-group">
          <label class="control-label" for="focusedInput">ระบุชื่อสถานที่ใกล้เคียง</label>
          <div class="controls">
            <input class="input-xlarge focused" name="ndetail" type="text" value="<?= $ndetail ?>" placeholder="กรุณาระบุชื่อสถานที่ใกล้เคียง">
          </div>
          </div>
          <div class="control-group">
          <label class="control-label" for="focusedInput">รายละเอียดของประกาศ</label>
          <div class="controls">
            <textarea class="form-control" name="detail" rows="4" ><?php echo $detail ?></textarea>
          </div>
          </div>
          <div class="form-actions">
          <button type="submit" class="btn btn-primary" name="submit" value="Submit">บันทึกข้อมูล</button>
          <button class="btn">Cancel</button>
          </div>
        </fieldset>
        </form>

    </div>
  </div><!--/span-->

</div><!--/row-->
