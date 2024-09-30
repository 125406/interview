<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <style>
        .content {
            display: none;
            /* 默认隐藏所有 div */
        }

        .storelist {
            position: relative;
            margin: 2em auto;
            background: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1;
            min-height: 80vh;
            width: 90%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .button {
            background-color: transparent;
            border: 2px solid #8caae7;
            color: #8caae7;
            padding: 0.5em 1em;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
            min-width: 15vh;
            margin: 10vh auto;
        }
    </style>
</head>
<script>
    function goBack(id, $name) {
        if ($name == 'store') {
            window.location.href = '/';
        } else {
            window.location.href = `/food/${id}`;
        }
    }
</script>

<body>
    <div class="storelist">
        <h1>Edit</h1>
        <form method="POST" id="dynamicForm"
            action="{{ isset($store) ? route('update', $store->id) : (isset($food) ? route('food.update', $food->id) : '') }}">
            @csrf
            @method('PUT')
            <label for="name">名稱:</label>
            <input type="text" id="name" name="name" required
                value="{{ isset($store) ? $store->name : (isset($food) ? $food->name : '') }}">
            <br>
            @if (!empty($store))
                <div id="store">
                    <label for="phone">電話:</label>
                    <input type="text" id="phone" name="phone" value="{{ $store->phone }}">
                    <br>

                    <label for="business_time">營業時間:</label>
                    <input type="text" id="business_time" name="business_time" value="{{ $store->business_time }}">
                    <br>

                    <label for="latlng_mask">座標:</label>
                    <input type="text" id="latlng_mask" name="latlng_mask" value="{{ $store->latlng_mask }}">
                    <br>
                </div>
                <button type="button" class="button" onclick="goBack('{{ $store->id }}','store')">取消</button>
            @else
                <div id="food">
                    <label for="unit_price">價格:</label>
                    <input type="text" id="unit_price" name="unit_price" value="{{ $food->unit_price }}">
                    <br>

                    <label for="desc">備註:</label>
                    <input type="text" id="desc" name="desc" value="{{ $food->desc }}">
                    <br>
                    <input type="hidden" id="store_id" name="store_id" value="{{ $food->store_id }}">
                </div>
                <button type="button" class="button" onclick="goBack('{{ $food->store_id }}','food')">取消</button>
            @endif
            <button type="submit" class="button">送出</button>
        </form>
        <div>
</body>

</html>
