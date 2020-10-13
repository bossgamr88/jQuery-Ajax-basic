<!-- 
	การส่งข้อมูลด้วย ajax เเบบ post เเละ serialize

	เมื่อส่งค่าเเบบ get เเล้วต้องการส่งเเบบ post เเละมี การส่งจำนวนมากๆ
	จาก form 

	จะทำได้ไหมหรือต้องมานั่งไล่ระบุการทีละตัวหรือเปล่า คำตอบคือ 
	สามารถใช้ serialize ช่วยให้ code อ่านง่ายเเละไม่รก

-->

<div id="titleSuccess">
	<h1>Register Success</h1>
</div>
<div id="form">
	<div>
		Name : <?php echo $_POST['name']; ?>
	</div>
	<div>
		Email : <?php echo $_POST['email']; ?>
	</div>
	<div>
		Password : <?php echo $_POST['password']; ?>
	</div>
	<br>
	<span style="color:red">* Please remember your account.</span>
</div>



