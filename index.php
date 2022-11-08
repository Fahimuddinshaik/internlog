<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        input {
            margin-bottom: 10px;
        }

        #two {
            display: none;
        }
    </style>
</head>

<body style="background-color:darkviolet;">
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4 m-auto my-5 p-3 shadow" style="background-color: white;">
                <h1 style="text-align: center;">Login</h1>
                <hr>
                <form method="post" action="thankyou.php">
                    <div class="col" id="one">
                        <label>Name : </label>
                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                        <label>Phone : </label>
                        <input type="phone" class="form-control" placeholder="Mobile Number" name="phone" required>
                        <label>Email : </label>
                        <input type="email" class="form-control" placeholder="email" name="email" required>
                        <button class="btn btn-primary my-3" style="float: right;" onclick="abc();">Next</button>
                    </div>

                    <div class="col" id="two">
                        <label>Location : </label>
                        <input type="text" class="form-control" placeholder="Location" name="location" required>
                        <label>Age : </label>
                        <input type="number" class="form-control" placeholder="Age" name="age" required>
                        <label>University : </label>
                        <input type="text" class="form-control" placeholder="University" name="university" required>
                        <button class="btn btn-primary my-3" style="float: left;" onclick="prev()">Previous</button>
                        <button class="btn btn-primary my-3" style="float: right;" type="submit"
                            name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script defer type="text/javascript" src="sample.js"></script>
</body>

</html>