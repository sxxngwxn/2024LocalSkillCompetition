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
    <header>
        <span>
            <a href="/">
                <img src="/img/logo.png" alt="로고" id="logo">
            </a>
        </span>
        <span>
            <a href="/information" class="navE">information</a> |
            <a href="/statistics" class="navE">statistics</a> |
            <a href="/reservation" class="navE">reservation</a> |
            <a href="/goods" class="navE">goods</a>
        </span>
        <span>
            <button type="button" class="btn btn-primary">로그인</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">회원가입</button>
        </span>
    </header>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">회원가입</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- form -->
                <form action="/join" method="post">
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">아이디</span>
                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" name="id" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">이름</span>
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="name" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">비밀번호</span>
                            <input type="password" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="pw" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><img src="../img/captcha.png" style="width: 100px;"></span>
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="captcha" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
                        <button type="submit" class="btn btn-primary">중복확인 및 가입하기</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="/선수제공파일/bootstrap-5.2.0-dist/js/bootstrap.js"></script>
</body>
</html>