<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="/선수제공파일/bootstrap-5.2.0-dist/css/bootstrap.css">
</head>
<body>
    <div id="res">
        <div id="resForm">
            <form action="/reserv" method="post">
                <select class="form-select" aria-label="Default select example" id="resDay" name="resDay"></select>
                <select class="form-select" aria-label="Default select example" id="resLeague" name="resLeague">
                    <option value="" selected>리그를 선택하세요</option>
                    <option value="나이트리그" id="nightTime">나이트리그</option>
                    <option value="주말리그" id="weekEnd">주말리그</option>
                    <option value="새벽리그" id="dawnTime">새벽리그</option>
                </select>
                <select class="form-select" aria-label="Default select example" id="resTime" name="resTime"></select>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">인원</span>
                    <input type="number" class="form-control" aria-label="Username" aria-describedby="basic-addon1" min="20" value="20" id="peopleCount" name="peopleCount">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">총 가격</span>
                    <input type="number" class="form-control" aria-label="Username" aria-describedby="basic-addon1" id="totalPrice" name="totalPrice" readonly>
                </div>
                <button type="submit" class="btn btn-primary">예약하기</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="/선수제공파일/bootstrap-5.2.0-dist/js/bootstrap.js"></script>
    <script src="../JS/app.js"></script>
</body>
</html>