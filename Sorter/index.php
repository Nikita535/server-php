<html lang="en">
<head>
    <title>Sorter page</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<?php


// Функция сортировки выбором
function selectSort(array $arr) {
    $count= count($arr);
    if ($count <= 1){
        return $arr;
    }

    for ($i = 0; $i < $count; $i++){
        $k = $i;

        for($j = $i + 1; $j < $count; $j++){
            if ($arr[$k] > $arr[$j]){
                $k = $j;
            }

            if ($k != $i){
                $tmp = $arr[$i];
                $arr[$i] = $arr[$k];
                $arr[$k] = $tmp;
            }
        }
    }

    return $arr;
}

// Если передали массив
if(isset($_GET['array']))
{
    $array_str = $_GET['array'];
    $array = explode(",", $array_str);

    if(count($array)==0){
        echo 'Вы ввели пустой массив';
        exit(0);
    }

    //Преобразуем к int
    for($i = 0; $i < count($array); $i++){
        $array[$i] = (int)$array[$i];
    }

    //Запуск сортировки
    $new_array = selectSort($array);

    echo 'Изначальный массив: '
        . implode(',', $array)
        . '<br>Отсортированный массив: '
        . implode(',', $new_array);
}
?>

<p>
</body>
</html>
