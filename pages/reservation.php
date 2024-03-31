<?php
    session_start();

    include("./dbConnect.php");

    $sql = "SELECT * FROM `reservation` WHERE permission = 0";

    if ($_SESSION["position"] == "일반회원") { ?>
        <!DOCTYPE html>
        <html lang="ko">
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
    <?php } else if ($_SESSION["position"] == "담당자") {?>
        <!DOCTYPE html>
        <html lang="ko">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <link rel="stylesheet" href="../styles.css">
                <link rel="stylesheet" href="/선수제공파일/bootstrap-5.2.0-dist/css/bootstrap.css">
            </head>
            <body>
            <table class="table" id="resTable">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">예약자 ID</th>
                    <th scope="col">예약자 이름</th>
                    <th scope="col">리그</th>
                    <th scope="col">날짜</th>
                    <th scope="col">시간</th>
                    <th scope="col">최소인원</th>
                    <th scope="col">사용료</th>
                    <th scope="col">예약가능여부</th>
                    <th scope="col">예약승인버튼</th>
                    <th scope="col">삭제</th>
                    </tr>
                </thead>
                <tbody id="resTbody">

                </tbody>
            </table>

            <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
            <script src="/선수제공파일/bootstrap-5.2.0-dist/js/bootstrap.js"></script>
            <script src="../JS/app.js"></script>
            </body>
        </html>
    <?php }
?>