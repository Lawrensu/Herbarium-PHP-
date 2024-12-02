<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="images/constant/leaf.png">

    <meta name="description" content="Welcome to Leafly, your go-to resource for plant preservation and herbarium services. Explore our collection, learn about plant care, and join our community of plant enthusiasts.">
    <meta name="keywords" content="Leafly, herbarium, plant preservation, plant care, plant collection, botanical research, plant enthusiasts">
    <meta name="author" content="Lawrence Lian anak Matius Ding">

    <link rel="stylesheet" type="text/css" href="style/style.css">

    <title>Welcome to Leafly</title>
</head>

<body>
    <!-- Including header part -->
    <?php include 'include/header.php'; ?>

     <main>
        <!-- Introduction -->
        <article class="index__intro-wrapper container">
            <div class="index__intro-box">
                <h1 class="index__intro-title">Leafly</h1>
                <p class="index__intro-desc">Preserving Plants' Diversity <br> for the Future
                </p>
            </div>
        </article>

        <!-- What is Herbarium -->
        <article class="index__definition-wrapper container">
            <div class="index__definition-box">
                <h2 class="index__definition-title">Herbarium</h2>
                <p class="index__definition-desc">A collection of plant samples maintained for long-term study is called a herbarium (Latin: hortus siccus). Typically, the samples are dried, pressed, and mounted on paper. Herbarium specimens are the general term for the dried and mounted plant samples. Additional items found in the herbarium could be loose seeds, dried large fruits, microscope slides, wood slices, fungi, algae, pollen, materials kept in silica, DNA extractions, and fluid-preserved flowers or fruit. Herbaria (plural for herbarium) also store and manage data sets, botanical illustrations, photographic slides, photographs, maps, and frequently have libraries of pertinent literature needed for use by researchers working with the specimens.
                </p>
            </div>

                <img class="index__definition-img" src="images/index_page/herbarium.jpeg" alt="Herbarium">
        </article>

        <!-- Study of Herbarium -->
        <article class="index__study-wrapper container">
            <div class="index__study-box">
                <aside class="index__study-textbox">
                    <p class="index__study-desc">Herbarium specimens have been carefully gathered by botanists, taxonomists, naturalists, and medical professionals over the ages in order to research and record the world's plant biodiversity.
                    </p>
                </aside>
            </div>

            <div class="index__study-box">
                <aside class="index__study-textbox">
                    <p class="index__study-desc">Each of these specimens is labeled with pertinent information, including the scientific name, origin, date of collection, and the institution that houses it. The specimens are conserved by pressing, drying, and mounting them on paper sheets. 
                    </p>
                </aside>
            </div>

            <div class="index__study-box">
                <aside class="index__study-textbox">
                    <p class="index__study-desc">In order to verify a plant's species identity, taxonomists frequently use a procedure known as specimen comparison to compare a recently acquired plant specimen to herbarium specimens of suspected taxa.
                    </p>
                </aside>
            </div>
        </article>

        <!-- Tutorial Boxes -->
        <section class="index__tutorial-wrapper container">
            <h2 class="index__tutorial-title">Find Out More</h2>

            <div class="index__tutorial-box-wrapper">
                <div class="index__tutorial-box">
                    <img src="images/index_page/index__tutorial-bg.jpeg" alt="Start your herbarium journey!">

                    <p>Want to start your herbarium journey but not sure how? Look no further!</p>

                    <a class="index__tutorial-btn btn" href="tutorial.html">Learn More</a>
                </div>
                
                <div class="index__tutorial-box">
                    <img src="images/index_page/index__tutorial-bg2.jpeg" alt="Identify the plant!">

                    <p>Got a plant that you're not sure of? Time to identify it!</p>
                    <a class="index__tutorial-btn btn" href="identification.html">Learn More</a>
                </div>
                
                <div class="index__tutorial-box">
                    <img src="images/index_page/index__tutorial-bg3.jpeg" alt="Contribute to the database!">

                    <p>Got a new plant that doesn't exist in the databse yet? Time to contribute!</p>
                    <a class="index__tutorial-btn btn" href="contribution.html">Learn More</a>
                </div>
            </div>
            
        </section>

        <section class="index__ending-wrapper container">
            <p>So what are you waiting for?

            <br>

            <strong>Be your own scientist at home!</strong>
            </p>
        </section>
     </main>
    
     <!-- Footer Part -->
    <footer>
        <!-- Include footer -->
        <?php include 'include/footer.php'; ?>

        <p class="main-acknowledgement"><strong>Acknowledgement</strong></p>
        <div class="footer__acknowledgement-wrapper">
          <section class="acknowledgement-section">
              <a target="_blank" class="footer__acknowledgement-link" href="https://stock.adobe.com/my/images/pressed-dried-flowers-and-plants-on-beige-background-flat-lay-beautiful-herbarium/452739269?prev_url=detail">Background Picture Source</a>
              <a target="_blank" class="footer__acknowledgement-link" href="https://www.floridamuseum.ufl.edu/herbarium/methods/herbaria/
              ">Definition Source</a>
              <a target="_blank" class="footer__acknowledgement-link" href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.floridamuseum.ufl.edu%2Fscience%2Fwhat-is-a-herbarium%2F&psig=AOvVaw0LjeykSWRqkXyvVcU3q-A_&ust=1727423229806000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCOC6wZGP4IgDFQAAAAAdAAAAABAE
              ">Definition Source</a>
              <a target="_blank" class="footer__acknowledgement-link" href="https://mortonarb.org/science/center-for-tree-science/herbarium/">Picture Source</a>
              <a target="_blank" class="footer__acknowledgement-link" href="https://www.pinterest.com/pin/1688918598326442/">Definition Picture Source</a>
              <a target="_blank" class="footer__acknowledgement-link" href="https://iconer.app/material/">Icon</a>
              <a target="_blank" class="footer__acknowledgement-link" href="https://iconer.app/boxicons/">Icon</a>
              <a target="_blank" class="footer__acknowledgement-link" href="https://heroicons.com/solid">Icon</a>
              <a target="_blank" class=" footer__acknowledgement-link" href="https://www.w3schools.com/howto/howto_css_parallax.asp">Parallax Scrolling Guide</a>
          </section>
        </div>

        <a class="index__vid-presentation-btn btn" href="https://youtu.be/qqBE8H50ySg">Video Presentation (Assignment 1)</a>
        <a class="index__vid-presentation-btn btn" href="https://youtu.be/81LWfjQtnII">Video Presentation (Assignment 2)</a>
     </footer>

     <?php include 'include/bckToTopBtn.php'; ?>
</body>
</html>