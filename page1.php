<div class="form-section form-position">
<h2 class="fs-title-sec2">4. ที่อยู่สำหรับที่จะนำมาขอสินเชื่อ</h2>
<div class="row">
<div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-12">
<div class="form-group">
<label>ชื่อโครงการ</label><span class="require-red">*</span>
<div class="input textAlign-left position-relative select-diasbled" ng-class="{'select-diasbled' : lockInput , 'alert-danger-form':hInfo.propertyProjectName =='' &amp;&amp; firstTimeApplication == '1'}">
<input type="text" class="form-control fontSize-s fontFamily-thonburi boxShadow-none ng-pristine ng-untouched ng-valid ng-not-empty" name="propertyProjectName" ng-model="hInfo.propertyProjectName" uib-tooltip-html="textPropertyProjectName" tooltip-trigger="'focus'" tooltip-placement="bottom" ng-class="{'alert-danger-form':hInfo.propertyProjectName =='' &amp;&amp; firstTimeApplication == '1'}">
</div>
</div>
</div>
<div class="col-md-5 col-sm-5 col-xs-12">
<div class="form-group">
<label>ประเภทที่อยู่อาศัย</label><span class="require-red">*</span>
<div class="select select-center paddingTop-1 select-diasbled" ng-class="{'select-diasbled' : lockInput , 'alert-danger-form':hInfo.properyType =='' &amp;&amp; firstTimeApplication == '1'}">
<select class="fontSize-s fontFamily-thonburi ng-pristine ng-untouched ng-valid ng-not-empty" name="properyType" ng-model="hInfo.properyType" ng-disabled="lockInput" ng-class="{'alert-danger-form':hInfo.properyType =='' &amp;&amp; firstTimeApplication == '1'}" disabled="disabled">
<option value="" disabled="" selected="">โปรดเลือก</option>
<option value="1">บ้านเดี่ยว</option>
<option value="2">บ้านแฝด</option>
<option value="3">ทาวน์เฮ้าส์/ทาวน์โฮม</option>
<option value="6">ห้องชุดพักอาศัย(คอนโดมิเนียม)</option>
<option value="4">อาคารพาณิชย์/ตึกแถว(ใช้ประกอบธุรกิจ)</option>
<option value="5">อาคารพาณิชย์/ตึกแถว(ใช้เป็นที่อยู่อาศัย)</option>
<option value="7">อาคารพาณิชย์/ตึกแถว(ใช้ประกอบธุรกิจ+ใช้เป็นที่อยู่อาศัยเอง)</option>
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-12">
<div class="form-group">
<label>ตำบล</label><span class="require-red">*</span>
<div class="input textAlign-left position-relative">
<input type="text" class="form-control fontSize-s fontFamily-thonburi boxShadow-none ng-pristine ng-untouched ng-valid ng-not-empty" name="deedAddressSubDistrict" ng-model="hInfo.deedAddressSubDistrict" ng-change="deedAddressCheck()" ng-disabled="lockInput" ng-class="{'alert-danger-form':hInfo.deedAddressSubDistrict =='' &amp;&amp; firstTimeApplication == '1'}" disabled="disabled">
</div>
</div>
</div>
<div class="col-md-5 col-sm-5 col-xs-12">
<div class="form-group">
<label>จังหวัด</label><span class="require-red">*</span>
<div class="select select-center paddingTop-1 select-diasbled" ng-class="{'select-diasbled' : lockInput , 'alert-danger-form':hInfo.deedAddressProvince =='' &amp;&amp; firstTimeApplication == '1'}">
<select class="fontSize-s fontFamily-thonburi ng-pristine ng-untouched ng-valid ng-not-empty" name="deedAddressProvince" ng-model="hInfo.deedAddressProvince" ng-disabled="lockInput" ng-change="updateAmphur1(1); deedAddressCheck();" ng-class="{'alert-danger-form':hInfo.deedAddressProvince =='' &amp;&amp; firstTimeApplication == '1'}" disabled="disabled">
<option value="" disabled="" selected="">โปรดเลือก</option>
<!-- ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="กรุงเทพมหานคร" class="ng-binding ng-scope">กรุงเทพมหานคร</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="กระบี่" class="ng-binding ng-scope">กระบี่</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="กาญจนบุรี" class="ng-binding ng-scope">กาญจนบุรี</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="กาฬสินธุ์" class="ng-binding ng-scope">กาฬสินธุ์</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="กำแพงเพชร" class="ng-binding ng-scope">กำแพงเพชร</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ขอนแก่น" class="ng-binding ng-scope">ขอนแก่น</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="จันทบุรี" class="ng-binding ng-scope">จันทบุรี</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ฉะเชิงเทรา" class="ng-binding ng-scope">ฉะเชิงเทรา</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ชลบุรี" class="ng-binding ng-scope">ชลบุรี</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ชัยนาท" class="ng-binding ng-scope">ชัยนาท</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ชัยภูมิ" class="ng-binding ng-scope">ชัยภูมิ</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ชุมพร" class="ng-binding ng-scope">ชุมพร</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ตรัง" class="ng-binding ng-scope">ตรัง</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ตราด" class="ng-binding ng-scope">ตราด</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ตาก" class="ng-binding ng-scope">ตาก</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="นครนายก" class="ng-binding ng-scope">นครนายก</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="นครปฐม" class="ng-binding ng-scope">นครปฐม</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="นครพนม" class="ng-binding ng-scope">นครพนม</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="นครราชสีมา" class="ng-binding ng-scope">นครราชสีมา</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="นครศรีธรรมราช" class="ng-binding ng-scope">นครศรีธรรมราช</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="นครสวรรค์" class="ng-binding ng-scope">นครสวรรค์</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="นนทบุรี" class="ng-binding ng-scope">นนทบุรี</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="นราธิวาส" class="ng-binding ng-scope">นราธิวาส</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="น่าน" class="ng-binding ng-scope">น่าน</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="บึงกาฬ" class="ng-binding ng-scope">บึงกาฬ</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="บุรีรัมย์" class="ng-binding ng-scope">บุรีรัมย์</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ปทุมธานี" class="ng-binding ng-scope">ปทุมธานี</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ประจวบคีรีขันธ์" class="ng-binding ng-scope">ประจวบคีรีขันธ์</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ปราจีนบุรี" class="ng-binding ng-scope">ปราจีนบุรี</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ปัตตานี" class="ng-binding ng-scope">ปัตตานี</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="พระนครศรีอยุธยา" class="ng-binding ng-scope">พระนครศรีอยุธยา</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="พะเยา" class="ng-binding ng-scope">พะเยา</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="พังงา" class="ng-binding ng-scope">พังงา</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="พัทลุง" class="ng-binding ng-scope">พัทลุง</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="พิจิตร" class="ng-binding ng-scope">พิจิตร</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="พิษณุโลก" class="ng-binding ng-scope">พิษณุโลก</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ภูเก็ต" class="ng-binding ng-scope">ภูเก็ต</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="มหาสารคาม" class="ng-binding ng-scope">มหาสารคาม</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="มุกดาหาร" class="ng-binding ng-scope">มุกดาหาร</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ยะลา" class="ng-binding ng-scope">ยะลา</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ยโสธร" class="ng-binding ng-scope">ยโสธร</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ร้อยเอ็ด" class="ng-binding ng-scope">ร้อยเอ็ด</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ระนอง" class="ng-binding ng-scope">ระนอง</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ระยอง" class="ng-binding ng-scope">ระยอง</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ราชบุรี" class="ng-binding ng-scope">ราชบุรี</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ลพบุรี" class="ng-binding ng-scope">ลพบุรี</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ลำปาง" class="ng-binding ng-scope">ลำปาง</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ลำพูน" class="ng-binding ng-scope">ลำพูน</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="ศรีสะเกษ" class="ng-binding ng-scope">ศรีสะเกษ</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="สกลนคร" class="ng-binding ng-scope">สกลนคร</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="สงขลา" class="ng-binding ng-scope">สงขลา</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="สตูล" class="ng-binding ng-scope">สตูล</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="สมุทรปราการ" class="ng-binding ng-scope">สมุทรปราการ</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="สมุทรสงคราม" class="ng-binding ng-scope">สมุทรสงคราม</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="สมุทรสาคร" class="ng-binding ng-scope">สมุทรสาคร</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="สระบุรี" class="ng-binding ng-scope">สระบุรี</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="สระแก้ว" class="ng-binding ng-scope">สระแก้ว</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="สิงห์บุรี" class="ng-binding ng-scope">สิงห์บุรี</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="สุพรรณบุรี" class="ng-binding ng-scope">สุพรรณบุรี</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="สุราษฎร์ธานี" class="ng-binding ng-scope">สุราษฎร์ธานี</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="สุรินทร์" class="ng-binding ng-scope">สุรินทร์</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="สุโขทัย" class="ng-binding ng-scope">สุโขทัย</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="หนองคาย" class="ng-binding ng-scope">หนองคาย</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="หนองบัวลำภู" class="ng-binding ng-scope">หนองบัวลำภู</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="อ่างทอง" class="ng-binding ng-scope">อ่างทอง</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="อำนาจเจริญ" class="ng-binding ng-scope">อำนาจเจริญ</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="อุดรธานี" class="ng-binding ng-scope">อุดรธานี</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="อุตรดิตถ์" class="ng-binding ng-scope">อุตรดิตถ์</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="อุทัยธานี" class="ng-binding ng-scope">อุทัยธานี</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="อุบลราชธานี" class="ng-binding ng-scope">อุบลราชธานี</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="เชียงราย" class="ng-binding ng-scope">เชียงราย</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="เชียงใหม่" class="ng-binding ng-scope">เชียงใหม่</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="เพชรบุรี" class="ng-binding ng-scope">เพชรบุรี</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="เพชรบูรณ์" class="ng-binding ng-scope">เพชรบูรณ์</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="เลย" class="ng-binding ng-scope">เลย</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="แพร่" class="ng-binding ng-scope">แพร่</option><!-- end ngRepeat: province in uData.provinces --><option ng-repeat="province in uData.provinces" value="แม่ฮ่องสอน" class="ng-binding ng-scope">แม่ฮ่องสอน</option><!-- end ngRepeat: province in uData.provinces -->
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-12">
<div class="form-group">
<label>อำเภอ</label><span class="require-red">*</span>
<div class="select select-center paddingTop-1 select-diasbled" ng-class="{'select-diasbled' : lockInput , 'alert-danger-form':hInfo.deedAddressDistrict =='' &amp;&amp; firstTimeApplication == '1'}">
<select class="fontSize-s fontFamily-thonburi ng-pristine ng-untouched ng-valid ng-not-empty" name="deedAddressDistrict" ng-model="hInfo.deedAddressDistrict" ng-disabled="lockInput" ng-change="updateZipcode1(); deedAddressCheck();" ng-class="{'alert-danger-form':hInfo.deedAddressDistrict =='' &amp;&amp; firstTimeApplication == '1'}" disabled="disabled">
<option value="" disabled="" selected="">โปรดเลือก</option>
<!-- ngRepeat: amphur in uData.amphurs1 --><option ng-repeat="amphur in uData.amphurs1" value="ด่านมะขามเตี้ย" class="ng-binding ng-scope">ด่านมะขามเตี้ย</option><!-- end ngRepeat: amphur in uData.amphurs1 --><option ng-repeat="amphur in uData.amphurs1" value="ทองผาภูมิ" class="ng-binding ng-scope">ทองผาภูมิ</option><!-- end ngRepeat: amphur in uData.amphurs1 --><option ng-repeat="amphur in uData.amphurs1" value="ท่าม่วง" class="ng-binding ng-scope">ท่าม่วง</option><!-- end ngRepeat: amphur in uData.amphurs1 --><option ng-repeat="amphur in uData.amphurs1" value="ท่ามะกา" class="ng-binding ng-scope">ท่ามะกา</option><!-- end ngRepeat: amphur in uData.amphurs1 --><option ng-repeat="amphur in uData.amphurs1" value="บ่อพลอย" class="ng-binding ng-scope">บ่อพลอย</option><!-- end ngRepeat: amphur in uData.amphurs1 --><option ng-repeat="amphur in uData.amphurs1" value="พนมทวน" class="ng-binding ng-scope">พนมทวน</option><!-- end ngRepeat: amphur in uData.amphurs1 --><option ng-repeat="amphur in uData.amphurs1" value="ศรีสวัสดิ์" class="ng-binding ng-scope">ศรีสวัสดิ์</option><!-- end ngRepeat: amphur in uData.amphurs1 --><option ng-repeat="amphur in uData.amphurs1" value="สังขละบุรี" class="ng-binding ng-scope">สังขละบุรี</option><!-- end ngRepeat: amphur in uData.amphurs1 --><option ng-repeat="amphur in uData.amphurs1" value="หนองปรือ" class="ng-binding ng-scope">หนองปรือ</option><!-- end ngRepeat: amphur in uData.amphurs1 --><option ng-repeat="amphur in uData.amphurs1" value="ห้วยกระเจา" class="ng-binding ng-scope">ห้วยกระเจา</option><!-- end ngRepeat: amphur in uData.amphurs1 --><option ng-repeat="amphur in uData.amphurs1" value="เมืองกาญจนบุรี" class="ng-binding ng-scope">เมืองกาญจนบุรี</option><!-- end ngRepeat: amphur in uData.amphurs1 --><option ng-repeat="amphur in uData.amphurs1" value="เลาขวัญ" class="ng-binding ng-scope">เลาขวัญ</option><!-- end ngRepeat: amphur in uData.amphurs1 --><option ng-repeat="amphur in uData.amphurs1" value="ไทรโยค" class="ng-binding ng-scope">ไทรโยค</option><!-- end ngRepeat: amphur in uData.amphurs1 -->
</select>
</div>
</div>
</div>
<div class="col-md-5 col-sm-5 col-xs-12">
<div class="form-group">
<label>รหัสไปรษณีย์</label><span class="require-red">*</span>
<div class="input textAlign-left position-relative">
<input type="text" class="form-control fontSize-s fontFamily-thonburi boxShadow-none ng-pristine ng-untouched ng-valid ng-isolate-scope ng-not-empty" name="deedAddressZipCode" ng-model="hInfo.deedAddressZipCode" awnum="" num-neg="false" num-int="5" ng-class="{'alert-danger-form':hInfo.deedAddressZipCode =='' &amp;&amp; firstTimeApplication == '1'}" disabled="">
</div>
</div>
</div>
</div>
</div>
<!-- spatr2 -->
<div class="form-section form-position">
<h2 class="fs-title-sec2">5. ที่อยู่ที่สามารถติดต่อได้</h2>
<div class="row">
<div class="col-xs-12 col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-1 form-control-field">
<div class="form-group">
<label class="containerRadio">ที่เดียวกับที่จะนำมาขอกู้
<input type="radio" name="radio3" ng-click="updateRadio('documentShippingOtherAddress',1)" ng-model="uInfo.documentShippingOtherAddress" value="1" ng-disabled="lockInput" class="ng-pristine ng-untouched ng-valid ng-not-empty" disabled="disabled">
<span class="checkmark" ng-class="{'alert-danger-radio':(uInfo.documentShippingOtherAddress == '' || uInfo.documentShippingOtherAddress == undefined) &amp;&amp; firstTimeApplication == '1'}" ng-disabled="lockInput" disabled="disabled"></span>
</label>
</div>
</div>
<div class="col-xs-12 col-md-5 col-sm-5 form-control-field">
<div class="form-group">
<label class="containerRadio">ที่อยู่ใหม่
<input type="radio" name="radio3" ng-model="uInfo.documentShippingOtherAddress" value="2" ng-disabled="lockInput" class="ng-pristine ng-untouched ng-valid ng-not-empty" disabled="disabled">
<span class="checkmark" ng-class="{'alert-danger-radio':(uInfo.documentShippingOtherAddress == '' || uInfo.documentShippingOtherAddress == undefined) &amp;&amp; firstTimeApplication == '1'}" ng-disabled="lockInput" disabled="disabled"></span>
</label>
</div>
</div>
</div>
<!-- ngIf: uInfo.documentShippingOtherAddress==2 -->
</div>
<!-- spera3 -->
<div class="form-section form-position">
<h2 class="fs-title-sec2">6. ผู้กู้ร่วม</h2>
<div class="row">
<div class="col-xs-12 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 form-control-field">
<div class="form-group">
<div>
<label class="containerRadio">ไม่มี
<input type="radio" name="radio2" ng-model="tInfo.hasCoborrower" value="2" ng-disabled="lockInput" class="ng-pristine ng-untouched ng-valid ng-not-empty" disabled="disabled">
<span class="checkmark" ng-class="{'alert-danger-radio':(coborrowerRadio == '' || coborrowerRadio == undefined) &amp;&amp; firstTimeApplication == '1'}" ng-disabled="lockInput" disabled="disabled"></span>
</label>
</div>
</div>
</div>
<div class="col-xs-12 col-md-3 col-sm-3 form-control-field">
<div class="form-group">
<label class="containerRadio">มีผู้กู้ร่วม
<input type="radio" name="radio2" ng-model="tInfo.hasCoborrower" value="1" ng-disabled="lockInput" class="ng-pristine ng-untouched ng-valid ng-not-empty" disabled="disabled">
<span class="checkmark" ng-class="{'alert-danger-radio':(coborrowerRadio == '' || coborrowerRadio == undefined) &amp;&amp; firstTimeApplication == '1'}" ng-disabled="lockInput" disabled="disabled"></span>
</label>
</div>
</div>
<div class="col-xs-12 col-sm-5 form-control-field">

<div ng-show="tInfo.hasCoborrower == 1" class="">

<div class="row">
<div class="col-xs-12 col-sm-9 col-sm-offset-1 col-md-8 col-md-offset-2">
<div class="select select-center paddingTop-1 select-diasbled" ng-class="{'select-diasbled' : lockInput , 'alert-danger-form':tInfo.coborrowerAmount =='' &amp;&amp; firstTimeApplication == '1' || tInfo.coborrowerAmount == null &amp;&amp; firstTimeApplication == '1'}">
<select class="fontFamily-thonburi fontSize-s ng-pristine ng-untouched ng-valid ng-not-empty" name="coborrowerAmount" ng-model="tInfo.coborrowerAmount" ng-disabled="lockInput" ng-class="{'alert-danger-form':tInfo.coborrowerAmount =='' &amp;&amp; firstTimeApplication == '1' || tInfo.coborrowerAmount == null &amp;&amp; firstTimeApplication == '1' || tInfo.coborrowerAmount == '0' &amp;&amp; firstTimeApplication == '1'}" disabled="disabled">
<option value="0" disabled="" selected="">โปรดเลือก</option>
<option value="1">1 คน</option>
<option value="2">2 คน</option>
<option value="3">3 คน</option>
<option value="4">4 คน</option>
</select>
</div>
</div>
</div>

</div>
</div>
</div>
</div>