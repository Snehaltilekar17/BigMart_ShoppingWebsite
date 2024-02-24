<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BigMart Admin Dashboard</title>
    <link rel="stylesheet" href="bootstrap.min.css">

    <style>
        body {
            margin: 0;
        }

        ul {
            list-style-type: none;
            margin-top: 7.5%;
            padding: 0;
            width: 12%;
            background-color: #black;
            position: fixed;
            height: 100%;

        }

        li a {
            display: block;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
        }

        li a.active {
            background-color:
                color: white;
        }

        li a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        d1 {
            background-color: #000;

        }
    </style>

    <script>
        function loadPage(url) {
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('Target_div').innerHTML = html;
                })
                .catch(error => console.error('Error:', error));
        }

        function loadPage_2(url) {
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('Target_div').innerHTML = html;
                })
                .catch(error => console.error('Error:', error));
        }
    </script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <a class="navbar-brand" href="#">
            <h3>BigMart <small>Admin</small></h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </nav>



    <div class="">
        <div class="">
            <ul class="d1">
                <li><a class="active" href="#" onclick="loadPage('Default.php','Target_div')">Home</a>
                </li>
                <li><a href="#" onclick="loadPage('ADD_Products.php','Target_div')">Add Product</a></li>
                <li><a href="#" onclick="loadPage_2('View_STK.php','Target_div')">Stock</a></li>
                <li><a href="#about" onclick="loadPage3('Order_rept.php','Target_div')">Order's</a></li>
                <li><a href="#" onclick="loadPage3('Feedback_rept.php','Target_div')">Feedback's </a></li>
                <li><a href="#" onclick="loadPage2('View_STK.php','Target_div')">Stock</a></li>
                <li><a href="#about" onclick="loadPage2('View_STK.php','Target_div')">About</a></li>
            </ul>
        </div>

        <div id="Target_div" style="margin-left:15%;padding:1px 16px;height:1000px;">

        </div>
        <!-- Content goes here -->

    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>