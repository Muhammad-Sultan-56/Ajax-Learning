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
        <div class="p-3 mx-2">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Country</th>
                        <th scope="col">Gender</th>

                    </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>

    </div>
</body>

</html>
<!-- jquery include -->
<script src="./jquery/jquery.js"></script>

<script>
    $(document).ready(function() {

        // $.ajax({
        //     url: "./json/json-data.json",
        //     type: "POST",
        //     dataType : "JSON",
        //     success: function(data) {
        //         $.each(data, function(index, item) {
        //             $('#res').append('<p>' + item.id + ' ' + item.title + '</p>');
        //         });
        //     }
        // })


        $.ajax({
            url: "fetch-json.php",
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                // console.log(data);
                $.each(data, function(key, value) {

                    $("#tbody").append("<tr> <td>" + value.id + "</td> <td>" + value.name + "</td> <td>" + value.age + " </td> <td>" + value.country + "</td> <td>" + value.gender + "</td> </tr>")
                })
            }
        })

    }) //ready function
</script>