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
            // console.log(leagueData, dayData, directionData);
        }).change()
}

// 차트 구현 부분
function updateChart(visitorData, leagueData, dayData, directionData) {
    const league = visitorData.find((l) => l.name ===leagueData)
    // console.log(league);
    const day = league.visitors.find((d) => d.day === dayData)
    // console.log(day);
    const dayVisitor = day.visitor
    const direction  = directionData
    $("#visitorTable").empty()
    $("#visitorChart").empty()
    $("#visitorTable").append(`<thead><th>시간대</th><th>방문자 수</th></thead>`)
    // console.log(dayVisitor);
    $.each(dayVisitor, (time, person) => {
        // console.log(time);
        // console.log(person);
        $("#visitorTable").append(`<tr><td>${time}</td><td>${person}</td></tr>`)
        const chartVal = (person > 500) ? 500 : person
        if (direction == "horizontal") {
            $('#visitorChart').removeClass('visitorChartV');
            $("#visitorChart").addClass('visitorChartH')
            $("#visitorChart").append(`<div style="width: ${chartVal}px; height: 40px; background-color: #0d6efd; margin: 10px 0;"><p style="line-height: 40px;">${person}</p></div>`)
        } else {
            $('#visitorChart').removeClass('visitorChartH');
            $("#visitorChart").addClass('visitorChartV')
            $("#visitorChart").append(`<div style="width: 40px; height: ${chartVal}px; background-color: #0d6efd; display: flex; justify-content: center;"><p>${person}</p></div>`)
        }
    })
}

async function goodsData() {
    return fetch("/선수제공파일/B_Module/goods.json")
    .then(object => {return object.json()})
    .then(goods => {return goods["data"]})
}

async function goodsSeperate(){
    const data = await goodsData()

    arr = []
    data.forEach((arrInput) => {
        arr.push(arrInput.group)
    })
    // console.log(arr);
    const set = new Set(arr)
    // console.log(set);

    set.forEach((group) => {
        $("#goodsGroup").append(new Option(group, group));
    });

    $("#separateOption, #goodsGroup")
        .change(() => {
            const goodsSort = $("#separateOption").val()
            const goodsSelect = $("#goodsGroup").val()
            // console.log(goodsSort);
            // console.log(goodsSelect);
            goodsOnBoard(data, goodsSort, goodsSelect)
    }).change()
}

function goodsOnBoard(goodsData, sortData, groupData) {
    $("#goodsArea").empty()
    // console.log(goodsData, sortData, groupData);

    // // 가격 오름차순
    // goodsData.sort((first, second) => {
    //     return parseInt(first.price) - parseInt(second.price)
    // })

    // // 가격 내림차순
    // goodsData.sort((first, second) => {
    //     return  parseInt(second.price) - parseInt(first.price)
    // })

    // // 판매량 오름차순
    // goodsData.sort((first, second) => {
    //     return  first.sale - second.sale
    // })

    // // 판매량 내림차순
    goodsData.sort((first, second) => {
        return  second.sale - first.sale
    })

    // 상위 3개 앞부분
    const topGoods = goodsData.slice(0, 3)

    // console.log(topGoods);

    topGoods.forEach((eachGoods) => {
        $("#goodsArea").append(`
            <div class="card" style="width: 18rem; margin: 10px 5px;">
                <img src="/선수제공파일/B_Module/${eachGoods.img}" class="card-img-top" alt="..." style="height: 200px;">
                <div class="card-body">
                    <h5 class="card-title" style="color: red;">BEST</h5>
                    <h5 class="card-title">${eachGoods.title}</h5>
                    <p class="card-text" style="color: black;">판매량 : ${eachGoods.sale}</p>
                    <p class="card-text" style="color: black;">가격 : ${eachGoods.price}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        `)
    })

    // 상위 3개 뒷부분
    const leftGoods = goodsData.slice(3)
    // console.log(goodsData);
    if (sortData == "sd") {
        leftGoods.sort((first, second) => {
            return  second.sale - first.sale
        })

        leftGoods.forEach((eachGoods) => {
            $("#goodsArea").append(`
                <div class="card" style="width: 18rem; margin: 10px 5px;">
                    <img src="/선수제공파일/B_Module/${eachGoods.img}" class="card-img-top" alt="..." style="height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title">${eachGoods.title}</h5>
                        <p class="card-text" style="color: black;">판매량 : ${eachGoods.sale}</p>
                        <p class="card-text" style="color: black;">가격 : ${eachGoods.price}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            `)
        })
    } else if (sortData == "su") {
        leftGoods.sort((first, second) => {
            return  first.sale - second.sale
        })

        leftGoods.forEach((eachGoods) => {
            $("#goodsArea").append(`
                <div class="card" style="width: 18rem; margin: 10px 5px;">
                    <img src="/선수제공파일/B_Module/${eachGoods.img}" class="card-img-top" alt="..." style="height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title">${eachGoods.title}</h5>
                        <p class="card-text" style="color: black;">판매량 : ${eachGoods.sale}</p>
                        <p class="card-text" style="color: black;">가격 : ${eachGoods.price}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            `)
        })
    } else if (sortData == "pd") {
        leftGoods.sort((first, second) => {
            return  parseInt(second.price) - parseInt(first.price)
        })

        leftGoods.forEach((eachGoods) => {
            $("#goodsArea").append(`
                <div class="card" style="width: 18rem; margin: 10px 5px;">
                    <img src="/선수제공파일/B_Module/${eachGoods.img}" class="card-img-top" alt="..." style="height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title">${eachGoods.title}</h5>
                        <p class="card-text" style="color: black;">판매량 : ${eachGoods.sale}</p>
                        <p class="card-text" style="color: black;">가격 : ${eachGoods.price}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            `)
        })
    } else if (sortData == "pu") {
        leftGoods.sort((first, second) => {
            return parseInt(first.price) - parseInt(second.price)
        })

        leftGoods.forEach((eachGoods) => {
            $("#goodsArea").append(`
                <div class="card" style="width: 18rem; margin: 10px 5px;">
                    <img src="/선수제공파일/B_Module/${eachGoods.img}" class="card-img-top" alt="..." style="height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title">${eachGoods.title}</h5>
                        <p class="card-text" style="color: black;">판매량 : ${eachGoods.sale}</p>
                        <p class="card-text" style="color: black;">가격 : ${eachGoods.price}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            `)
        })
    }

}

initChartData()
goodsSeperate()