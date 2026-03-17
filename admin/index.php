<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
    crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdjs.cloudFlare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IR0HhonpyAIVpjryIPvoDwiPUikdwk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrpolicy="no-referrer /">



    <!-- css file -->
    <link rel="stylesheet" href="style2.css">
     
</head>
<body>
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.png" class="admin_panel_logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!-- third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="../images/watch/rolex1.jpg" 
                    alt="" class="admin-image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>  
                <!-- button*10>a.nav-link.text-light.bg-info.my-1 -->
                <div class="button text-center">
                    <button class="my-3"><a href="" class="nav-link bg -info my-1">Insert Products</a></button>
                    <button><a href="" class="nav-link -info my-1">View Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link bg -info my-1">Insert Catagories</a></button>
                    <button><a href="" class="nav-link bg -info my-1">View Catagories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link bg -info my-1">Insert Brands</a></button>
                    <button><a href="" class="nav-link bg -info my-1">View Brands</a></button>
                    <button><a href="" class="nav-link bg -info my-1">All Orders</a></button>
                    <button><a href="" class="nav-link bg -info my-1">All Payments</a></button>
                    <button><a href="" class="nav-link bg -info my-1">Listed Users</a></button>
                    <button><a href="" class="nav-link bg -info my-1">Logout</a></button>
                </div>
            </div>
        </div> 
    </div>

    <!-- fourth child -->
    <div class="container my-5">
        <?php
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
        if(isset($_GET['insert_brand'])){
            include('insert_brands.php');
        }
        ?>
    </div>

    <!-- bootstrap css -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" 
    crossorigin="anonymous"></script>


    

</body>
</html>