<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ID = mysqli_real_escape_string($conn, $_POST['dr_id']);
    $Name = mysqli_real_escape_string($conn, $_POST['dr_name']);
    $PC = mysqli_real_escape_string($conn, $_POST['dr_pharmCompany']);
    $descr = mysqli_real_escape_string($conn, $_POST['dr_description']);
    $price = mysqli_real_escape_string($conn, $_POST['dr_price']);
    $symptoms = mysqli_real_escape_string($conn, $_POST['dr_symptoms']);
    $ingr = mysqli_real_escape_string($conn, $_POST['dr_ingredients']);

    $select = mysqli_query($conn, "SELECT * FROM `drug_info` WHERE dr_id = $ID");

    if (mysqli_num_rows($select) > 0) {
       echo 'User already exists!';
    } else {
        mysqli_query($conn, "INSERT INTO `drug_info` (dr_id, dr_name, dr_pharmCompany, dr_description, dr_price, dr_symptoms, dr_ingredients) VALUES ($ID, '$Name', '$PC', '$descr', '$price', '$symptoms', '$ingr')") or die('Query failed');
        echo 'Registered successfully!';
    }
}
?>

<DOCTYPE! html>
    <html>

    <link rel = "stylesheet" href = "style.css">
        <head>
            <title>Add Drug</title>
            
<h2>
            <header> <svg xmlns="http://www.w3.org/2000/svg" width="158" height="48" viewBox="0 0 158 48" fill="none">
        <path d="M48 24C48 37.2548 37.2549 48 24 48C10.7452 48 3.063e-05 37.2548 3.063e-05 24C3.063e-05 10.7452 10.7452 0 24 0C37.2549 0 48 10.7452 48 24Z" fill="#394CFF"/>
        <path d="M40.568 16.152V33H36.464V22.896L32.696 33H29.384L25.592 22.872V33H21.488V16.152H26.336L31.064 27.816L35.744 16.152H40.568ZM42.7033 26.28C42.7033 24.904 42.9593 23.696 43.4713 22.656C43.9993 21.616 44.7113 20.816 45.6073 20.256C46.5033 19.696 47.5033 19.416 48.6073 19.416C49.5513 19.416 50.3753 19.608 51.0793 19.992C51.7993 20.376 52.3513 20.88 52.7353 21.504V19.608H56.8393V33H52.7353V31.104C52.3353 31.728 51.7753 32.232 51.0553 32.616C50.3513 33 49.5273 33.192 48.5833 33.192C47.4953 33.192 46.5033 32.912 45.6073 32.352C44.7113 31.776 43.9993 30.968 43.4713 29.928C42.9593 28.872 42.7033 27.656 42.7033 26.28ZM52.7353 26.304C52.7353 25.28 52.4473 24.472 51.8713 23.88C51.3113 23.288 50.6233 22.992 49.8073 22.992C48.9913 22.992 48.2953 23.288 47.7193 23.88C47.1593 24.456 46.8793 25.256 46.8793 26.28C46.8793 27.304 47.1593 28.12 47.7193 28.728C48.2953 29.32 48.9913 29.616 49.8073 29.616C50.6233 29.616 51.3113 29.32 51.8713 28.728C52.4473 28.136 52.7353 27.328 52.7353 26.304ZM67.2723 29.52V33H65.1843C63.6963 33 62.5363 32.64 61.7043 31.92C60.8723 31.184 60.4563 29.992 60.4563 28.344V23.016H58.8243V19.608H60.4563V16.344H64.5603V19.608H67.2483V23.016H64.5603V28.392C64.5603 28.792 64.6563 29.08 64.8483 29.256C65.0403 29.432 65.3603 29.52 65.8083 29.52H67.2723ZM68.7423 26.28C68.7423 24.904 68.9983 23.696 69.5103 22.656C70.0383 21.616 70.7503 20.816 71.6463 20.256C72.5423 19.696 73.5423 19.416 74.6463 19.416C75.5903 19.416 76.4143 19.608 77.1183 19.992C77.8383 20.376 78.3903 20.88 78.7743 21.504V19.608H82.8783V33H78.7743V31.104C78.3743 31.728 77.8143 32.232 77.0943 32.616C76.3903 33 75.5663 33.192 74.6223 33.192C73.5343 33.192 72.5423 32.912 71.6463 32.352C70.7503 31.776 70.0383 30.968 69.5103 29.928C68.9983 28.872 68.7423 27.656 68.7423 26.28ZM78.7743 26.304C78.7743 25.28 78.4863 24.472 77.9103 23.88C77.3503 23.288 76.6623 22.992 75.8463 22.992C75.0303 22.992 74.3343 23.288 73.7583 23.88C73.1983 24.456 72.9183 25.256 72.9183 26.28C72.9183 27.304 73.1983 28.12 73.7583 28.728C74.3343 29.32 75.0303 29.616 75.8463 29.616C76.6623 29.616 77.3503 29.32 77.9103 28.728C78.4863 28.136 78.7743 27.328 78.7743 26.304ZM92.1594 16.152C93.9354 16.152 95.4874 16.504 96.8154 17.208C98.1434 17.912 99.1674 18.904 99.8874 20.184C100.623 21.448 100.991 22.912 100.991 24.576C100.991 26.224 100.623 27.688 99.8874 28.968C99.1674 30.248 98.1354 31.24 96.7914 31.944C95.4634 32.648 93.9194 33 92.1594 33H85.8474V16.152H92.1594ZM91.8954 29.448C93.4474 29.448 94.6554 29.024 95.5194 28.176C96.3834 27.328 96.8154 26.128 96.8154 24.576C96.8154 23.024 96.3834 21.816 95.5194 20.952C94.6554 20.088 93.4474 19.656 91.8954 19.656H89.9514V29.448H91.8954ZM107.389 21.84C107.869 21.104 108.469 20.528 109.189 20.112C109.909 19.68 110.709 19.464 111.589 19.464V23.808H110.461C109.437 23.808 108.669 24.032 108.157 24.48C107.645 24.912 107.389 25.68 107.389 26.784V33H103.285V19.608H107.389V21.84ZM126.775 19.608V33H122.671V31.176C122.255 31.768 121.687 32.248 120.967 32.616C120.263 32.968 119.479 33.144 118.615 33.144C117.591 33.144 116.687 32.92 115.903 32.472C115.119 32.008 114.511 31.344 114.079 30.48C113.647 29.616 113.431 28.6 113.431 27.432V19.608H117.511V26.88C117.511 27.776 117.743 28.472 118.207 28.968C118.671 29.464 119.295 29.712 120.079 29.712C120.879 29.712 121.511 29.464 121.975 28.968C122.439 28.472 122.671 27.776 122.671 26.88V19.608H126.775ZM134.81 19.416C135.754 19.416 136.578 19.608 137.282 19.992C138.002 20.376 138.554 20.88 138.938 21.504V19.608H143.042V32.976C143.042 34.208 142.794 35.32 142.298 36.312C141.818 37.32 141.074 38.12 140.066 38.712C139.074 39.304 137.834 39.6 136.346 39.6C134.362 39.6 132.754 39.128 131.522 38.184C130.29 37.256 129.586 35.992 129.41 34.392H133.466C133.594 34.904 133.898 35.304 134.378 35.592C134.858 35.896 135.45 36.048 136.154 36.048C137.002 36.048 137.674 35.8 138.17 35.304C138.682 34.824 138.938 34.048 138.938 32.976V31.08C138.538 31.704 137.986 32.216 137.282 32.616C136.578 33 135.754 33.192 134.81 33.192C133.706 33.192 132.706 32.912 131.81 32.352C130.914 31.776 130.202 30.968 129.674 29.928C129.162 28.872 128.906 27.656 128.906 26.28C128.906 24.904 129.162 23.696 129.674 22.656C130.202 21.616 130.914 20.816 131.81 20.256C132.706 19.696 133.706 19.416 134.81 19.416ZM138.938 26.304C138.938 25.28 138.65 24.472 138.074 23.88C137.514 23.288 136.826 22.992 136.01 22.992C135.194 22.992 134.498 23.288 133.922 23.88C133.362 24.456 133.082 25.256 133.082 26.28C133.082 27.304 133.362 28.12 133.922 28.728C134.498 29.32 135.194 29.616 136.01 29.616C136.826 29.616 137.514 29.32 138.074 28.728C138.65 28.136 138.938 27.328 138.938 26.304ZM151.459 33.192C150.291 33.192 149.251 32.992 148.339 32.592C147.427 32.192 146.707 31.648 146.179 30.96C145.651 30.256 145.355 29.472 145.291 28.608H149.347C149.395 29.072 149.611 29.448 149.995 29.736C150.379 30.024 150.851 30.168 151.411 30.168C151.923 30.168 152.315 30.072 152.587 29.88C152.875 29.672 153.019 29.408 153.019 29.088C153.019 28.704 152.819 28.424 152.419 28.248C152.019 28.056 151.371 27.848 150.475 27.624C149.515 27.4 148.715 27.168 148.075 26.928C147.435 26.672 146.883 26.28 146.419 25.752C145.955 25.208 145.723 24.48 145.723 23.568C145.723 22.8 145.931 22.104 146.347 21.48C146.779 20.84 147.403 20.336 148.219 19.968C149.051 19.6 150.035 19.416 151.171 19.416C152.851 19.416 154.171 19.832 155.131 20.664C156.107 21.496 156.667 22.6 156.811 23.976H153.019C152.955 23.512 152.747 23.144 152.395 22.872C152.059 22.6 151.611 22.464 151.051 22.464C150.571 22.464 150.203 22.56 149.947 22.752C149.691 22.928 149.563 23.176 149.563 23.496C149.563 23.88 149.763 24.168 150.163 24.36C150.579 24.552 151.219 24.744 152.083 24.936C153.075 25.192 153.883 25.448 154.507 25.704C155.131 25.944 155.675 26.344 156.139 26.904C156.619 27.448 156.867 28.184 156.883 29.112C156.883 29.896 156.659 30.6 156.211 31.224C155.779 31.832 155.147 32.312 154.315 32.664C153.499 33.016 152.547 33.192 151.459 33.192Z" fill="black"/>
        </svg>Add Drug</header>
            </h2>
        </head>
        <body>
            
        <form action="adddrug.php" method="POST">
        <label for="dr_id">ID:</label>
        <input type="text" id="dr_id" name="dr_id" required><br><br>

        <label for="dr_name">Name:</label>
        <input type="text" id="dr_name" name="dr_name" required><br><br>

        <label for="dr_pharmCompany">Pharmaceutical Company:</label>
        <input type="text" id="dr_pharmCompany" name="dr_pharmCompany" required><br><br>

        <label for="dr_description">Description:</label>
        <input type="text" id="dr_description" name="dr_description" required><br><br>

        <label for="dr_price">Price:</label>
        <input type="text" id="dr_price" name="dr_price" required><br><br>

        <label for="dr_symptoms">Symptoms:</label>
        <input type="text" id="dr_symptoms" name="dr_symptoms" required><br><br>

        <label for="dr_ingredients">Ingredients:</label>
        <input type="text" id="dr_ingredients" name="dr_ingredients" required><br><br>

        <input type="submit" value="Register">
    </form>
        </body>
    </html>