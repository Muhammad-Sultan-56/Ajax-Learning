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


        <!-- <div id='res' class="bg-white shadow p-3 mx-2"></div> -->
        <div class="p-3 mx-2" id="show-data">

        </div>

    </div>
</body>

</html>
<!-- jquery include -->
<script src="./jquery/jquery.js"></script>

<script>
    $(document).ready(function() {

        $.ajax({
            url: "https://jsonplaceholder.typicode.com/posts",
            type: "GET",
            success: function(res) {
                // console.log(res)
                $.each(res, function(key, value) {
                    $("#show-data").append(" <b>ID</b> " + value.id + "<br>" + "<b>Title</b> " + value.title + "<br>" + " <b>Body</b> " + value.body + "<br>")

                })
            }

        })

    }) //ready function
</script>