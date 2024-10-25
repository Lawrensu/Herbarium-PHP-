<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/svg+xml" href="images/constant/leaf.png">

  <meta name="description" content="Discover essential aftercare tips for maintaining your herbarium plants. Learn how to keep your preserved plants in optimal condition with our expert advice.">
  <meta name="keywords" content="aftercare, herbarium, plant care, preserved plants, plant maintenance, herbarium tips, plant preservation">
  <meta name="author" content="Gibson">

  <link rel="stylesheet" type="text/css" href="style/style.css">

  <title>Aftercare - Herbarium</title>
</head>

<body> 
    <!-- Including header part -->
    <?php include 'include/header.php'; ?>

    <main class="aftercare__wrapper container">
        <h1>Aftercare of Herbarium</h1>

        <dl>
            <dt>Aftercare</dt>
            <dd>Aftercare is the process of maintaining and preserving herbarium specimens to ensure their longevity and usability. Proper care and conservation of herbarium specimens are essential to prevent damage and deterioration.</dd>
            <dt>Why is Aftercare Important?</dt>
            <dd>Aftercare is crucial to maintain the quality and integrity of herbarium specimens. Proper handling, storage, and conservation practices are essential to prevent damage and deterioration, ensuring the longevity and usability of the collection.</dd>
        </dl>

        <article class="aftercare__grid-container">
            <!-- Care and Conservation of Herbarium Specimens Card -->
            <div class="aftercare__card">
                <img src="images/aftercare_page/CareConservationIcon.png" alt="Care and Conservation" class="care-image">
                <h3><strong>The Care of Herbarium Specimens</strong></h3>
                <p>
                    Herbarium specimens can be damaged over time due to factors like natural disasters, poor storage conditions, irresponsible handling, breakdown of preparation processes, and insect damage.
                    The RBGE Herbarium is responsible for ensuring the safety and security of its collection. To prevent specimen loss or damage, stringent storage and handling procedures are followed, and the collection's condition is checked and repaired according to conservation standards.
                </p>
            </div>

            <!-- Safety Storage Environment Card -->
            <div class="aftercare__card">
                <img src="images/aftercare_page/SafetyIcon.png" alt="Safety Storage" class="care-image">
                <h3><strong>Safety Storage Environment</strong></h3>
                <p>
                    The herbarium collection is stored in a secure, purpose-built facility with a stable environment of 20°C and 50% relative humidity to protect sensitive plant material. Metal storage cabinets with rubber door seals safeguard specimens from light, dust, and insects.
                </p>
                <ul>
                    <li>Freezing arriving specimens to -29°C for 5 days before entering the Herbarium</li>
                    <li>Ensuring proper storage conditions</li>
                    <li>Monitoring for insect activity</li>
                    <li>Providing staff training and information</li>
                </ul>
            </div>

            <!-- Handling Guidelines Card -->
            <div class="aftercare__card">
                <img src="images/aftercare_page/GuidelineIcon.png" alt="Handling Guidelines" class="care-image">
                <h3><strong>Handling Guidelines</strong></h3>
                <p>Proper handling minimizes the risk of physical damage to specimens.</p>
                <ul>
                    <li>Keep specimens horizontal and flat when handling. Hold both sides of the sheet and place them on a sheet of cardboard.</li>
                    <li>Stack and unstack specimens carefully, avoiding shuffle. Always keep the plant facing upwards.</li>
                    <li>Never place any object on a specimen. When not in use, cover specimens to protect them from sunlight, dust, wind, and moisture.</li>
                    <li>If a specimen is left out of a cabinet, cover it with a cardboard sheet.</li>
                </ul>
            </div>

        <!-- Condition Surveying Card -->
        <div class="aftercare__card">
            <img src="images/aftercare_page/SurveyIcon.png" alt="Condition Surveying" class="care-image">
            <h3><strong>Condition Surveying</strong></h3>
            <p>
                Older specimens may have been housed in poor conditions or damaged due to improper handling. A condition survey was conducted during imaging and databasing mounted specimens to discover damage and prioritize repairs.
            </p>
            <p>Common problems identified include:</p>
            <ul>
                <li>Non-archival materials (cellophane, sellotape, and polythene)</li>
                <li>Surface dirt and pesticide stains</li>
                <li>Loose attachments</li>
                <li>Insect damage</li>
            </ul>
        </div>
    </article>
</main>
<!-- Video of care tips -->
<aside id="video">
    <h2 class="care-header">Care Tips Video</h2>

    <div class="care__video-wrapper">
        <article class="video-care">
            <!-- Responsive video container -->
            <div class="video-container">
                <video class="responsive-video" controls aria-label="Herbarium care tips video">
                    <source src="images/aftercare_page/Herbarium_caretips_video.mp4" type="video/mp4">
                </video>
            </div>
            <p>Here is a short video with tips for taking care of your herbarium.</p>
        </article>
    </div>
</aside>

    

    <!-- Fixed Navigation for Previous Page -->
    <div class="aftercare__fixed-nav">
    <a class=" btn" href="tools.php">Previous Page</a>
    </div>

    <!-- Footer Part -->
    <footer>
      <!-- Include footer -->
      <?php include 'include/footer.php'; ?>

      <p class="main-acknowledgement"><strong>Acknowledgement</strong></p>
      <div class="footer__acknowledgement-wrapper">    
        <section class="acknowledgement-section">
            <a class="footer__acknowledgement-link" href="https://www.flaticon.com/free-icon/conservation_11649082" target="_blank">Care Icon Acknowledgement</a>
            <a class="footer__acknowledgement-link" href="https://www.flaticon.com/free-icon/safety_4429965" target="_blank">Safety Icon Acknowledgement</a>
            <a class="footer__acknowledgement-link" href="https://www.flaticon.com/free-icon/guideline_9377234" target="_blank">Guideline Icon Acknowledgement</a>
            <a class="footer__acknowledgement-link" href="https://www.flaticon.com/free-icon/quantity-surveyor_10898223" target="_blank">Survey Icon Acknowledgement</a>
            <a class="footer__acknowledgement-link" href="https://www.rbge.org.uk/media/9027/preparation-care-and-art-of-herbarium-specimens-revised-25-oct-2023-ke.pdf" target="_blank">Information Acknowledgement</a>
            <a target="_blank" class="footer__acknowledgement-link" href="https://www.w3schools.com/html/html_youtube.asp">Embed Youtube Video Guide</a>
        </section>
    </div>
   </footer>

   <?php include 'include/bckToTopBtn.php'; ?>
</body>
</html>
