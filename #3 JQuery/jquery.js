
$(document).keydown(function(e) {
	alert("Нажата клавиша: " + e.key);
});

$(document).keydown(function(e) {
	if (e.keyCode == 37 || e.keyCode == 38 || e.keyCode == 39 || e.keyCode == 40) {
		$('#res').append('Нажата клавиша: ' + e.key + ', Код: ' + e.keyCode + '<br>');
	}
});

// ЗАДАЧА #3 (JQUERY)
// 1.	Написать функцию перехвата нажатия клавиш left arrow, right arrow, up arrow, down arrow
// 2.	При нажатии на любую из клавиш появляется alert с названием нажатой клавиши
// 3.	Запрещается использовать любые плагины, которые осуществляют перехват нажатых клавиш
// 4.	Необходимо продолжать результат действия этих клавиш после закрытия alert


