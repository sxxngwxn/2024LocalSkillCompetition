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

    const days = ["월", "화", "수", "목", "금", "토", "일"]
    days.forEach((day) => {
        $("#daySelect").append(new Option(day, day));
    });

    $("#leagueSelect", "#daySelect", "#directionSelect")
        .change(() => {
            const league = $("#leagueSelect").val
            const day = $("#daySelect").val
            const direction = $("#directionSelect").val
        })
        .change();
}