<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/autonumeric/4.1.0/autoNumeric.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>

body{
    background-color: #f6f6f6;
}
</style>
<?php include 'header.php';?>
<title>ReFinder</title>
</head>

<body>

<?php include 'manu.php';?>
	<!-- Modal that pops up when you click on "New Message" -->
	<div id="id01" class="w3-modal" style="z-index: 4">
		<div class="w3-modal-content w3-animate-zoom">
			<div class="w3-container w3-padding w3-red">
				<span onclick="document.getElementById('id01').style.display='none'"
					class="w3-button w3-red w3-right w3-xxlarge"><i
					class="fa fa-remove"></i></span>
				<h2>Send Mail</h2>
			</div>
			<div class="w3-panel">
				<label>To</label> <input class="w3-input w3-border w3-margin-bottom"
					type="text"> <label>From</label> <input
					class="w3-input w3-border w3-margin-bottom" type="text"> <label>Subject</label>
				<input class="w3-input w3-border w3-margin-bottom" type="text">
				<input class="w3-input w3-border w3-margin-bottom"
					style="height: 150px" placeholder="What's on your mind?">
				<div class="w3-section">
					<a class="w3-button w3-red"
						onclick="document.getElementById('id01').style.display='none'">Cancel
						 <i class="fa fa-remove"></i>
					</a> <a class="w3-button w3-light-grey w3-right"
						onclick="document.getElementById('id01').style.display='none'">Send
						 <i class="fa fa-paper-plane"></i>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Overlay effect when opening the side navigation on small screens -->
	<div class="w3-overlay w3-hide-large w3-animate-opacity"
		onclick="w3_close()" style="cursor: pointer" title="Close Sidemenu"
		id="myOverlay"></div>

	<!-- Page content -->
	<div class="w3-main" style="margin-left: 320px;">
	<div class ="" >
   <input type="text" value=""  id="test1" > 
    <input type="button" class="w3-btn w3-white w3-border w3-border-red w3-round-large" name="page1" value="page1" onclick ="page1()">
        <input type="button" class="w3-btn w3-white w3-border w3-border-red w3-round-large" name="page2" value="page1" onclick ="page2()">
        <input type="button" class="w3-btn w3-white w3-border w3-border-red w3-round-large" name="page3" value="page1" onclick ="page3()">
    </div>
    <br>
		<div class=""  id="display" style="display: none;">
        <?php include 'page1.php';?>
        </div>
</div>
	<?php include 'Footer.php';?>

</body>




<!-- function -->
<script>
function page1() {
	var ds = document.getElementById("display");
	if(ds.style.display == 'none')
		ds.style.display = 'block';
	else 
		ds.style.display = 'none';
}
function page2() {
	var ds = document.getElementById("display");
	if(ds.style.display == 'block')
		ds.style.display = 'none';
	else 
		ds.style.display = 'block';
}
$(document).ready(function(){
    anElement = new AutoNumeric("#test1");
    $( "select#foo" ).val.toFixed(0);
});
</script>
</html>