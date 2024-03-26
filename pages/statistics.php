<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="/선수제공파일/bootstrap-5.2.0-dist/css/bootstrap.css">
</head>
<body>
    <!-- 헤더 영역 (1320px) -->
    <header>
        <span>
            <a href="/">
                <img src="/img/logo.png" alt="로고" id="logo">
            </a>
        </span>
        <span>
            <a href="./sub01.html" class="navE">information</a> |
            <a href="./sub02.html" class="navE">statistics</a> |
            <a href="./sub03.html" class="navE">reservation</a> |
            <a href="./sub04.html" class="navE">goods</a>
        </span>
        <span>
            <a href="#">로그인</a>
            <a href="#">회원가입</a>
        </span>
    </header>
    <!-- 헤더 영역 -->

    <!-- 컨테이너 영역 -->
    <div id="container">
        <div class="statistics">
            <h1>VISITOR CHART</h1>
            <div>
                <div>
                    <div class="form-floating">
                        <select class="form-select" id="leagueSelect" aria-label="Floating label select example">

                        </select>
                        <label for="floatingSelect">Works with selects</label>
                      </div>
                    <div class="form-floating">
                        <select class="form-select" id="daySelect" aria-label="Floating label select example">

                        </select>
                        <label for="floatingSelect">Works with selects</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-select" id="directionSelect" aria-label="Floating label select example">
                            <option value="vertical">세로로 보기</option>
                            <option value="horizontal">가로로 보기</option>
                        </select>
                        <label for="floatingSelect">Works with selects</label>
                      </div>
                </div>
            </div>
            <div>
                <div id="visitorChart"></div>
            </div>
            <div>
                <table id="visitorTable"></table>
            </div>
        </div>

        <div>
            
        </div>
    </div>
    <!-- 컨테이너 영역 -->

    <!-- 푸터 영역 -->
<footer>
    <div>
        <img src="/img/logo.png" alt="">
        <p>Copyrightⓒ Skills baseball park. All rights reserved.</p>
        <p>Call: 142-3677</p>
        <p>Email: help@skillsbaseballpark.com</p>
        <p>Address: (12345) 서울특별서 중구 중북로 71</p>
    </div>
</footer>
<!-- 푸터 영역 -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="/선수제공파일/bootstrap-5.2.0-dist/js/bootstrap.js"></script>
    <script src="./app.js"></script>
</body>
</html>