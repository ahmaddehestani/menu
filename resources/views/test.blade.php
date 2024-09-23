<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>درگ و جابجایی آیتم‌ها</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <style>
        #sortable {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 300px;
        }
        #sortable li {
            margin: 5px;
            padding: 10px;
            padding-left: 1.5em;
            font-size: 1.2em;
            height: 30px;
            cursor: move;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<ul id="sortable">
    <li class="ui-state-default">آیتم 1</li>
    <li class="ui-state-default">آیتم 2</li>
    <li class="ui-state-default">آیتم 3</li>
    <li class="ui-state-default">آیتم 4</li>
</ul>

<script>
    $( function() {
        $( "#sortable" ).sortable();
        $( "#sortable" ).disableSelection();
    } );
</script>

</body>
</html>
