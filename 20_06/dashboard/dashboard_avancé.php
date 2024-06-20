<?php
require_once('config.php');
include('./constant/connect.php');

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 12; 
$offset = ($page - 1) * $limit;

$id = $_SESSION['userId'];
$date = date('Y-m-d');

$cf1 = 1;

$sa = '€';

$query = "SELECT C.*, P.lien as idcc FROM categories C 
          LEFT JOIN pro P ON C.id = P.category_id 
          GROUP BY C.id 
          LIMIT $limit OFFSET $offset";
$products = $conn->query($query);

$totalQuery = "SELECT COUNT(DISTINCT C.id) as total FROM categories C 
               LEFT JOIN pro P ON C.id = P.category_id";
$totalResult = $conn->query($totalQuery);
$totalRow = $totalResult->fetch_assoc();
$totalCourses = $totalRow['total'];
$totalPages = ceil($totalCourses / $limit);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/popup_style.css">
    <style>
        .card {
            margin-bottom: 20px;
        }
        .card img {
            max-height: 100px;
            object-fit: cover;
        }
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 200px;
        }
        .card-title {
            font-size: 1rem;
        }
        .card-text {
            font-size: 0.9rem;
            flex-grow: 1;
            margin-bottom: 10px;
        }
        .pagination {
            margin-top: 20px;
        }
        .top-bar {
            background-color: black;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .top-bar a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Black top bar with navigation -->
    <div class="top-bar">
        <a href="https://formationpangee.com/tableaub.php" class="btn btn-success btn-lg">Retour au Tableau de Bord</a>
    </div>

    <div class="container">
        <?php if($cf1 == 0): ?>
        <div class="popup popup--icon -error js_error-popup popup--visible">
            <div class="popup__background"></div>
            <div class="popup__content">
                <h3 class="popup__content__title">
                    Compléter votre Inscription
                </h3>
                <p>Desolé vous devez configurer votre regime fiscal</p>
                <p>
                    <?php echo "<script>setTimeout(\"location.href = 'inform.php';\", 2500);</script>"; ?>
                </p>
            </div>
        </div>
        <?php else: ?>
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <?php 
                    $displayedCourses = [];
                    while($row = $products->fetch_assoc()): 
                        if (in_array($row['id'], $displayedCourses)) {
                            continue;
                        }
                        $displayedCourses[] = $row['id'];
                        
                        $upload_path = base_app.'/a/uploads/cours_'.$row['id'];
                        $img = "";
                        if(is_dir($upload_path)){
                            $fileO = scandir($upload_path);
                            if(isset($fileO[2]))
                                $img = "a/uploads/cours_".$row['id']."/".$fileO[2];
                            else
                                $img = "path/to/default/image.jpg"; // Default image path
                        } else {
                            $img = "path/to/default/image.jpg"; // Default image path
                        }
                        foreach($row as $k => $v){
                            $row[$k] = trim(stripslashes($v));
                        }
                        $row['description'] = htmlspecialchars($row['description']);
                    ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo validate_image($img) ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['category'] ?></h5>
                                <a href="/bn/a/p/prom.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">View Course</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination Controls -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <?php if($page > 1): ?>
                        <li class="page-item"><a class="page-link" href="?page=<?php echo $page - 1; ?>">Previous</a></li>
                        <?php endif; ?>

                        <?php for($i = 1; $i <= $totalPages; $i++): ?>
                        <li class="page-item <?php if($i == $page) echo 'active'; ?>"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php endfor; ?>

                        <?php if($page < $totalPages): ?>
                        <li class="page-item"><a class="page-link" href="?page=<?php echo $page + 1; ?>">Next</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </section>
        <?php endif; ?>

        <iframe src="/z/i/c/contrat.php" name="iframe_a" width="0px" height="1px"></iframe>

        <?php include('./constant/layout/footer.php'); ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    $(function(){
        $(".preloader").fadeOut();
    });
    </script>
</body>
</html>
