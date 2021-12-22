<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>履歴</title>

    <link rel="canonical" href="https://getbootstrap.jp/docs/5.0/examples/dashboard/">
  　<link rel="stylesheet" href="{{  asset('css/dashboard.css') }}" />
  　<link rel="stylesheet" href="{{  asset('css/progressbar.css') }}" />
    <link rel="stylesheet" href="{{  asset('css/log.css') }}" />
    <link rel="stylesheet" href="{{  asset('css/cancel.css') }}" />

    <!-- Bootstrap core CSS -->
<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand1 col-md-3 col-lg-2 me-0 px-3 a1">{{ Session::get('userID') }}</a>
  
  <ul class="nav pull-right">
  <li class="nav-item">
      <a class="nav-link text-white" href="#">
      <form action="{{url('/home')}}" method="get"  class="form"> 
                     @csrf
            <input type="submit" name="submit" value="ホーム" class="btn1" />
            </form>
        </a>
    </li>
    <li class="nav-link text-white" href="#">
    <form action="{{action('App\Http\Controllers\userloginController@move')}}" method="get"  class="form"> 
                     @csrf
            <input type="submit" name="submit" value="サインアウト" class="btn1" />
            </form>
    </li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
          <br>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              <form action="{{action('App\Http\Controllers\yoyakuController@move')}}" method="POST"  class="form"> 
            	@csrf
    		<input type="submit" name="submit" value="予約" class="btn2"/>
    	      </form>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              <form action="{{action('App\Http\Controllers\log2Controller@move')}}" method="POST"  class="form"> 
           	 @csrf
    		<input type="submit" name="submit" value="履歴" class="btn2"/>
	      </form>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              <form action="{{action('App\Http\Controllers\ticketController@move')}}" method="POST"  class="form"> 
           	 @csrf
    		<input type="submit" name="submit" value="接種券番号表示" class="btn2"/>
	      </form>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              <form action="{{action('App\Http\Controllers\mailController@move')}}" method="POST"  class="form"> 
           	 @csrf
    		<input type="submit" name="submit" value="お知らせ" class="btn2"/>
	      </form>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              <form action="{{action('App\Http\Controllers\optionController@move')}}" method="POST"  class="form"> 
           	 @csrf
    		<input type="submit" name="submit" value="その他" class="btn2"/>
	      </form>
            </a>
          </li>
        </ul>
      </div>
    </nav>
　<br>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom"> 
      
        <h2>履歴</h2>

        <div class="btn-toolbar mb-2 mb-md-0">
          
        </div> 
　　　</div>
<p>病院名：○○病院</p>
<div class="box2">
    <div class="container">

    <canvas id="myBarChart" ></canvas>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>

  <script>
  var ctx = document.getElementById("myBarChart");
  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['10代', '20代', '30代', '40代', '50代', '60代', '70代','80代以上'],
      datasets: [
        {
          label: 'ワクチン接種人数',
          data: [72, 73, 75, 81, 88, 89, 89, 94],
          backgroundColor: "rgba(127,255,143,0.6)"
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'ワクチン接種年齢別'
      },
      scales: {
        yAxes: [{
          ticks: {
            suggestedMax: 100,
            suggestedMin: 0,
            stepSize: 10,
            callback: function(value, index, values){
              return  value +  '人'
            }
          }
        }]
      },
    }
  });
  </script>

    <div class="v_line_fix"></div>

<div class="container container-wrap">
  <div class="font-small">少なくとも1回接種</div>

  <div class="font-large">9867万1017人</div>
<div class="dotted"> </div>

  <div class="font-small">少なくとも2回接種</div>
  <div class="font-large">9414万4252人</div>

  <div class="font-small">累計接種回数</div>
  <div class="font-large">1億9309万5269回</div>
</div>
<style>
#myBarChart {max-width:840px;max-height:580px;}
</style>   
</div>
</div>
<br>
<br>
<p>○○さんの接種履歴</p>
<br>
<div class="clskw5wu3u8">
    <table border="1" id="tbl" align="center" >
    <tr>
        <th>接種日</th>
        <th>ワクチン種類</th>
        <th>メモ</th>
        <th>接種状況</th>
        <!--<th style="width:5%"></th>-->
    </tr>
    <tr>
        <td>2021/10/1</td>
        <td>ファイザー</td>
        <td style="width:30%"><input class="inpval" type="text"  id="txt1" name="txt1" value="" ></td>
        <td>接種済み</td>
        <!--<td></td>-->
    </tr>
    <tr>
        <td>2021/11/1</td>
        <td>ファイザー</td>
        <td style="width:30%"><input class="inpval" type="text"  id="txt1" name="txt1" value="" ></td>
        <td>接種済み</td>
        <!--<td></td>-->
    </tr>
    <tr>
        <td>2021/12/1</td>
        <td>インフルエンザワクチン</td>
        <td style="width:30%"><input class="inpval" type="text"  id="txt1" name="txt1" value="" ></td>
        <td>予約中</td>
        <!--<td>
        <form action="{{action('App\Http\Controllers\cancelController@move')}}" method="post"  class="form"> 
              @csrf
              <input type="submit"  name="submit" value="キャンセル" class="cancel_btn"　/>
        </form>
        </td>-->
    </tr>
    </table>
</div>
<br>
<br>
<div class="box">
<button type="button" class="btn btn-danger" onclick="history.back(-1)">戻る</button>
</div>
<br>
<br>
<br>



<!------------------------------------------------------------------------------------------------------------------->
      <!--<canvas id="myChart" width="900" height="380"></canvas>class="my-4 w-100"  少し下にスクロールできる-->

     


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/dashbord.js') }}"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>