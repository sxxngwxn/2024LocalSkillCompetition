<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="/선수제공파일/bootstrap-5.2.0-dist/css/bootstrap.css">
</head>
<body>
    <div id="fromDiv">
        <div id="loginForm">
            <form action="/login" method="post">
                <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">아이디</span>
                        <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" name="id" id="idValue" pattern="[A-Za-z0-9]+"required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">비밀번호</span>
                        <input type="password" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="pw" id="pwValue" pattern="[A-Za-z0-9]+"required>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">회원구분</label>
                        <select class="form-select" id="inputGroupSelect01" name="position">
                            <option value="일반회원">일반회원</option>
                            <option value="담당자">담당자</option>
                            <option value="관리자">관리자</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">로그인</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="/선수제공파일/bootstrap-5.2.0-dist/js/bootstrap.js"></script>
</body>
</html>