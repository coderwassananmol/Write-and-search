<form action="WriteAndDisplay.php" method="POST">
Name: <br />
<input type="text" name="name">
<br />
Age: <br />
<input type="number" name="age" min="1">
<br />
Gender: <br />
<input type="radio" name="gender" value="Male" checked>Male
<br />
<input type="radio" name="gender" value="Female">Female
<br />
Would you like to search through the file?
<br />
<input type="radio" name="check" value="Yes" checked>Yes
<br />
<input type="radio" name="check" value="No">No
<br />
<input type="submit" name="submit" value="Submit">
</form>
