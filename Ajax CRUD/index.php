<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ajax CRUD</title>

    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">


    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="./Bootstrap/icons/font/bootstrap-icons.css">
    <!-- custom style -->
    <link rel="stylesheet" href="./Bootstrap/css/style.css">
</head>

<body>
    <div class="container my-4">

        <div class="bg-secondary mx-2 text-center p-3 text-white d-flex justify-content-between align-items-center">
            <h2>PHP & AJAX CRUD</h2>
            <!-- live search -->
            <div><input class="form-control shadow-none" type="search" id="search" autocomplete="off" placeholder="Search here..."></div>
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
        <div class="p-2" id="tbody">

        </div>
        <!-- table end -->


        <!-- modal start -->

        <div id="modal">
            <div id="modal-form">
                <div class="modal-data"> </div>

                <!--close btn -->
                <div id="close-btn"><i class="bi bi-x-lg fs-5 fw-bold"></i></div>

            </div><!--modal form -->
        </div><!--modal -->

    </div><!--container-->

</body>

</html>

<script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery include -->
<script src="./jquery/jquery.js"></script>


<script>
    $(document).ready(function() {

        // Select Data Ajax Function of Jquery
        function showData(page) {
            $.ajax({
                url: "select.php",
                type: "POST",
                data: {
                    page_no: page
                },
                success: function(data) {
                    $("#tbody").html(data);
                }
            }) //ajax
        }
        showData();


        // Pagination code using jquery ajax

        $(document).on("click", "#pagination a", function(e) {

            e.preventDefault();
            var page_id = $(this).attr("id");

            showData(page_id);
        })


        // Insert Data Ajax Function of Jquery on submit button click

        $("#submit").on("click", function(e) {

            e.preventDefault();
            var fname = $("#fname").val();
            var lname = $("#lname").val();

            if (fname == "" || lname == "") {
                alert("All Fields are required...");
            } else {
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



        // Delete Ajax Function of jquery on delete button click

        $(document).on("click", ".delete-btn", function() {
            if (confirm("Do you Really want to Delete this Row?")) {
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
                        } else {
                            alert("Sorry! Data is not Deleted...")
                        }
                    }
                }) //ajax

            }
        })



        // Edit Modal form open on edit button click 

        $(document).on("click", ".edit-btn", function() {

            // show modal form on click
            $("#modal").show();

            var getid = $(this).data("edit");

            $.ajax({
                url: "edit.php",
                type: "POST",
                data: {
                    id: getid
                },
                success: function(data) {
                    $(".modal-data").html(data);
                }
            }) //ajax
        })


        // hide form on click
        $("#close-btn").on("click", function() {
            $("#modal").hide();
        })



        // Updaet ajax function of jquery  on save button click

        $(document).on("click", "#save", function() {

            var id = $("#edit-id").val();
            var fname = $("#edit-fname").val();
            var lname = $("#edit-lname").val();

            $.ajax({
                url: "update.php",
                type: "POST",
                data: {
                    editId: id,
                    editFname: fname,
                    editLname: lname
                },
                success: function(data) {
                    if (data == 1) {
                        $("#modal").hide();
                        showData();
                    }
                }
            }) //ajax

        })


        //live search ajax function 
        $("#search").on("keyup", function() {

            var search = $(this).val();
            $.ajax({
                url: "live-search.php",
                type: "POST",
                data: {
                    search: search
                },
                success: function(data) {
                    $("#tbody").html(data);
                }
            })
        })


    }) //document.ready
</script>