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
    <script src="JS/_menu/menu.js" defer></script>
    <script src="JS/_menu/darkmode.js" defer></script>
    <script src="JS/login/login.js" ></script>
    <script src="JS/review/review.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body id="body">
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
            <form action="reviews.php" method="POST">
                <label for="reviewName">Naam:</label><br>
                <input type="text" name="reviewName" id="reviewName" required onkeydown="return false;" autocomplete="off" value="<?php echo $_COOKIE["naam"] ?>"><br>

                <label for="reviewRating">Rating:</label><br>
                <input type="number" name="reviewRating" id="reviewRating" min="1" max="5" required value="5"><br>

                <label for="reviewText">Review:</label><br>
                <textarea name="reviewText" id="reviewText" cols="30" rows="10" required placeholder="Plaats je review hier..."></textarea>

                <input type="submit" value="Verstuur" name="reviewForm" onsubmit="document.location.href='reviews.php'">
            </form>
        </div>


        <?php
        if(isset($_COOKIE["naam"]) == "admin"){
            echo "
                <script>
                    let reviewsRemoveBTN = document.getElementsByClassName('remove-review');
                    for (let i = 0; i < reviewsRemoveBTN.length; i++){
                        let reviewRemoveBTN = reviewsRemoveBTN[i];
                        
                        reviewRemoveBTN.addEventListener('click', function (){
                            this.parentElement.remove();
                                                
                            const removeElements = document.querySelectorAll('.remove-review');
                            removeElements.forEach((element) => {
                              element.remove();
                            });
                            
                            let reviewsWrapper = document.getElementById('reviewsWrapper').innerHTML
                            console.log(reviewsWrapper);
                            
                    
                    
                            
                            $.ajax({
                            url: 'reviews.php',
                            type: 'POST',
                            data: {string: reviewsWrapper}
                            })
                            
                            window.location.href='';
                        })
                    }
                    
                    let reviews = document.getElementsByClassName('reviewWrapper');
                    for(let i = 1; i < reviews.length; i++){
                        let review = reviews[i];
                        review.innerHTML = `<button class='remove-review'>DELETE REVIEW</button>` + review.innerHTML
                    }
                </script>";
        }

        if(isset($_POST['string'])){
            //calls the UpdateReviews
            UpdateShop($_POST['string']);
        }

        function UpdateShop($reviewcode): void
        {
            $myFile = fopen("data/reviews/reviews.txt", "a");

            //emptys the file
            file_put_contents("data/reviews/reviews.txt", "");
            //write the sting in
            fwrite($myFile, $reviewcode);
        }
        ?>
        <?php
            if (isset($_COOKIE["naam"]) != "admin") {
                echo "
                <script>
                    removeElements = document.querySelectorAll('.remove-review');
                    removeElements.forEach((element) => {
                        element.remove();
                    });
                </script>";
            }
        ?>
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