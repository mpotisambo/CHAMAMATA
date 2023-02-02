<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAMAMATA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        rel="nofollow" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
        crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./img/chamamata.jpg" alt="" width="50" height="35" class="d-inline-block align-text-top">
            CHAMAMATA
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

input[type=text],
select,
textarea {
    width: 25%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 3px;
    background-color: #f2f2f2;
    padding: 12px;
}
</style>

<body>
    <div class="container">
        <form method="POST" action="process.php">

            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="name"><br><br>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age"><br><br>
            <label for="Marital">Marital Status :</label> &nbsp
            <select name="status" id="status">
                <option value="married">Married</option>
                <option value="single">Single</option>

                <select>
                    <br> <br>

                    <label for="dateofregistration">Date of Registration:</label>
                    <input type="date" id="dateofregistration" name="date"><br><br>

                    <label for="platenumber">Plate Number:</label>
                    <input type="text" id="platenumber" name="platenumber"><br><br>

                    <label for="driverlicense">Driver's License:</label>
                    <input type="text" id="driverlicense" name="license"><br><br>

                    <label for="cardescription">Car Description:</label>
                    <textarea id="cardescription" name="description"></textarea><br><br>

                    <input type="submit" value="submit" id="submit">
        </form>
    </div>
</body>

</html>