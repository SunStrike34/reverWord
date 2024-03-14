<?php
    require_once 'Class/Revert.php';

    if (isset($_POST['text'])){
        $dataPost = $_POST['text'];
        $class = new Revert;
        $result = $class->revertCharacters($dataPost);
    }
?>

<html lang="RU">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
		<title>Задача</title>

	</head>
	<body>

        <form action="" method="post">
            <label for="text">Введите текст:</label><br>
            <textarea id="text" name="text" rows="2"></textarea><br>

            <button type="submit">Отправить</button>
        </form>

        <?php if (isset($result)) { ?>
            <label >Изначальное:</label>
            <p><?= (isset($_POST['text']))? $_POST['text']: '' ?></p>

            <label >Результат:</label>
            <p><?= (isset($result))? $result: '' ?></p>
        <?php } ?>

    </body>
</html>