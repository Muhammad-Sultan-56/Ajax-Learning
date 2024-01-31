<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ajax CRUD</title>
    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="./Bootstrap/icons/font/bootstrap-icons.css">
</head>

<body>
    <div class="container my-4">

        <div id="messages"></div>

        <div class="bg-secondary mx-2 text-center p-2 text-white d-flex justify-content-between">
            <h2>PHP & AJAX CRUD</h2>

            <div class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search here...">
                <button class="btn btn-outline-light  shadow-none" type="submit"><i class="bi bi-search"></i></button>
            </div>
        </div>

        <!-- form start-->
        <form id="addRecord">
            <div class="row p-3 mx-2 bg-light">
                <div class="col-md-4">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control shadow-none" placeholder="Enter here..." required id="fname">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control shadow-none" placeholder="Enter here..." required id="lname">
                </div>

                <div class="col-md-4 d-grid p-1">
                    <button type="submit" id="submit" class="btn btn-secondary shadow-none mt-4"><i class="bi bi-plus-lg"></i> Submit</button>
                </div>

            </div> <!-- row end-->
        </form>
        <!-- form end-->


        <!-- table start -->
        <div class="p-2">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>

        <!-- table end -->
    </div><!--container-->

</body>

</html>

<!-- jquery include -->
<script src="./jquery/jquery.js"></script>


<script>
    $(document).ready(function() {

        // Select Data Ajax Function of Jquery
        function showData() {
            $.ajax({
                url: "select.php",
                type: "POST",
                success: function(data) {
                    $("#tbody").html(data);
                }
            }) //ajax
        }
        showData();



        $("#submit").on("click", function(e) {

            e.preventDefault();
            var fname = $("#fname").val();
            var lname = $("#lname").val();

            if (fname == "" || lname == "") {
                alert("All Fields are required...");
            } else {
                // Insert Data Ajax Function of Jquery
                $.ajax({
                    url: "insert.php",
                    type: "POST",
                    data: {
                        first_name: fname,
                        last_name: lname
                    },
                    success: function(data) {
                        //select function call on submit
                        showData();

                        if (data == 1) {
                            alert('Congratulation! Data Inserted Successfully...');
                            $("#addRecord").trigger("reset");
                        } else {
                            alert('Sorry! Data is not Inserted...');
                        }
                    }
                }) //ajax


            }

        }) //onclick function

        $(document).on("click", ".delete-btn", function() {
            if(confirm("Do you Really want to Delete this Row?")){
                var id = $(this).data("id");
            var del = this;
            $.ajax({
                url: "delete.php",
                type: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    if (data == 1) {
                        $(del).closest("tr").fadeOut();
                    }
                    else{
                        alert("Sorry! Data is not Deleted...")
                    }
                }
            }) //ajax

            }
       
        })

    }) //document.ready
</script>