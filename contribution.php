<!-- Error Checking -->
<?php
function validateFormData($postData, $fileData)
{
    $errors = [];

    // Check if fields are empty
    if (empty($postData['plant-name'])) {
        $errors[] = "Plant name is required.";
    }
    if (empty($postData['plant-family'])) {
        $errors[] = "Plant family is required.";
    }
    if (empty($postData['plant-genus'])) {
        $errors[] = "Plant genus is required.";
    }
    if (empty($postData['plant-species'])) {
        $errors[] = "Plant species is required.";
    }

    // Validate uploaded files
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    
    if (empty($fileData['fresh-leaf']['name'])) {
        $errors[] = "Fresh leaf image is required.";
    } elseif (!in_array($fileData['fresh-leaf']['type'], $allowedTypes)) {
        $errors[] = "Invalid file type for fresh leaf. Only JPG, PNG, and GIF are allowed.";
    }

    if (empty($fileData['herbarium']['name'])) {
        $errors[] = "Herbarium image is required.";
    } elseif (!in_array($fileData['herbarium']['type'], $allowedTypes)) {
        $errors[] = "Invalid file type for herbarium. Only JPG, PNG, and GIF are allowed.";
    }

    // Check file size (e.g., limit to 2MB)
    $maxFileSize = 2 * 1024 * 1024; // 2MB in bytes
    if ($fileData['fresh-leaf']['size'] > $maxFileSize) {
        $errors[] = "Fresh leaf image exceeds the maximum size of 2MB.";
    }
    if ($fileData['herbarium']['size'] > $maxFileSize) {
        $errors[] = "Herbarium image exceeds the maximum size of 2MB.";
    }

    return $errors;
}

// Usage example
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate the form data
    $errors = validateFormData($_POST, $_FILES);

    if (!empty($errors)) {
        // Display errors
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
        exit; // Stop further processing if errors exist
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="images/constant/leaf.png">

    <meta name="description" content="Learn how you can contribute to our herbarium project. Get involved, support, or donate to help us preserve plant specimens and advance botanical research.">
    <meta name="keywords" content="contribute, herbarium, plant preservation, support, donate, get involved, botanical research, plant specimens">
    <meta name="author" content="Faiq">

    <link rel="stylesheet" type="text/css" href="style/style.css">

    <title>Contribute - Leafly</title>
</head>

<body>  
    <!-- Including header part -->
    <?php include 'include/header.php'; ?>

    <!-- Connect/Create the database -->
    <?php include 'include/contribution_process.php'; ?>

    <main class="contribution__container container">
        <article class="contribution">
            <section class="contribution__wrapper">  
                <h1>Contribute Plant Data</h1>
                
                <form class="contribution__form" action="#" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Plant Information</legend>
                        <div class="contribution__text-box">
                            <label for="plant-name">Plant Name (max 25 characters):</label>
                            <input type="text" id="plant-name" name="plant-name" maxlength="25" required="required" pattern="[A-Za-z ]+">
                        </div>
                            
                        <div class="contribution__text-box">
                            <label for="plant-family">Plant Family:</label>
                            <select id="plant-family" name="plant-family" required>
                                <option value="" disabled selected>Select Family</option>
                                <option value="rosaceae">Rosaceae</option>
                                <option value="fabaceae">Fabaceae</option>
                                <option value="poaceae">Poaceae</option>
                            </select>
                        </div>
            
                        <div class="contribution__text-box">
                            <label for="plant-genus">Plant Genus:</label>
                            <select id="plant-genus" name="plant-genus" required="required">
                                <option value="" disabled selected>Select Genus</option>
                                <option value="rosa">Rosa</option>
                                <option value="pisum">Pisum</option>
                                <option value="zea">Zea</option>
                            </select>
                        </div>
            
                        <div class="contribution__text-box">
                            <label for="plant-species">Plant Species:</label>
                            <select id="plant-species" name="plant-species" required="required">
                                <option value="" disabled selected>Select Species</option>
                                <option value="rosa_gallica">Rosa gallica</option>
                                <option value="pisum_sativum">Pisum sativum</option>
                                <option value="zea_mays">Zea mays</option>
                            </select>
                        </div>
                    </fieldset>
        
                    <fieldset>
                        <legend>Picture Upload</legend>
                        <div class="contribution__text-box">
                            <label for="fresh-leaf">Upload Fresh Leaf Photo:</label>
                            <input type="file" id="fresh-leaf" name="fresh-leaf" accept="image/*" required="required">
                        </div>
                        
                        <div class="contribution__text-box">
                            <label for="herbarium">Upload Herbarium Photo:</label>
                            <input type="file" id="herbarium" name="herbarium" accept="image/*" required="required">
                        </div>
                    </fieldset>
                    
                    <input class="contribution__btn btn" type="submit">
                </form>
            </section>
        </article>
    </main>

    <!-- Footer Part -->
    <footer>
        <!-- Include footer -->
        <?php include 'include/footer.php'; ?>

        <p class="main-acknowledgement"><strong>Acknowledgement</strong></p>
        <div class="footer__acknowledgement-wrapper">
            <section class="acknowledgement-section">
                <a class="footer__acknowledgement-link" target="_blank" href="https://www.youtube.com/watch?v=iAxUpo0aJSk&pp=ygUXdXBsb2FkIGltYWdlIGZvcm0gaHRtbCA%3D">Form Tutorial</a>
                <a class="footer__acknowledgement-link" target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/file">Form Upload Image</a>
                <a target="_blank" class="footer__acknowledgement-link" href="https://www.geeksforgeeks.org/gradient-borders/">Gradient Border Guide</a>
            </section>
      </div>
     </footer>

     <?php include 'include/bckToTopBtn.php'; ?>
</body>
</html>