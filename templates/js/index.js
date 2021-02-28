
function getPage (page)
{
    $.get("app/v2/site/getPage/"+page,
        function (response, status) {
            var json = JSON.parse(response);
            if (json.status) {

                if(json.answer[3])
                {
                    writePredictQuestionScreen(json.question,json.answer[1],json.answer[2],json.answer[3]);
                }else{

                    writeQuestionScreen(page,json.question,json.answer[1],json.answer[2]);
                }

            } else {
                alert('Something went wrong! The record could not be deleted.')
            }
        });
}

function writePredictQuestionScreen(question,answer1, answer2, answer3) {

    $("#mainPredict").css("display","block");
    $("#main").css("display","none");
    $("#predictQuestion").html('<p>'+question+'</p>').css("display","block");
    $("#predictAnswer1").html('<p class="answer">'+answer1+'</p>').css("display","block");
    $("#predictAnswer2").html('<p class="answer">'+answer2+'</p>').css("display","block");
    $("#predictAnswer3").html('<p class="answer">'+answer3+'</p>').css("display","block");
}

function writeQuestionScreen(page,question,answer1, answer2) {

    if(answer1.length <= 0)
    {
        $(".home").css("display","block");
        $(".answers").css("display","none")
    }

    $("#mainPredict").css("display","none");
    $("#main").css("display","block");
    $("#question").html('<p>'+question+'</p>').css("display","block");
    $("#answer1").html('<p onclick="getPage('+page+''+'1)" class="answer">'+answer1+'</p>').css("display","block");
    $("#answer2").html('<p onclick="getPage('+page+''+'2)" class="answer">'+answer2+'</p>').css("display","block");
}
