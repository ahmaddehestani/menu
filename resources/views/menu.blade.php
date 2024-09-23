<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیریت منوها</title>
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100 p-6">
<div class="flex justify-around">
    <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-center text-3xl"> Menu</h2>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    title
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" placeholder="title" id="title" name="title" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    description
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" id="description" name="description" placeholder="description">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    position
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" id="position" name="position" placeholder="position">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    type
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" id="type" name="type" placeholder="type">
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" id="add-menu" >
                    save menuItems
                </button>
            </div>
        </form>
    </div>
    <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-center text-3xl"> Menu Items</h2>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    menu
                </label>
                <select id="item-menu_id" name="menu_id" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                  @foreach($menus as $menu)
                        <option value="{{$menu->id}}">{{$menu->title}}</option>

                  @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    parent
                </label>
                <select id="item-parent_id" name="parent_id" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="0">ندارد</option>
                  @foreach($menuItems as $item)
                        <option value="{{$item->id}}">{{$item->title}}</option>
                  @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    title
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" id="item-title" name="title" placeholder="title">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    description
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" id="item-description" name="description" placeholder="description">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    slug
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" id="item-slug" name="slug" placeholder="slug">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    order
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" id="item-order" name="order" placeholder="order">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    url
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" id="item-url" name="url" placeholder="url">
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" id="add-menu-items"  >
                    Save Menu Item
                </button>
            </div>
        </form>
    </div>
</div>
<div>
    @foreach($menuItems as $item)
        <div class="flex-col bg-amber-300">
            <button
                type="button"
                class=" m-2 rounded bg-blue-200 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 ">
                {{$item->title}}
            </button>
                @if(isset($item->children))
                    @foreach($item->children as $child)
                       <div class="flex-row justify-center bg-amber-950 ml-10">
                           <button
                               type="button"
                               class=" rounded bg-blue-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 ">
                               {{$child->title}}
                           </button>
                       </div>
                    @endforeach
                @endif

        </div>


    @endforeach
</div>
</body>
</html>
<script>
    $('#add-menu').click(function() {
        const title = $('#title').val();
        const description = $('#description').val();
        const type = $('#type').val();
        const position = $('#position').val();


        if (position && title) {
            $.ajax({
                url: '/menus',
                method: 'POST',
                data: {
                    type: type,
                    title: title,
                    description: description,
                    position: position,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    alert('done');
                }
            });
        } else {
            alert('لطفاً منو و عنوان را وارد کنید');
        }
    });
</script>
<script>
    $('#add-menu-items').click(function() {
        const title = $('#item-title').val();
        const description = $('#item-description').val();
        const slug = $('#item-slug').val();
        const menu_id = $('#item-menu_id').val();
        const image = $('#item-image').val();
        const url = $('#item-url').val();
        const parent_id = $('#item-parent_id').val();
        const order = $('#item-order').val();



        if (order && title && menu_id) {
            $.ajax({
                url: '/menu-items',
                method: 'POST',
                data: {
                    slug: slug,
                    title: title,
                    description: description,
                    menu_id: menu_id,
                    image: image,
                    url: url,
                    parent_id: parent_id,
                    order: order,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    alert('done');
                }
            });
        } else {
            alert('لطفاً منو و عنوان و تریتیب نمایش را وارد کنید');
        }
    });
</script>
