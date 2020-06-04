<html>
<head>
<meta charset="utf-8">
<title>アンケート</title>

<!-- cssを追加する -->
<style>
	p{
		margin: 10px 0;
	}

	.question{
		display:flex;
		justify-content: flex-start;
	}
	.heading{
		width: 200px;
	}
	.text{
		width: 300px;
		height: 150px;
		resize: none;
	}

</style>

</head>
<body>

<!-- write.phpにデータを飛ばす　 -->
<div class="wrapper">
<h1>ご来店 ありがとうございます☆</h1>	
<p>アンケートにご協力願います！！ m(_ _)m</p>
<form action="write.php" method="post">
	<div class="question">
		<p class="heading">お名前:</p>
		<p><input type="text" name="user_name"></p>
	</div>
	<div class="question">
		<p class="heading">性別:</p>
		<p>
			<input type="radio" name="gender" value="male">男性
			<input type="radio" name="gender" value="female">女性
		</p>
	</div>
	<div class="question">
		<p class="heading">年齢:</p>	
		<p><input type="text" name="age"></p>
	</div>
	<div class="question">
		<p class="heading">当店を知ったきっかけ:</p>	
		<p>
			<input type="checkbox" name="how">Webサイトを見て 
			<input type="checkbox" name="how">知人からの紹介
			<input type="checkbox" name="how">通りすがり
		</p>
	</div>
	<div class="question">
		<p class="heading">Email:</p>
		<p><input type="text" name="email"></p>
	</div>
	<div class="question">
		<p class="heading">当店への感想:</p>
		<p><textarea name="message" class="text"></textarea></p>
	</div>

	<input type="submit" value="送信">
	</div>
</form>
</body>
</html>