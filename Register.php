<!DOCTYPE html>
<html>
<body>

<h2>Register for Tudtu Run</h2>

<form action="/action_page.php">
  Gender :
  <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other
  <br><br>

  First name :
  <input type="text" name="firstname" value="">
  <br><br>

  Last name :
  <input type="text" name="lastname" value="">
  <br><br>

  Date Of Birth :
  <input type="text" name="lastname" value="DD/MM/YYYY">
  <br><br>

  Tel :
  <input type="text" name="firstname" value="">
  <br><br>

  Email :
  <input type="text" name="firstname" value="">
  <br><br>

  ประเภทการแข่งขัน :
  <input list="Type" name="Type">
  <datalist id="Type">
    <option value="5 Km">
    <option value="10 Km">
    <option value="21 Km">
    <option value="42 Km">
  </datalist>
  <br><br>

  ขนาดเสื้อ :
  <input type="radio" name="size" value="s" checked> S
  <input type="radio" name="size" value="s" checked> M
  <input type="radio" name="size" value="s" checked> L
  <input type="radio" name="size" value="s" checked> XL
  <br><br>
    <input type="submit" value="Confirm">
</form>
</body>
</html>
