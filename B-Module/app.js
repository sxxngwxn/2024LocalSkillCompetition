// support by [parkmini]

// visitors.json 가져오기
async function visitorsData() {
    return fetch("/선수제공파일/B_Module/visitors.json")
    .then(object => {return object.json()})
    .then(data => {return data["data"]})
}

async function initChartData() {
    const visitorsData = await visitorsData();

    visitorsData.forEach((league) => {
        $("#leagueSelect").append(new Option(league.name, league.name));
    });
    // visitorData 수 만큼 #leagueSelect에 option을 추가

    const days = ["월", "화", "수", "목", "금", "토", "일"]
    days.forEach((day) => {
        $("#daySelect").append(new Option(day, day));
    });
    // days수 만큼 #daySelect에 option을 추가

    $("#leagueSelect", "#daySelect", "#directionSelect")
        .change(() => {
            const league = $("#leagueSelect").val
            const day = $("#daySelect").val
            const direction = $("#directionSelect").val
            updateChart(visitorsData, league, day, direction)
        })
        .change();
}

function updateChart(visitorData, league, day, direction) {

}