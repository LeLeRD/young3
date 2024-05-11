document.addEventListener('DOMContentLoaded', get_questions)
document.addEventListener('click', clicado)
function get_questions(){
const QUESTION_CARD= document.getElementById('question-card')
const QUESTION_ELEMENT = document.querySelector('question')
const OPTIONS = document.querySelectorAll('input[type=radio]')
const BUTTON_LABELS = document.getElementById('label')
const BUTTON = document.getElementById('submit')
const RESULT_DIV = document.getElementById('result')  
    let current_question_index = 0  
    let question = []


    fetch('get_questions.php')
    .then(response=>response.json())
    .then(data=>{
        question= data
        show_quations()
    })

}


function show_question()
{
    if (current_question_index<quesetions.length)
    {
        const QUESTION = questions[corrent_question_index]
        QUESTION_ELEMENT. textContent = QUESTION.question
        OPTIONS_LABEL[1].textContent = QUESTION.option1
        OPTIONS_LABEL[2].textContent = QUESTION.option2
        OPTIONS_LABEL[3].textContent = QUESTION.option3
        OPTIONS_LABEL[4].textContent = QUESTION.option4
        
    }

    
}

function show_result()
{
    RESULT_DIV.textContent = 'fim do quiz'
}

function clicado()
{
    const SELECT_OPTION = document.querySelector('input[name=option]:checked')
    if (SELECT_OPTION)
    {
        const ANSWEWR = SELECT_OPTION.nextElementSibling.textContent
        current_question_index++
        show_question()


    }
    else
    {
        alert('selecione uma opçao antes de enviar')
    }
}
