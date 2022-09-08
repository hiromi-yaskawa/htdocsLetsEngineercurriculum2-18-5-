<link rel="stylesheet" href="answer.css" type="text/css">

<div id=style>
	<?php
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

?>
	<p><?php
$my_name=$_POST['text'];
?>
		<!--POST通信で送られてきた名前を表示--><?php echo $my_name;?>さんの結果は・・・？
	</p>

<span>
	<p>①の答え</p>
	<!--作成した関数を呼び出して結果を表示-->
<?php
$select =$_POST['question1'];
$answer =$_POST['answer1'];
function judgement($select,$answer){
if($select == $answer){
echo "正解！";

} else {
echo "残念・・・";
}
}
?>

<?php judgement($select,$answer)?>

	<p>②の答え</p>
	<!--作成した関数を呼び出して結果を表示-->
<?php $select=$_POST['question2'];?>
<?php $answer=$_POST['answer2'];?>

<?php judgement($select,$answer)?>

	<p>③の答え</p>
	<!--作成した関数を呼び出して結果を表示-->
<?php $select=$_POST['question3'];?>
<?php $answer=$_POST['answer3'];?>

<?php judgement($select,$answer)?>
</div>
</span>
