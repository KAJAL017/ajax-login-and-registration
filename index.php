<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootsrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="form-crud">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <h2 class="text-center mt-2">Crud System</h2>
                    <form action="js/ajaxReq.js" method="post" class="mt-3">
                        <div class="form-group mt-2">
                            <input type="text" name="uname" id="uname" class="form-control"
                                placeholder="Enter Your Name">
                        </div>
                        <div class="form-group mt-2">
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Enter Your Email">
                        </div>
                        <div class="form-group mt-2">
                            <input type="text" name="upass" id="upass" class="form-control"
                                placeholder="Enter Your Password">
                            <input type="button" value="Submit" class="form-control btn btn-primary mt-2"
                                onclick="add_student()">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal"
        style="margin-left:10%;">
        Sign In
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title " id="exampleModalLabel">Student Registration</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="js/ajaxReq.js" method="post">
                        <div class="form-group mt-2">
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Enter Your Email Address">
                        </div>
                        <div class="form-group mt-2">
                            <input type="password" name="upass" id="upass" class="form-control"
                                placeholder="Enter Your Password">

                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="stu_login()">Submit</button>
                </div>
            </div>
        </div>
    </div>



    <!-- jquery Js  -->
    <script src="js/jquery.js"></script>

    <!-- AjaxReq Js  -->
    <script src="js/ajaxReq.js"></script>

    <!-- Bootsrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>