<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактор размеров</title>
    <link rel="icon" href="img/favicon.jpg" type="image/x-icon">
</head>
<body>
    <style>
        body{
            text-align: center;
        }
        form{
            text-align: left;
            max-width: 50%;
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-left: auto;
            margin-right: auto;
        }
        form select, form input{
            padding: 8px;
        }
    </style>
    <h1>Управление складом</h1>
    <p>
    Редактирование остатков размеров обуви
    </p>
    <form action="" id="submit_form_shoes">
        <label for="type-shoes">Тип обуви</label>
        <select name="type-shoes" id="type-shoes">
            <optgroup>
                <option value="sneakers" selected>кроссовки</option>
                <option value="sapogi">сапоги</option>
            </optgroup>
        </select>
        <label for="size-shoes">Размер обуви</label>
        <select name="size-shoes" id="size-shoes">
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="43">43</option>
        </select>
        <input type="number" name="qual-shoes" id="qual-shoes" placeholder="приход\расход" required>
        <input type="submit" name="submit-shoes" id="submit-shoes">
    </form>
    
    <script src="js/size-shoes.js"></script>
</body>
</html>