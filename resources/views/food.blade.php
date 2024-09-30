<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <style>
        .storelist {
            position: relative;
            margin: 2em auto;
            background: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1;
            min-height: 80vh;
            width: 90%;
        }

        .listitle {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #0a68e578;
            padding: 1em;
        }

        .listitle>h2 {
            color: white;
            margin: 0;
        }

        .listitle>div {
            text-align: right;
        }

        .listitle>div>button {
            background-color: transparent;
            border: 2px solid white;
            color: white;
            padding: 0.5em 1em;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
            min-width: 15vh;
        }

        .store {

            margin: 2em auto;
            background: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 10;
            min-height: 8vh;
        }

        .storeframe {
            display: inline-flex;
            margin: 5px;
            padding: 1em;
            box-sizing: border-box;
            text-align: center;
            border-radius: 5px;
            transition: background 0.3s;
            gap: 20px;
            flex-wrap: wrap;
            width: 100%;
        }

        .storeframe>a {
            width: 15%
        }

        .edit {
            background-color: transparent;
            border: 2px solid #8caae7;
            color: #8caae7;
            padding: 0.5em 1em;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
            float: right;
            min-height: inherit;
        }
    </style>
</head>
<script>
    window.onload = function() {
        const foodItemsArray = localStorage.getItem('foodItem');
        let foodItem;
        if (foodItemsArray) {
            foodItem = JSON.parse(foodItemsArray);
        } else {
            foodItem = []; // 如果没有数据，初始化为空数组
        }

        // 如果有 foodName，则在页面上显示
        if (foodItem) {
            document.getElementById('store-name').innerText = foodItem.name;
        } else {
            document.getElementById('store-name').innerText = "未知店家"; // 处理未找到名称的情况
        }
    }

    function createFood(food) {
        localStorage.setItem('storeOrFood', (food));
        window.location.href = '/create';
    }

    function editFood(event, foodId) {
        event.stopPropagation();
        window.location.href = `/food/edit/${foodId}`;
    }
</script>

<body>
    <div class="storelist">
        <div class="listitle">
            <h1 id="store-name"></h1>
            <div>
                <button onclick=" window.location.href = '/'">回上一頁</button>
                <button onclick="createFood('food')">新增</button>
            </div>
        </div>
        <div class="storeframe">
            @foreach ($food as $item)
                <a>
                    <div class="store">
                        {{ $item->name }}
                        <button class="edit" onclick="editFood(event,'{{ $item->id }}')">編輯</button>
                        <br />
                        NT$:{{ $item->unit_price }}
                        <div>
                            備註: {{ $item->desc }}
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</body>

</html>
