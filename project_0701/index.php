<?php
//登入頁�
// Start the session
session_name('homework');
session_start();
?>
<form name="form1" method="post" action="check.php" >
請輸入學號: <input name="MyHead">
<input type="submit" value="送出">
</form>