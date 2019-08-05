<html>
<body>
<form>
<input type="text" name="mine" id="mine">
<input type="submit" onclick="test()" value="submit">
<?php
  $abc="<script>document.getElementByID('mine').value</script>";
  echo $abc.'hhhhh';
  ?>
</form>
<script>
var p1 = 'aa';
<?php
echo "<script>document.writeln(p1);</script>";
?>
</script>
</body>
</html>