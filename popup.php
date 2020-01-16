<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
</head>
<body>
<div class="w3-container">
  <h2>W3.CSS Modal</h2>
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
<form id="form1" name="form1" method="post" action="">
  <label>Nome
  <input type="text" name="textfield" />
  </label>
</form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
