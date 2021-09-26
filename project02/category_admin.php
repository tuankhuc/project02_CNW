<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Category</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
</head>

<body>
    <header>
        <nav class="navbar admin navbar-expand-md">
            <div class="container h-100 d-flex justify-content-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="./home_admin.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./user_admin.php">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./category_admin.php">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./food_admin.php">Food</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./order_admin.php">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./login.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="home__main">
        <div class="container">
            <div class="row">
                <h1 class="home__heading">Manage Category</h1>
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn_admin border-0">Add Category</button>
            </div>

            <table class="user__table table">
                <thead>
                    <tr>
                        <th scope="col">S.N.</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Featured</th>
                        <th scope="col">Active</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Pizza</td>
                        <td>
                            <img width="104px" src="./assets/img/pizza.jpg" alt="">
                        </td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn action-btn btn-success">Update Category</button>
                                <button type="button" class="btn action-btn btn-pink">Delete Category</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Burger</td>
                        <td>
                            <img width="104px" src="./assets/img/burger.jpg" alt="">
                        </td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn action-btn btn-success">Update Category</button>
                                <button type="button" class="btn action-btn btn-pink">Delete Category</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>MoMo</td>
                        <td>
                            <img width="104px" src="./assets/img/momo.jpg" alt="">
                        </td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn action-btn btn-success">Update Category</button>
                                <button type="button" class="btn action-btn btn-pink">Delete Category</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Quia est ipsum id id</td>
                        <td>
                            <img width="104px" src="./assets/img/pizza.jpg" alt="">
                        </td>
                        <td>No</td>
                        <td>Yes</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn action-btn btn-success">Update Category</button>
                                <button type="button" class="btn action-btn btn-pink">Delete Category</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
    </main>

    <footer class="footer-admin text-center">
        <p class="footer__text m-0 text-white">
            2020 All rights reserved, Food House. Developed By
            <a href="#" class="fw-700">CSE485</a>
        </p>
    </footer>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>