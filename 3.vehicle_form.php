
<a href="vehicle_list.php"><button>SEE LIST</button></a>

<form action="3.vehicle_form.backend.php" method="post">
	Vehicle No* <input type="text" name="vehicle_no" required><br><br>
	Vehicle Chessie No. <input type="text" name="vehicle_chessie"><br><br>
	Vehicle Model* <input type="text" name="vehicle_model" required><br><br>
	Owner Name* <input type="text" name="vehicle_owner" required><br><br>
	Company
	 <select name="vehicle_company" required>
	 	<option></option>
	 	<option>Hero</option>
	 	<option>Honda</option>
	 	<option>Yamaha</option>
	 	<option>Bajaj</option>
	 	<option>TVS</option>
	 </select><br><br>
	 <button>Save details</button>
</form>