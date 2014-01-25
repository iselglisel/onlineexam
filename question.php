<?php 
	require_once 'config.php';
	require_once 'ExamDAO.php';

	$defaultQuestion = ExamDAO::getQuestion(1);
	$defaultOption = ExamDAO::getOption(1);
?>


<html>
<head>
	<title>Questionnaire</title>
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.min.css" >
	
</head>
<body>
	<div class="span12">
		<div class="row">
			<div class="navbar navbar-fixed-top">
        		<div class="navbar-inner">
          			<div class="container">
            			<a href="index.html" class="brand brand-bootbus">Examination</a>
            				<div class="nav-collapse collapse">        
              					<ul class="nav pull-right">
				                 <li><a href="frontface.php">Home</a></li>           
				                 <li><a href="signOut.php">Sign Out</a></li>
              					</ul>
            				</div>
          			</div>
        		</div>
      		</div>
      	</div>
     </div>
	<div class="span8" style="margin-top:1in">
		<div class="row">
			<form>
				Question : 
				<?php foreach($defaultQuestion as $questions): ?>
				<?= $questions ?>
				<?php endforeach ?><br>
				 A :<input type="radio" name="a">
				 <?php foreach($defaultOption as $opt1): ?>
				 <?= $opt1 ?>
				<?php endforeach ?><br>
				 B : <input type="radio" name="a"></input><br>
				 C : <input type="radio" name="a"></input><br>
				 D : <input type="radio" name="a"></input><br>
			</form>
		</div>
	</div>
</body>
</html>

<script type="text/javascript" src="jquery.1.10.2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	function getQuestion(question) {
		$.ajax ({
			url : 'ExamDAO.php',
			data: {questionannaire: question},
			datatype: 'JSON',
			method: 'GET',
			success: function(response){
				$('#option').html(response.option);
			} 
		});
	}

}
</script>

<script type="text/javascript" src="jquery.1.10.2.js">
$(document).ready(function(){
	function getOption(option){
		$.ajax ({
			url: 'ExamDAO.php',
			data: {option: opt1, option: opt2, option: opt3, option: opt4},
			datatype: 'JSON',
			method: 'GET',
			success: function(response){
				$('#option').html(response.option);
			}
		});
	}
}





</script>