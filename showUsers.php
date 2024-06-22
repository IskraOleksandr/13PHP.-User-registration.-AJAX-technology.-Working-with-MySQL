<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show_users</title>
    <link rel="stylesheet" type="text/css" href="Style.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>

<body>
<div class="div">
    <div id="dv2">
        <a id="my" href="index.html" target="_self">Назад</a>
        <hr class="hrn">
        <table id="cities"></table>
        <script>
                $(document).ready(function () {
                    $.ajax({
                        url: 'test.php',
                        type: 'GET',
                        success: function (data) {
                            const filters = JSON.parse(data);
                            $('#cities').html(filters.data);
                        }
                    });

                });
        </script>
    </div>
</div>
</body>

</html>

