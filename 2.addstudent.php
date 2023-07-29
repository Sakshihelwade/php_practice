ADD STUDENT
<br><br>
<form action="2.addstudent.backend.php" method="post">
	Name : <input type="text" name="name"><br><br>
	Email : <input type="email" name="mail"><br><br>
	Address : <input type="text" name="address"><br><br>
	Pincode : <input type="text" name="pin" required><br><br>
	Password : <input type="text" name="pwd"><br><br>
	Adhar No. : <input type="text" name="adhar" required><br><br>
	Pan no. : <input type="text" name="pan" required><br><br>
	College name : <input type="text" name="clg"><br><br>
	Instagram AC : <input type="text" name="insta"><br><br>
	Facebook AC : <input type="text" name="fb"><br><br>
	Linked In : <input type="text" name="li"><br><br>
	Select course :
	 <select name="course">
	 	<option>BA</option>
	 	<option>Pharmacy</option>
	 	<option>BE</option>
	 	<option>BBA</option>
	 	<option>BCS</option>
	 	<option>BCA</option>
	 	<option>Masters</option>
	 </select><br><br>
	<button>Submit deatails</button>
</form>