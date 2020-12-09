<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>応募ページ</title>
  <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUB6t1kz5Tw5-RbI3z7Pc82QjxhsLz1D8&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="css/map.css" />
  <script src="js/map.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="ten columns"><h1>スポーツ系プラットフォーム</h1></div>
    </div>
    <div class="row">
      <ul>
        <li style="display:inline-block;padding:5px;">ぱんくず１</li>
        <li style="display:inline-block;padding:5px;">ぱんくず２</li>
      </ul>
    </div>
    <div class="row">
      <div class="nine columns">
        <section>
          <div>
            <form method="post" action="example.cgi">
            <h5>検索条件を指定する</h5>
            <div class="row">
              <div class="six columns">
                <label for="janru">ジャンル</label>
                <select id="janru" name="example">
                  <option value="野球">野球</option>
                  <option value="サッカー">サッカー</option>
                  <option value="バスケ">バスケ</option>
                </select>
              </div>
              <div class="six columns">
                <label for="level">レベル</label>
                <select id="level" name="leve">
                  <option value="レベル１">レベル１</option>
                  <option value="レベル２">レベル２</option>
                  <option value="レベル３">レベル３</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="six columns">
                <label for="address">住所</label>
                <input type="text" id="address">
              </div>
              <div class="six columns">
                <label for="kaisaihiduke">日付</label>
                <input type="date" id="kaisaihiduke">
              </div>
            </div>
            <input type="button" value ="絞り込む">
            <br>
            ・現在位置から応募可能な募集を表示する
            <!--<div id="map"></div>-->
          </div>
          <div>
            <h5>検索結果</h5>
          </div>
        </section>
      </div>
      <div class="three columns">
        <aside>
          <div>
            <h5>サイドメニュー</h5>
             <ul>
              <li>野球</li>
              <li>サッカー</li>
              <li>バスケ</li>
             </ul>
          </div>
        </aside>

      </div>
    </div>
    <div>
      <div class="twelve columns">フッター</div>
    </div>
  </div>
</body>
</html>