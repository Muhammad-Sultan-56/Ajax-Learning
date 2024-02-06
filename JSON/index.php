<!DOCTYPE html>
<html lang="en">

<head>
    <title>JSON Read Data</title>
    <!-- custom style -->
    <link rel="stylesheet" href="./Bootstrap/css/style.css">
    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="./Bootstrap/icons/font/bootstrap-icons.css">
</head>

<body class="bg-light">
    <div class="container my-4">

        <div class="bg-primary mx-2 p-3 text-white">
            <h2>JSON Read Data in PHP & Ajax</h2>
        </div>


        <div id='res' class="bg-white shadow p-3 mx-2"></div>

    </div>
</body>

</html>
<!-- jquery include -->
<script src="./jquery/jquery.js"></script>

<script>
    $(document).ready(function() {

        $.ajax({
            url: "./json/json-data.json",
            type: "POST",
            dataType : "JSON",
            success: function(data) {
                $.each(data, function(index, item) {
                    $('#res').append('<p>' + item.id + ' ' + item.title + '</p>');
                });
            }
        })

    }) //ready function
</script>