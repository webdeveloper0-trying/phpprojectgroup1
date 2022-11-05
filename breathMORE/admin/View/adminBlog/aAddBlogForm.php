<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Add Form</title>

    <?php
    session_start();


    include "../../../patient/Controller/common/aChColorTxtController.php";


    if (isset($_POST['adminname']) && isset($_POST['password'])) {
        $adminname = $_POST['adminname'];
        $password = $_POST['password'];
        $_SESSION["adminname"] = $adminname;
    }



    ?>
    <link href="../storage/home/<?= $logoPic ?>" rel="icon" type="image/png" />

    <!-- Bootstrap css1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Bootstrap js1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css?=time()" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css?=time()" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap?=time()" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css?=time()" rel="stylesheet" />

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js" defer></script>

    <!-- custom css -->
    <link rel="stylesheet" href="../common/css/style.css">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center flex-column">
        <h3 class="h3 header my-5">Blog Add Form</h3>
        <form class="form p-5" action="../../Controller/adminBlogs/aAddBlogController.php" method="POST">
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" name="blogTitle" id="blogTitle" class="form-control" required />
                        <label class="form-label" for="blogTitle">Blog Title</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <input type="text" name="blogWriter" id="blogWriter" class="form-control" required />
                        <label class="form-label" for="blogWriter">Blog Writer</label>
                    </div>
                </div>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="datetime-local" name="blogDate" id="blogDate" class="form-control" required />
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" name="blogImage" id="BlogImage" class="form-control" placeholder="imagename.extension" />
                <label class="form-label" for="BlogImage">Blog Image</label>
            </div>




            <!-- Message input -->
            <div class="form-outline mb-4">
                <textarea class="form-control" name="blogContent" id="blogContent" rows="4"></textarea>
                <label class="form-label" for="blogContent">Blog Content</label>
            </div>


            <div class="d-flex justify-content-between">
                <!-- Submit button -->
                <button type="submit" class="btn btn-purple btn-blog mb-4" name="addBlog">Add</button>

              
            </div>
        </form>
    </div>
</body>

</html>