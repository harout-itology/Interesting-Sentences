<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interesting Sentences App</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<div class="container mt-5 body-container">
    <h1 class="mb-5">Interesting Sentences</h1>
    <form id="searchForm">
        <div class="row">
            <div class="form-group col-md-10">
                <input type="text" class="form-control" id="searchInput" placeholder="Enter search keyword" autofocus>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-primary" id="searchBtn">Search</button>
            </div>
        </div>
    </form>
    <div class="mt-5" id="resultTable"></div>
</div>
<script src="js/jquery-3.5.1.min.js" defer></script>
<script src="js/popper.min.js" defer></script>
<script src="js/bootstrap.min.js" defer></script>
<script src="js/app.js" defer></script>
</body>
</html>