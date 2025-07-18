<?php
if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
?>
<h3>str_contains() がtrueを返しました</h3>
<center>あなたはFirefoxを使用しています</center>
<?php
} else {
?>
<h3>str_contains()がfalseを返しました</h3>
<center>あなたはFirefoxを使用していません</center>
<?php
}
?>
