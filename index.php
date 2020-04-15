<?php
$title= "Источник";
include "header.php"; 
?>

<form action = "send.php" method = "post">

	<p>Имя:<br><input type = "text" name = "name"/> </p>

	<input type = "submit" name = "send" value = "Отправить">

</form>
<label> <input type="checkbox" id ="one" onchange="fun_name()">Пример текста</label>

<label><input type="radio" name="r1" value="1 ">Текст 1</label>
<label><input type="radio" name="r1" value="12">Текст 2</label>
<label><input type="radio" name="r1" value="123">Текст 3</label>
<button onclick = "fun_name()" > Какой элемент выбран</button>

<script type="text/javascript" src="start_js_learning.js"></script>

<!DOCTYPE html>
<html>
<h1>База данных </h1>

</br>

<a href="https://www.youtube.com/watch?v=dbUwdDP6R7o&list=PLrCZzMib1e9reQb3ZXLWVaEu2CM3R54ho" target="_blank"> База данных SQL</a>
<?php
include "footer.php";
?>