<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>1+1</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery-1.12.3.min.js"></script>
  <script src="js/tmpl.js"></script>
  <script src="js/html2canvas.js"></script>
  <script src="js/script.js"></script>
</head>
<body>

	<script type="text/template" id="program_generate">
	<h2 class="header">1+1</h2>
	<h2 class="header"><%= date %></h3>
	<% 
		function addZeroes(number, length) {
		    var stringNum = String(number);
		    while (stringNum.length < length)
		        stringNum = '0' + stringNum;
		    return stringNum;
		};
		 function getTime(seconds){
			var time = new Date(seconds * 1000);
			return addZeroes(time.getHours(),2) + ":" + addZeroes(time.getMinutes(),2);
		};  %>
		<table>
		<% for(var i = 1; i < programs.length; i++) { %>
			<tr class="item">
				<td class="item_time">
					<%= getTime(programs[i].realtime_begin) %>
				</td>
				<td>
					<image class="item_image" src="<%= programs[i].image.preview %>">
				</td>
				<td><%= programs[i].image.prewiew %></td>
				<td class="item_text">
					<h1 class="title"><%= programs[i].title %></h1>
					<h3 class="subtitle"><%= programs[i].subtitle %></h3>
				</td>
			</tr>
		<% }; %>
		</ul>
	</script>
	
	<input type="button" id="getProgramButton" value="Получить программу канала 1+1 на сегодня (html)">
	<input type="button" id="html2canvasButton" value="Преобразовать в изображение">
	<a href="upload.php"><input type="button" id="addPost" value="Добавить пост"></a>
    <h3><?=$_REQUEST['message'] ?? ''?></h3>
	<div id="results"></div>
	<div id="results-image--box"></div>

</body>
</html>