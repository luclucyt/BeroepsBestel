<!DOCTYPE html>
<html lang="en">
<head>    
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="images/webIcon.ico">

    <title>De Beren || Reviews</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/_menu/menu.css">
    <link rel="stylesheet" href="CSS/review/review.css">
    
    <!-- JS -->
    <script src="JS/_menu/menu.js"></script>
    <script src="JS/login/login.js" ></script>
    <script src="JS/review/review.js" defer></script>
</head>

<body>
    <header>
        <?php include '_menu.php'; ?>
    </header>

    <main>
        <div id="reviewsWrapper">
            <?php 
                $data = file_get_contents("data/reviews/reviews.txt");
                echo ($data)
            ?>
        </div>
        
        <div id="reviewForm">
            <h1>Plaats een review:</h1>
            <form action="" method="POST">
                <label for="reviewName">Naam:</label><br>
                <input type="text" name="reviewName" id="reviewName" required readonly><br>

                <label for="reviewRating">Rating:</label><br>
                <input type="number" name="reviewRating" id="reviewRating" min="1" max="5" required><br>

                <label for="reviewText">Review:</label><br>
                <textarea name="reviewText" id="reviewText" cols="30" rows="10" required></textarea>

                <input type="submit" value="Verstuur" name="reviewForm">
            </form>
        </div>
    </main>

    <footer>
        <?php //include '_footer.php'; ?>
    </footer>
</body>
</html>

<?php 
    if(isset($_POST['reviewForm'])){
        $reviewName = $_POST['reviewName'];
        $reviewRating = $_POST['reviewRating'];
        $reviewText = $_POST['reviewText'];

        $reviewName = htmlspecialchars($reviewName);
        $reviewRating = htmlspecialchars($reviewRating);
        $reviewText = htmlspecialchars($reviewText);

        $reviewName = trim($reviewName);
        $reviewRating = trim($reviewRating);
        $reviewText = trim($reviewText);

        $reviewName = ucfirst($reviewName);

        $reviewName = strip_tags($reviewName);
        $reviewRating = strip_tags($reviewRating);
        $reviewText = strip_tags($reviewText);


        $file = fopen("data/reviews/reviews.txt", "a");

        if($reviewRating == 1){

            fwrite($file, '
<div class="reviewWrapper">
    <div class="name"><h1>' . $reviewName . ':</h1></div>
    <div class="starWrapper">
        <div class="star">
            <img src="images/reviews/Gstar.svg" alt="star" class="star">
        </div>
        <div class="star">
            <img src="images/reviews/Rstar.svg" alt="star" class="star">
        </div>
        <div class="star">
            <img src="images/reviews/Rstar.svg" alt="star" class="star">
        </div>
        <div class="star">
            <img src="images/reviews/Rstar.svg" alt="star" class="star">
        </div>
        <div class="star">
            <img src="images/reviews/Rstar.svg" alt="star" class="star">
        </div>
    </div>
    <div class="review">' . $reviewText . '</div>
</div> 
        
        ');
        }else if($reviewRating == 2){
            fwrite($file, '
<div class="reviewWrapper">
    <div class="name"><h1>' . $reviewName . ':</h1></div>
    <div class="starWrapper">
        <div class="star">
            <img src="images/reviews/Gstar.svg" alt="star" class="star">
        </div>
        <div class="star">
            <img src="images/reviews/Gstar.svg" alt="star" class="star">
        </div>
        <div class="star">
            <img src="images/reviews/Rstar.svg" alt="star" class="star">
        </div>
        <div class="star">
            <img src="images/reviews/Rstar.svg" alt="star" class="star">
        </div>
        <div class="star">
            <img src="images/reviews/Rstar.svg" alt="star" class="star">
        </div>
    </div>
    <div class="review">' . $reviewText . '</div>
</div> 
        
        ');
        }else if($reviewRating == 3){
            fwrite($file, '
<div class="reviewWrapper">
    <div class="name"><h1>' . $reviewName . ':</h1></div>
    <div class="starWrapper">
        <div class="star">
            <img src="images/reviews/Gstar.svg" alt="star" class="star">
        </div>
        <div class="star">
            <img src="images/reviews/Gstar.svg" alt="star" class="star">
        </div>
        <div class="star">
            <img src="images/reviews/Gstar.svg" alt="star" class="star">
        </div>
        <div class="star">
            <img src="images/reviews/Rstar.svg" alt="star" class="star">
        </div>
        <div class="star">
            <img src="images/reviews/Rstar.svg" alt="star" class="star">
        </div>
    </div>
    <div class="review">' . $reviewText . '</div>
</div> 
        
        ');
        }else if($reviewRating == 4){
            fwrite($file, '
<div class="reviewWrapper">
    <div class="name"><h1>' . $reviewName . ':</h1></div>
    <div class="starWrapper">
        <div class="star">
            <img src="images/reviews/Gstar.svg" alt="star" class="star">
        </div>
        <div class="star">
            <img src="images/reviews/Gstar.svg" alt="star" class="star">
        </div>
        <div class="star">
            <img src="images/reviews/Gstar.svg" alt="star" class="star">
        </div>
        <div class="star">
            <img src="images/reviews/Gstar.svg" alt="star" class="star">
        </div>
        <div class="star">
            <img src="images/reviews/Rstar.svg" alt="star" class="star">
        </div>
    </div>
    <div class="review">' . $reviewText . '</div>
</div> 
        
        ');
        }else if($reviewRating == 5){
            fwrite($file, '
<div class="reviewWrapper">
    <div class="name"><h1>' . $reviewName . ':</h1></div>
    <div class="starWrapper">
        <div class="star">
            <img src="images/reviews/Gstar.svg" alt="star" class="star">
        </div>
        <div class="star">
            <img src="images/reviews/Gstar.svg" alt="star" class="star">
        </div>
        <div class="star">
            <img src="images/reviews/Gstar.svg" alt="star" class="star">
        </div>
        <div class="star">
            <img src="images/reviews/Gstar.svg" alt="star" class="star">
        </div>
        <div class="star">
            <img src="images/reviews/Gstar.svg" alt="star" class="star">
        </div>
    </div>
    <div class="review">' . $reviewText . '</div>
</div> 
        
        ');
        }
    }
?>