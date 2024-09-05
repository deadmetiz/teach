<?php
use Illuminate\Support\Facades\Auth;
$userid = Auth::id();
    ?>

<?php $__env->startSection('page-content'); ?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Quiz</title>
    <link rel="stylesheet" href="../../public/css/test.css" />
</head>

<div class="line"></div>
<div class="color">
	<div class="quiz" id="quiz">

		<div class="quiz-header" id="header">
			<!-- Заголовок вопроса -->
			<h2 class="title"><?php echo e($_SERVER["DOCUMENT_ROOT"]); ?></h2>
			<!-- Результаты викторины -->
			<h2 class="title">%title%</h2>
			<h3 class="summary">%message%</h3>
			<p class="result">%result%</p>
		</div>

		<ul class="quiz-list" id="list">
			<li>
				<label>
					<input type="radio" class="answer" name="answer" />
					<span>Ответ...</span>
				</label>
			</li>
			<li>
				<label>
					<input type="radio" class="answer" name="answer" />
					<span>Ответ...</span>
				</label>
			</li>
		</ul>

		<button class="quiz-submit submit" id="submit">Ответить</button>

	</div>
</div>
<div class="line"></div>
<script src="/public/jquery-3.6.4.js"></script>
<?php echo "<script>let userid = $userid </script>";?>
<script src="/public/js/test1.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\rabota\resources\views/test1.blade.php ENDPATH**/ ?>