<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Таблица умножения</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <style type="text/css">
   .table { 
    border: 1px solid green;
    padding: 0px;
	border-spacing: 5px;
	
    }
   td {
	border: 1px solid #E3E3E3;
	text-align: center;
	width: 30px;
	height: 30px;
	transition-duration: 0.5s;
	border-spacing: 5px;
	opacity: 1;
	}

	td1:hover {
	background: gray;
	color: white;
	}

  </style>
  
</head>
<body>

<?php
$tr = 21;
$td = 21;
	echo "<center><table class='table'>";
	for ($i=1; $i < $tr ; $i++) { 
		
		echo "<tr>";
			for ($k=1; $k < $td; $k++) { 
				static $class;
				$class += 1;
				echo '<td class='.$class.'>'.$k*$i.'</td>';

			}
		
		echo "</tr>";
	}
	echo "</table></center>";

echo '<br/><center>Моля преместете мишката върху мрежата, преди да натискате никакви бутони :)<br/></center>';
echo "<br/><center><button id='start'>Старт</button><span> :) :) :) </span><button id='clear'>Изчисти</button></center>";
echo "<br/><center><button id='stop'>Стоп</button></center>";

?>

<script type="text/javascript">

//$(document).ready( function () {

 	function getNumber (min, max) {
		return Math.floor(Math.random() * (max - min + 1)) + min;
	}

	function get_random_color() {
	    var letters = '0123456789ABCDEF'.split('');
	    var color = '#';
	    	for (var i = 0; i < 6; i++ ) {
				color += letters[Math.round(Math.random() * 15)];
		   	}
	    	return color;
	}

	//var = Math.random();
	function changeColor () {
		var randName = getNumber (1, 400);
		var randomColor = get_random_color();
		$('.'+randName).css('background', randomColor);
		var randName = getNumber (1, 400);
		//alert(randName);
	};

	function changeTextColor () {
		var randName = getNumber (1, 400);
		var randomColor = get_random_color();
		//alert(randName);
		$('.'+randName).css('color', randomColor);
		//alert(randName);
	};

	
	$('#start').click( function() {

	//var intervalID1;
	var intervalID1;
	var intervalID2;

	$(document).ready(
	function timer1 () {
		intervalID1 = setInterval("changeColor()", 30);
		//clearInterval(intervalID1);
	});
	
	$('#stop').click(function () {
		clearInterval(intervalID1);
		clearInterval(intervalID2);
	});
		
	$(document).ready(
	function timer2 () {
		intervalID2 = setInterval("changeTextColor()", 30);
	});

	});
	
	//$(document).ready(
	//function () {

	$('td').mouseover(function() {
		//alert('Ok');
		var thiss = this;
		var randomColor = get_random_color();
		setTimeout(function () {$(thiss).css('background', '').css('color', '')}, 3000);
		$(this).css('background', randomColor);
		setTimeout(function () {$(thiss).hide(1500)}, 2000);
		//$(this).hide(2000);	
			
	});
/*
function sto (x) {
		$(x).css('background', 'red');
		}
*/

	//setTimeout("$(this).css('background', 'red')", 1);

	$('td').dblclick(function() {
		//alert('Ok');
		//var randomColor = get_random_color();
		$('td').css('background', '');
		$('td').css('color', '');
		//$('td').hide(2000);
	});

	$('td').click(function() {
		changeTextColor();
		//alert('Ok');
		//var randomColor = get_random_color();
		//$('td').css('background', '');
	});

	$('#clear').click(function () {
		$('td').fadeIn("slow");
		$('td').css('background', '');
		$('td').css('color', '');
		

	});



	//clearInterval(intervalID)


	//});

//});
</script>

</body>
</html>
