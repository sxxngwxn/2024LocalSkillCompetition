<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./styles.css">
</head>

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
    <!-- 슬라이드 영역 -->
    <div id="slideContainer">
        <div id="mainSlider">
            <img src="/img/slide1.png" alt="Image 1">
            <img src="/img/slide2.png" alt="Image 2">
            <img src="/img/slide3.png" alt="Image 3">
            <img src="/img/slide4.png" alt="Image 4">
        </div>
    </div>
    <!-- 슬라이드 영역 -->

    <!-- 인포메이션 영역 -->
    <div class="implContainer">
        <h1>INFORMATION</h1>
        <div id="information">
            <img src="/선수제공파일/images/02.jpg" alt="">
            <div id="informationText">
                <p class="whiteText">Skills baseball park는 시민들의 복리증진을 위하여 설치되었으며,</p>
                <p class="whiteText">시민들의 건강 및 복지향상과 시민들에게 편리한 시설물 이용을 위한 야구장입니다.</p>
                <br>
                <p class="whiteText">야구를 사랑하며 즐기는 생활체육인들이 모이는 곳</p>
                <br>
                <p class="whiteText">다양한 즐거움과 감동을 선사하는 곳</p>
                <br>
                <p class="whiteText">Skills baseball park</p>
                <br>
                <br>
                <a href="./sub01.html"><button class="blueBtn">information으로 이동</button></a>
            </div>
        </div>
    </div>
    <!-- 인포메이션 영역 -->

    <!-- 스케쥴 영역 -->
        <div class="implContainer">
            <h1>GAME SCHEDULE</h1>
            <div id="gameStatus">
                <div class="team">
                    <span>
                        <img src="/img/teamWeb.png" alt="">
                    </span>
                    <p>team Web</p>
                </div>
                <p>5 : 4</p>
                <div class="team">
                    <span>
                        <img src="/img/teamDesign.png" alt="">
                    </span>
                    <p>team Design</p>
                </div>
            </div>

        </div>

        <div class="implContainer">
            <table id="scheduleTable">
                <tr>
                    <th>일</th>
                    <th>월</th>
                    <th>화</th>
                    <th>수</th>
                    <th>목</th>
                    <th>금</th>
                    <th>토</th>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td><a href="#modal" id="modal20">20</a></td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>29</td>
                    <td>30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    <!-- 스케쥴 영역 -->

    <!-- 모달 영역 -->
        <div id="modal">
            <h2>4월 20일</h2>
            <img src="/img/baseballPic.png" alt="">
            <div>
                <h1>
                    아직 게임이 없습니다.
                </h1>
            </div>
            <a href="#gameStatus"><button>X</button></a>
        </div>
    <!-- 모달 영역 -->

    <!-- 리그별 랭킹 -->
        <div class="implContainer">
            <h1>
                RANKING(LEAGUE)
            </h1>
            <div id="league">
                <div>
                    <p>나이트 리그</p>
                    <ul class="dropMenu">
                        <li><a href="#nts">투수 순위</a></li>
                        <li><a href="#ntj">타자 순위</a></li>
                    </ul>
                </div>
                <div>
                    <p>주말 리그</p>
                    <ul class="dropMenu">
                        <li><a href="#jts">투수 순위</a></li>
                        <li><a href="#jtj">타자 순위</a></li>
                    </ul>
                </div>
                <div>
                    <p>새벽 리그</p>
                    <ul class="dropMenu">
                        <li><a href="#sts">투수 순위</a></li>
                        <li><a href="#stj">타자 순위</a></li>
                    </ul>
                </div>
            </div>

            <div id="leagueDetail">
                <div id="nts">
                    <ul>
                        <p> 나이트 리그 투수 순위</p>
                        <li>1. 나일투</li>
                        <li>2. 나이투</li>
                        <li>3. 나삼투</li>
                        <li>4. 나사투</li>
                        <li>5. 나오투</li>
                        <li>6. 나육투</li>
                        <li>7. 나칠투</li>
                    </ul>
                </div>
                <div id="ntj">
                    <ul>
                        <p>나이트 리그 타자 순위</p>
                        <li>1. 나일타</li>
                        <li>2. 나이타</li>
                        <li>3. 나삼타</li>
                        <li>4. 나사타</li>
                        <li>5. 나오타</li>
                        <li>6. 나육타</li>
                        <li>7. 나칠타</li>
                    </ul>
                </div>
                <div id="jts">
                    <ul>
                        <p>주말 리그 투수 순위</p>
                        <li>1. 주일투</li>
                        <li>2. 주이투</li>
                        <li>3. 주삼투</li>
                        <li>4. 주사투</li>
                        <li>5. 주오투</li>
                        <li>6. 주육투</li>
                        <li>7. 주칠투</li>
                    </ul>
                </div>
                <div id="jtj">
                    <ul>
                        <p>주말 리그 타자 순위</p>
                        <li>1. 주일타</li>
                        <li>2. 주이타</li>
                        <li>3. 주삼타</li>
                        <li>4. 주사타</li>
                        <li>5. 주오타</li>
                        <li>6. 주육타</li>
                        <li>7. 주칠타</li>
                    </ul>
                </div>
                <div id="sts">
                    <ul>
                        <p>새벽 리그 투수 순위</p>
                        <li>1. 새일투</li>
                        <li>2. 새이투</li>
                        <li>3. 새삼투</li>
                        <li>4. 새사투</li>
                        <li>5. 새오투</li>
                        <li>6. 새육투</li>
                        <li>7. 새칠투</li>
                    </ul>
                </div>
                <div id="stj">
                    <ul>
                        <p>새벽 리그 타자 순위</p>
                        <li>1. 새일타</li>
                        <li>2. 새이타</li>
                        <li>3. 새삼타</li>
                        <li>4. 새사타</li>
                        <li>5. 새오타</li>
                        <li>6. 새육타</li>
                        <li>7. 새칠타</li>
                    </ul>
                </div>
            </div>
        </div>
    <!-- 리그별 랭킹 -->

    <!-- 부문별 랭킹 -->
        <div class="implContainer">
            <h1>RANKING (PRIMARY TOP5)</h1>
            <div>
                <div class="acodion">
                    <div><a href="#tt5">- 타율 TOP5 -</a></div>
                    <div id="tt5">
                        <ul>
                            <li>1위 : 일타율</li>
                            <li>2위 : 이타율</li>
                            <li>3위 : 삼타율</li>
                            <li>4위 : 사타율</li>
                            <li>5위 : 오타율</li>
                        </ul>
                    </div>
                </div>
                <div class="acodion">
                    <div><a href="#ht5">- 홈런 TOP5 -</a></div>
                    <div id="ht5">
                        <ul>
                            <li>1위 : 일홈런</li>
                            <li>2위 : 이홈런</li>
                            <li>3위 : 삼홈런</li>
                            <li>4위 : 사홈런</li>
                            <li>5위 : 오홈런</li>
                        </ul>
                    </div>
                </div>
                <div class="acodion">
                    <div><a href="#dt5">- 다승 TOP5 -</a></div>
                    <div id="dt5">
                        <ul>
                            <li>1위 : 일다승</li>
                            <li>2위 : 이다승</li>
                            <li>3위 : 삼다승</li>
                            <li>4위 : 사다승</li>
                            <li>5위 : 오다승</li>
                        </ul>
                    </div>
                </div>
                <div class="acodion">
                    <div><a href="#pt5">- 평균자책 TOP5 -</a></div>
                    <div id="pt5">
                        <ul>
                            <li>1위 : 일평자</li>
                            <li>2위 : 이평자</li>
                            <li>3위 : 삼평자</li>
                            <li>4위 : 사평자</li>
                            <li>5위 : 오평자</li>
                        </ul>
                    </div>
                </div>
                <div class="acodion">
                    <div><a href="#sjt5">- 탈삼진 TOP5 -</a></div>
                    <div id="sjt5">
                        <ul>
                            <li>1위 : 일삼진</li>
                            <li>2위 : 이삼진</li>
                            <li>3위 : 삼삼진</li>
                            <li>4위 : 사삼진</li>
                            <li>5위 : 오삼진</li>
                        </ul>
                    </div>
                </div>
                <div class="acodion">
                    <div><a href="#st5">- 세이브 TOP5 -</a></div>
                    <div id="st5">
                        <ul>
                            <li>1위 : 일세이</li>
                            <li>2위 : 이세이</li>
                            <li>3위 : 삼세이</li>
                            <li>4위 : 사세이</li>
                            <li>5위 : 오세이</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <!-- 부문별 랭킹 -->

    <!-- 갤러리 영역 -->

        <div class="implContainer">
            <h1>GALLERY</h1>
            <div id="gallery">
                <input class="galleryRadio" type="radio" name="galleryState" id="one" checked>
                <input class="galleryRadio" type="radio" name="galleryState" id="two">
                <input class="galleryRadio" type="radio" name="galleryState" id="three">
                <input class="galleryRadio" type="radio" name="galleryState" id="four">
                <input class="galleryRadio" type="radio" name="galleryState" id="five">
                <button class="galleryBtn" id="oneBtn"><label for="two">></label></button>
                <button class="galleryBtn" id="twoBtn"><label for="two">></l    abel></button>
                <button class="galleryBtn" id="threeBtn"><label for="three">></label></button>
                <button class="galleryBtn" id="fourBtn"><label for="four">></label></button>
                <button class="galleryBtn" id="fiveBtn"><label for="five"><</label></button>
                <div id="gallerySlide">
                    <div id="description">
                        <p>스킬스 베이스볼에 오신것을 환영합니다</p>
                        <P>스킬스 베이스볼은 주민 모두가 사용할 수 있습니다</P>
                        <P>야구 글러브등 다양한 용품을 대여 할 수 있습니다</P>
                        <P>모두 즐거운 야구 생활을 즐기세요</P>
                    </div>
                    <div class="galleryImg" id="galleryImg1">
                        <img src="/선수제공파일/images/04.jpg" alt="">
                        <div class="gallerySeeMore">
                            <p>Image 1</p>
                            <button>more</button>
                        </div>
                    </div>
                    <div class="galleryImg" id="galleryImg2">
                        <img src="/선수제공파일/images/16.jpg" alt="">
                        <div class="gallerySeeMore">
                            <p>Image 2</p>
                            <button>more</button>
                        </div>
                    </div>
                    <div class="galleryImg" id="galleryImg3">
                        <img src="/선수제공파일/images/26.jpg" alt="">
                        <div class="gallerySeeMore">
                            <p>Image 3</p>
                            <button>more</button>
                        </div>
                    </div>
                    <div class="galleryImg" id="galleryImg4">
                        <img src="/선수제공파일/images/40.jpg" alt="">
                        <div class="gallerySeeMore">
                            <p>Image 4</p>
                            <button>more</button>
                        </div>
                    </div>
                    <div class="galleryImg" id="galleryImg5">
                        <img src="/선수제공파일/images/48.jpg" alt="">
                        <div class="gallerySeeMore">
                            <p>Image 5</p>
                            <button>more</button>
                        </div>
                    </div>
                    <div class="galleryImg" id="galleryImg6">
                        <img src="/선수제공파일/images/32.jpg" alt="">
                        <div class="gallerySeeMore">
                            <p>Image 6</p>
                            <button>more</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    <!-- 갤러리 영역 -->

    <!-- 굿즈 영역 -->

        <div class="implContainer">
            <h1>GOODS</h1>
            <div id="goods">
                <div>
                    <img src="/선수제공파일/images/01.jpg" alt="">
                </div>
                <div>
                    <img src="/선수제공파일/images/01.jpg" alt="">
                </div>
                <div>
                    <img src="/선수제공파일/images/01.jpg" alt="">
                </div>
                <div>
                    <img src="/선수제공파일/images/01.jpg" alt="">
                </div>
            </div>
        </div>

    <!-- 굿즈 영역 -->

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
</html>
?>