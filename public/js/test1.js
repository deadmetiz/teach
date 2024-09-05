$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

const headerContainer = document.querySelector('#header');
const listContainer = document.querySelector('#list');
const submitBtn = document.querySelector('#submit');

let score = 0;
let questionIndex = 0;

clearPage();
showQuestion()
submitBtn.onclick = checkAnswer;
function clearPage(){
	headerContainer.innerHTML='';
	listContainer.innerHTML='';
}

function showQuestion(){
	console.log('showQuestion');

	const headerTemplate= `<h2 class="title">%title%</h2>`;
	const title = headerTemplate.replace('%title%',questions[questionIndex]['question']);
	headerContainer.innerHTML = title;
	let answerNumber=1;
	for (answerText of questions[questionIndex]['answers']){

		const questionTemplate = `<li><label><input value="${answerNumber}" type="radio" class="answer" name="answer" /><span>%answer%</span></label></li>`;


		const answerHTML = questionTemplate.replace('%answer%',answerText).replace('%answer%',answerText)

		listContainer.innerHTML +=  answerHTML;
		answerNumber++;

	}

}

function checkAnswer(){
	const checkedRadio = listContainer.querySelector('input[type="radio"]:checked');
    if (!checkedRadio){
		submitBtn.blur();
		return
	}
	const userAnswer = parseInt(checkedRadio.value)
	if (userAnswer  === questions[questionIndex]['correct']){
		score++;
	}
	if (questionIndex !== questions.length-1){
		questionIndex++;
		clearPage();
		showQuestion();
		return;
	} else {
		clearPage();
		showResults()
	}
}

function gotocourses(){
    window.location.href=("/course");
}

function getr(userid, result, course){
    $.ajax({
        url: "change",
        type: 'POST',
        data: {
            userid: userid,
            result: result,
            course: course,
        },
        success: function(data){
            console.log(data);
        }
    })
}
function showResults(){

	const resultsTemplate = `<h2 className="title">%title%</h2><h3 className="summary">%message%</h3><p className="result">%result%</p>`;
	let title, message;
	if (score === questions.length){
		title = 'Поздравляем!';
		message = 'Вы ответили на все вопросы верно';
	} else if ((score*100)/questions.length >=50){
		title = 'Неплохой результат!';
		message = 'Вы дали более половины правильных ответов';
	} else {
		title = 'Стоит постараться';
		message = 'У вас меньше половины правильных ответов';
	}
	let  result = `${score} из ${questions.length}`;
	const  finalMesssage = resultsTemplate.replace('%title%', title).replace('%message%', message).replace('%result%',result)
	headerContainer.innerHTML = finalMesssage;
    score = (score*100)/questions.length;
    getr(userid, score, course);
	submitBtn.blur();
	submitBtn.innerText = 'Закончить тест';
    submitBtn.onclick=gotocourses;
}
