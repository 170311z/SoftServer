<?php
session_start();

// ログイン状態のチェック
if (!isset($_SESSION["USERID"])) {
  header("Location: logout.php");
  exit;
}

//DB情報
$db['host'] = "localhost";  // DBサーバのurl
$db['user'] = "sw2";                        
$db['pass'] = "hamada";                     
$db['dbname'] = "sw2"; 

//エラーメッセージの初期化
$errorMessage = "";
if (isset($_POST["display"])) {
	if (empty($_POST[""])) {
	}


	if (!empty($_POST[]))



?>


<!DOCTYPE html>                                    

<html lang="ja">
  <head>        
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">                                                                        
        <meta http-equiv="Content-Style-Type" content="text/css">        
        <meta http-equiv="Content-Script-Type" content="text/javascript">
        <title>SIZKANIC 管理者用ページ</title>                           
        <link rel="stylesheet" href="admin_screen_1.css" type="text/css">
  </head>                                                                
  <body>                                                                 
        <div id="d1">                                                    
          <h1>管理者画面</h1>                                            
          <h2>ログ情報の管理</h2>                                        
        </div>                                                           
        <div id="d2">                                                    
          <form action="cgi-bin/formsample.cgi" method="post">           
          <p>ログ情報を表示させたい時間帯を入力してください。</p>        
          <p>                                                            
                <select id="h" name="h" value="">                                        
                  <option value="h0">0</option>                          
                  <option value="h1">1</option>                          
                  <option value="h2">2</option>                          
                  <option value="h3">3</option>                          
                  <option value="h4">4</option>                          
                  <option value="h5">5</option>                          
                  <option value="h6">6</option>                          
                  <option value="h7">7</option>                          
                  <option value="h8">8</option>                          
                  <option value="h9">9</option>                          
                  <option value="h10">10</option>                        
                  <option value="h11">11</option>                        
                  <option value="h12">12</option>                        
                  <option value="h13">13</option>                        
                  <option value="h14">14</option>                        
                  <option value="h15">15</option>                        
                  <option value="h16">16</option>                        
                  <option value="h17">17</option>                        
                  <option value="h18">18</option>                        
                  <option value="h19">19</option>                        
                  <option value="h20">20</option>                        
                  <option value="h21">21</option>                        
                  <option value="h22">22</option>                        
                  <option value="h23">23</option>                        
                </select>                                                
                時                                                       
                <select id="m" name="m" value="">                                        
                  <option value="m0">00</option>                         
                  <option value="m1">01</option>                         
                  <option value="m2">02</option>                         
                  <option value="m3">03</option>                         
                  <option value="m4">04</option>                         
                  <option value="m5">05</option>                         
                  <option value="m6">06</option>                         
                  <option value="m7">07</option>                         
                  <option value="m8">08</option>                         
                  <option value="m9">09</option>                         
                  <option value="m10">10</option>                        
                  <option value="m11">11</option>                        
                  <option value="m12">12</option>                        
                  <option value="m13">13</option>                        
                  <option value="m14">14</option>                        
                  <option value="m15">15</option>                        
                  <option value="m16">16</option>                        
                  <option value="m17">17</option>                        
                  <option value="m18">18</option>                        
                  <option value="m19">19</option>                        
                  <option value="m20">20</option>                        
                  <option value="m21">21</option>                        
                  <option value="m22">22</option>                        
                  <option value="m23">23</option>                        
                  <option value="m24">24</option>                        
                  <option value="m25">25</option>                        
                  <option value="m26">26</option>                        
                  <option value="m27">27</option>                        
                  <option value="m28">28</option>                        
                  <option value="m29">29</option>                        
                  <option value="m30">30</option                         
                  <option value="m31">31</option>                        
                  <option value="m32">32</option>                        
                  <option value="m33">33</option>                        
                  <option value="m34">34</option>                        
                  <option value="m35">35</option>                        
                  <option value="m36">36</option>                        
                  <option value="m37">37</option>                        
                  <option value="m38">38</option>                        
                  <option value="m39">39</option>                        
                  <option value="m40">40</option                         
                  <option value="m41">41</option>                        
                  <option value="m42">42</option>                        
                  <option value="m43">43</option>                        
                  <option value="m44">44</option>                        
                  <option value="m45">45</option>                        
                  <option value="m46">46</option>                        
                  <option value="m47">47</option>                        
                  <option value="m48">48</option>                        
                  <option value="m49">49</option>                        
                  <option value="m50">50</option>                        
                  <option value="m51">51</option>                        
                  <option value="m52">52</option>
                  <option value="m53">53</option>
                  <option value="m54">54</option>
                  <option value="m55">55</option>
                  <option value="m56">56</option>
                  <option value="m57">57</option>
                  <option value="m58">58</option>
                  <option value="m59">59</option>
                </select>
                分
          </p>
          <p>ログ情報を表示させたい場所を入力してください。</p>
          <p>
                <select id="choice" name="choice2">
                  <option value="s1">1Fメディア学習室</option>
                  <option value="s2">2F学習スペース①</option>
                  <option value="s3">2F学習スペース②</option>
                  <option value="s4">図書館全体</option>
                </select>
          </p>
          <p>
                <input type="submit" id="display" name="display" value="表示する">
          </p>
          </form>
        </div>
	<div align="center">
	<h2><a href="logout.php">ログアウト</a></h2>
	</div>
	</body>
</html>
