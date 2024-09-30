<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
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
            width: 32%
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
        }
    </style>
</head>
<script>
    function storeFoodId(foodItem) {
        localStorage.setItem('foodItem', JSON.stringify(foodItem));
        window.location.href = `/food/${foodItem.id}`;
    }

    function createStore(store) {
        localStorage.setItem('storeOrFood', (store));
        window.location.href = '/create';
    }

    function editStore(event, storeId) {
        event.stopPropagation();
        window.location.href = `/edit/${storeId}`;
    }
</script>

<body>
    <div class="storelist">
        <div class="listitle">
            <h2>店家列表</h2>
            <div>
                <button onclick="createStore('store')">新增</button>
            </div>
        </div>
        <div class="storeframe">
            @foreach ($store as $item)
                <a href="#" onclick="storeFoodId({{ $item }})">
                    <div class="store">
                        {{ $item->name }}
                        <button class="edit" onclick="editStore(event,'{{ $item->id }}')">編輯</button>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</body>

</html>
