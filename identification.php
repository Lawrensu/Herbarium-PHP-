<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="images/constant/leaf.png">

    <meta name="description" content="Identify various plant species with Leafly's comprehensive plant identification tools and resources. Learn how to recognize and classify plants accurately.">
    <meta name="keywords" content="plant identification, identify plants, plant species, plant classification, Leafly, botanical identification, plant recognition">
    <meta name="author" content="Faiq">

    <link rel="stylesheet" type="text/css" href="style/style.css">

    <title>Identify - Leafly</title>
</head>

<body>  
    <!-- Including header part -->
    <?php include 'include/header.php'; ?>

    <main class="identify__wrapper container">
        <h1>Identify Your Plant</h1>

        <article class="identify__upload-wrapper">
            <h2>How to Identify Plants</h2>
            <ol>
                <li>Upload a clear image of the plant.</li>
                <li>Wait for the system to analyze the image.</li>
                <li>View the scientific name and common name.</li>
                <li>Explore the herbarium specimen.</li>
            </ol>

             <!-- Maybe tell the user some tips like showing the pic of t the bark or something -->

            <form class="identify__form" action="#" method="post" enctype="multipart/form-data">
                <label for="plant-image">Upload Image:</label>
                <input type="file" id="plant-image" name="plant-image" accept="image/*" required="required">
                <button onclick="" class="identify__btn btn">Search</button>
            </form>
        </article>

        <article class="identify__result-wrapper">
            <h2>Identification Result</h2>

            <p><strong>Scientific Name:</strong> Hopea Odorata</p>
            <p><strong>Common Name:</strong> Chengal Pasir</p>
            <p><strong>Description:</strong> <br> Hopea odorata is a large tree reaching height up to 45 m (150 ft) with the base of the trunk reaching a diameter of 4.5 m (15 ft). It grows in forests, preferably near rivers, at elevations to 600 m (2,000 ft). It usually found in places such as West Bengal, the Andaman Islands and southern Vietnam and it is usually planted as shade tree.It is valued for its wood, which is resist to termites, it is a threatened species in its natural habitat.</p>

            <section class="identify__result-img-wrapper">
                <img src="images/identification_page/hopea-odorata.jpg" alt="Img-Result-1">
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
              <a target="_blank" class="footer__acknowledgement-link" href="https://www.mybis.gov.my/art/240">Picture Source</a>
              <a target="_blank" class="footer__acknowledgement-link" href="https://www.youtube.com/watch?v=iAxUpo0aJSk&pp=ygUXdXBsb2FkIGltYWdlIGZvcm0gaHRtbCA%3D">Form Tutorial</a>
              <a target="_blank" class="footer__acknowledgement-link" href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/file">Form Upload Image</a>
          </section>
        </div>
     </footer>

     <?php include 'include/bckToTopBtn.php'; ?>
</body>
</html>