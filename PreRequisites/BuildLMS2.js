$(document).ready(function()
{
    particlesJS.load('BackgroundPOINT', 'PreRequisites/ParticlesJSON/BuildLMS/particlesjs-config.json');
    GET_SCHEDULE_HINT();
    $(".HTMLBody").hide().attr("hidden", false).show("fade", 500);
    $('img').on('dragstart', false);
});

function GET_SCHEDULE_HINT()
{
    const LMS_TYPE = ['LECTURE','QUIZ','EXAM','ASSIGNMENT','TASK','ANNOUCEMENT','FORUM','SURVEY','MONITORING'];
    const FD = new FormData();
    FD.append("LMS_TYPE", JSON.stringify(LMS_TYPE));
    FD.append("Action", '1');
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState===4 && this.status===200 && MY_ERROR_LISTENER(this.responseText)===false) {
            const RESULTS = eval("(" + this.responseText + ")");
            for(let X=0;X<RESULTS.length;X++) {const DATA_SCHEDULE = atob(RESULTS[X]); $('.COLLAPSE_DATA:eq('+X+')').html(DATA_SCHEDULE);}
        }}
    xmlhttp.open("POST", "Compose2.php?PH="+Date.now(), true);
    xmlhttp.send(FD);
}