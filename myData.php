<!-- 

การดึงข้อมูลด้วย ajax

ทำงานเหมือนกันกับ .load() คือการดึงข้อมูลาเเสดงผล 
เเต่เปลี่ยนมาเป็น .ajax() ความต่าง คือ รูปเเบบการระบุ เเละ สามารถดักจับกรณี ที่มีการโหลดเสร็จ

.load() ใช้กรณีเป็นไฟล์เล็กๆ หรือ ไม่ได้มีการประมวลผลมาก ถ้าจะรับส่งข้อมูลกันจริงๆ ก็เเนะนำ .ajax()

 -->

<h1>My Contacts</h1>
<table width="400px" border="1" cellpadding="10" cellspacing="0">
	<thead>
		<tr bgColor="#aaccff">
			<th>#</th>
			<th>Name.</th>
			<th>Tel.</th>
		</tr>
	</thead>
	<tbody>
		<?php for ($i=1; $i<=10 ; $i++): ?>	
		<tr bgcolor="#eeeeff">
			<td><?php echo $i; ?></td>
			<td>Friend <?php echo $i.rand(1,9); ?></td>
			<td><?php echo rand(0000000000,9999999999); ?></td>
		</tr>
		<?php endfor; ?>	
	</tbody>
</table>
