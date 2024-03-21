// support by [parkmini]

// visitors.json 가져오기
async function visitorsData() {
    return fetch("/선수제공파일/B_Module/visitors.json")
    .then(object => {return object.json()})
    .then(datas => {return datas["data"]})
}

async function initChartData() {
    const visitorData = await visitorsData();

    visitorData.forEach((league) => {
        $("#leagueSelect").append(new Option(league.name, league.name));
    });
    // visitorData 수 만큼 #leagueSelect에 option을 추가

    const days = ["월", "화", "수", "목", "금", "토", "일"]
    days.forEach((day) => {
        $("#daySelect").append(new Option(day, day));
    });
    // days수 만큼 #daySelect에 option을 추가

    $("#leagueSelect, #daySelect, #directionSelect") // ""은 1개;;
        .change(() => {
            const leagueData = $("#leagueSelect").val()
            const dayData = $("#daySelect").val()
            const directionData = $("#directionSelect").val()
            updateChart(visitorData, leagueData, dayData, directionData)
            console.log(leagueData, dayData, directionData);
        })
}

function updateChart(visitorData, leagueData, dayData, directionData) {
    const league = visitorData.find((l) => l.name ===leagueData)
    console.log(league);
    const day = league.visitors.find((d) => d.day === dayData)
    console.log(day);
    const dayVisitor = day.visitor
    const direction  = directionData
    $("#visitorTable").empty()
    $("#visitorChart").empty()
    $("#visitorTable").append(`<thead><th>시간대</th><th>방문자 수</th></thead>`)
    $.each(dayVisitor, (time, person) => {
        $("#visitorTable").append(`<tr><td>${time}</td><td>${person}</td></tr>`)
        const chartVal = (person > 500) ? 500 : person
        if (direction == "horizontal") {
            $('#visitorChart').removeClass('visitorChartV');
            $("#visitorChart").addClass('visitorChartH')
            $("#visitorChart").append(`<div style="width: ${chartVal}px; height: 40px; background-color: #0d6efd; margin: 10px 0;"><p>${person}</p></div>`)
        } else {
            $('#visitorChart').removeClass('visitorChartH');
            $("#visitorChart").addClass('visitorChartV')
            $("#visitorChart").append(`<div style="width: 40px; height: ${chartVal}px; background-color: #0d6efd; display: flex; justify-content: center;"><p>${person}</p></div>`)
        }
    })
}

initChartData()