<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ajax CRUD</title>
    <!-- custom style -->
    <link rel="stylesheet" href="./Bootstrap/css/style.css">
    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container my-4">

        <div class="bg-info mx-auto text-center p-3 text-white d-flex justify-content-between align-items-center">
            <h2>Image Preview & Delete PHP & AJAX CRUD</h2>
        </div>


        <form id="addRecord">
            <div class="row p-3 mx-auto bg-light">

                <div class="col-lg-5 p-4">
                    <label class="form-label">Choose Image</label>
                    <input type="file" class="form-control shadow-none mb-2" name="img" placeholder="Enter here..." id="img">

                    <span class="text-danger" id="extension">Upload Only JPG, PNG, JPEG, GIFF files Only.</span> <br>

                    <button class="btn btn-info mt-3 shadow-none text-white" id="submit" type="submit">Upload</button>

                </div><!--col-->

                <!--empty col-->
                <div class="col-lg-1"></div>

                <div class="col-lg-5" id="preview" style="display: none;">
                    <h5>Image Preview </h5>
                    <div class="w-75" id="preview_img">

                    </div>

                </div><!--col-->


            </div><!--row-->
        </form>


    </div><!--container-->

</body>

</html>

<!-- jquery include -->
<script src="./jquery/jquery.js"></script>


<script>
    $(document).ready(function() {

        $("#addRecord").on("submit", function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: "upload.php",
                type : "POST",
                data : formData,
                contentType : false,
                processData : false,
                success : function(data){
                    $("#preview").show();
                    $('#preview_img').html(data);
                    $("#file").val("");

                }

            })

        })




    }) //document.ready
</script>