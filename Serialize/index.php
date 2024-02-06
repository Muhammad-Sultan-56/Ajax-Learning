<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ajax CRUD</title>
    <!-- custom style -->
    <link rel="stylesheet" href="./Bootstrap/css/style.css">
    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="./Bootstrap/icons/font/bootstrap-icons.css">
</head>

<body>
    <div class="container my-4">

        <div class="bg-primary mx-2 p-3 text-white">
            <h2>Serialize Form in PHP & Ajax</h2>
        </div>

        <!-- form start-->
        <form id="addRecord">
            <div class="row  p-3 mx-2 bg-light">
                <div class="col-md-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control shadow-none" placeholder="Enter here..." id="name" name="name">
                </div>

                <div class="col-md-2">
                    <label class="form-label">Age</label>
                    <input type="number" class="form-control shadow-none" placeholder="Enter here..." id="age" name="age">
                </div>

                <div class="col-md-3">
                    <label class="form-label">Country</label>
                    <select name="country" id="country" class="form-control shadow-none">
                        <option value="-1">Choose here</option>
                        <option>Pakistan</option>
                        <option>Bangladesh</option>
                        <option>India</option>
                        <option>Nepal</option>

                    </select>
                </div>

                <div class="col-md-2">
                    <label class="form-label">Gender</label> <br>

                    <label class="form-check-label" for="male">Male </label>
                    <input type="radio" name="gender" value="male" id="male" class="form-check-input shadow-none me-2">

                    <label class="form-check-label" for="female">Female </label>
                    <input type="radio" name="gender" value="male" id="female" class="form-check-input shadow-none">
                </div>


                <div class="col-md-2 d-grid p-1">
                    <button type="submit" id="submit" name="submit" class="btn btn-primary shadow-none mt-4"><i class="bi bi-plus-lg"></i> Add</button>
                </div>

            </div> <!-- row end-->
        </form>
        <div id='res'></div>
        <!-- form end-->
</body>

</html>
<!-- jquery include -->
<script src="./jquery/jquery.js"></script>

<script>
    $(document).ready(function() {
        $("#submit").on("click", function(e) {
            e.preventDefault();

            var name = $("#name").val();
            var age = $("#age").val();
            var country = $("#country").val();
            var gender = $("#gender").val();

            if (name == "" || age == "" || !$("input:radio[name=gender]").is(":checked")) {
                alert("All fields are Required")
            }
            else{

                $.post(
                    "insert.php",
                    $("#addRecord").serialize(),
                    function(data){
                        alert(data);
                        $("#addRecord")[0].reset();
                    }
                )
            }

        }) // on click function
    }) //ready function
</script>