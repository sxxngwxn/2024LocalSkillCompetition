// support by [parkmini]

// visitors.json 가져오기
async function visitorsData() {
    return fetch("/선수제공파일/B_Module/visitors.json")
    .then(object => {return object.json()})
    .then(datas => {return datas["data"]})
}

async function initChartData() {
    const data = await visitorsData();

    data.forEach((league) => {
        $("#leagueSelect").append(new Option(league.name, league.name));
    });
    // visitorData 수 만큼 #leagueSelect에 option을 추가

    const days = ["월", "화", "수", "목", "금", "토", "일"]
    days.forEach((day) => {
        $("#daySelect").append(new Option(day, day));
    });
    // days수 만큼 #daySelect에 option을 추가

}

$("#leagueSelect", "#daySelect", "#directionSelect")
    .change(() => {
        const leagueData = $("#leagueSelect").val()
        const dayData = $("#daySelect").val()
        const directionData = $("#directionSelect").val()
        // updateChart(data, leagueData, dayData, directionData)
        console.log(leagueData, dayData, directionData);
    }).change()

initChartData()

// function updateChart(visitorData, leagueData, dayData, directionData) {
//     const league = visitorData.find((l) => l.name === leagueData)
//     const day = league.find((d) => d.day === dayData)


//     console.log();
// }