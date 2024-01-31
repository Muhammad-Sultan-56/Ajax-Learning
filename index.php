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
        <div class="bg-secondary mx-2 text-center p-2 text-white d-flex justify-content-between">
            <h2>PHP & AJAX CRUD</h2>

            <div class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search here...">
                <button class="btn btn-outline-light  shadow-none" type="submit"><i class="bi bi-search"></i></button>
            </div>
        </div>

        <!-- form start-->
        <div class="row p-3 mx-2 bg-light">
            <div class="col-md-4">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control shadow-none" placeholder="Enter here..." id="fname">
            </div>

            <div class="col-md-4">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control shadow-none" placeholder="Enter here..." id="lname">
            </div>


            <div class="col-md-4 d-grid p-1">
                <button type="submit" class="btn btn-secondary shadow-none mt-4"><i class="bi bi-plus-lg"></i> Submit</button>
            </div>

        </div> <!-- row end-->
        <!-- form end-->


        <!-- table start -->
        <div class="p-2">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><button class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> Edit</button></td>
                        <td><button class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i> Delete</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><button class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> Edit</button></td>
                        <td><button class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i> Delete</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td><button class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> Edit</button></td>
                        <td><button class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i> Delete</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- table end -->

    </div><!--container-->

</body>

</html>