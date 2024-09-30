<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
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
    window.onload = function() {
        const storeOrFood = localStorage.getItem('storeOrFood');
        const form = document.getElementById('dynamicForm');

        if (storeOrFood === 'store') {
            titleElement.innerText = `新增店家`;
            document.getElementById('store').style.display = 'block';
            form.action = "{{ route('stores.store') }}";
        } else if (storeOrFood === "food") {
            const foodItemsArray = JSON.parse(localStorage.getItem('foodItem'));
            document.getElementById('store_id').value = foodItemsArray.id;
            titleElement.innerText = `新增食物`;
            document.getElementById('food').style.display = 'block';
            form.action = "{{ route('food.store') }}";
        }
    }
</script>

<body>
    <div class="storelist">
        <h1 id="titleElement"></h1>
        <form method="POST" id="dynamicForm">
            @csrf
            <label for="name">名稱:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <div id="store" class="content">
                <label for="phone">電話:</label>
                <input type="text" id="phone" name="phone">
                <br>

                <label for="business_time">營業時間:</label>
                <input type="text" id="business_time" name="business_time">
                <br>

                <label for="latlng_mask">座標:</label>
                <input type="text" id="latlng_mask" name="latlng_mask">
                <br>
            </div>
            <div id="food" class="content">
                <label for="unit_price">價格:</label>
                <input type="text" id="unit_price" name="unit_price">
                <br>

                <label for="desc">備註:</label>
                <input type="text" id="desc" name="desc" value="">
                <br>
                <input type="hidden" id="store_id" name="store_id" value="">
            </div>
            <button type="submit" class="button" onclick="javascript:history.back()">取消</button>
            <button type="submit" class="button">送出</button>
        </form>
    </div>
</body>

</html>
