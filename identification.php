<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="images/constant/leaf.png">

    <meta name="description" content="Identify various plant species with Leafly's comprehensive plant identification tools and resources. Learn how to recognize and classify plants accurately.">
    <meta name="keywords" content="plant identification, identify plants, plant species, plant classification, Leafly, botanical identification, plant recognition">
    <meta name="author" content="Faiq/Lawrence">

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

            <form class="identify__form" action="#" method="post" enctype="multipart/form-data" onsubmit="return handleImageUpload(event)">
                <label for="plant-image">Upload Image:</label>
                <input type="file" id="plant-image" name="plant-image" accept="image/*" required="required">
                <button type="submit" class="identify__btn btn" id="search-button">Search</button>
            </form>
        </article>

        <article class="identify__result-wrapper" id="result-wrapper" style="display: none;">
            <h2>Identification Result</h2>
            <div id="result-container">
                <p><strong>Scientific Name:</strong> <span id="scientific-name">N/A</span></p>
                <p><strong>Common Name:</strong> <span id="common-name">N/A</span></p>
                <p><strong>Description:</strong> <span id="description">N/A</span></p>
                <div id="label-container"></div>
            </div>
            <section class="identify__result-img-wrapper">
                <img id="result-image" src="" alt="Identified Plant Image">
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

     <!-- Teachable Machine Scripts -->
     <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@latest/dist/tf.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@latest/dist/teachablemachine-image.min.js"></script>
     <script type="text/javascript">
         // More API functions here:
         // https://github.com/googlecreativelab/teachablemachine-community/tree/master/libraries/image

         // the link to your model provided by Teachable Machine export panel
         const URL = "https://teachablemachine.withgoogle.com/models/lYeSRw0kK/";

         let model, labelContainer, maxPredictions;

         // Load the image model
         async function init() {
             const modelURL = URL + "model.json";
             const metadataURL = URL + "metadata.json";

             try {
                 // load the model and metadata
                 model = await tmImage.load(modelURL, metadataURL);
                 maxPredictions = model.getTotalClasses();

                 // append elements to the DOM
                 labelContainer = document.getElementById("label-container");
                 for (let i = 0; i < maxPredictions; i++) { // and class labels
                     labelContainer.appendChild(document.createElement("div"));
                 }

                 console.log("Model loaded successfully");
             } catch (error) {
                 console.error("Failed to load model:", error);
             }
         }

         // Handle image upload
         async function handleImageUpload(event) {
             event.preventDefault();
             console.log("Image upload initiated");

             const searchButton = document.getElementById('search-button');
             searchButton.disabled = true; // Disable the search button

             if (!model) {
                 console.error("Model not loaded yet");
                 searchButton.disabled = false; // Re-enable the search button
                 return;
             }

             const fileInput = document.getElementById('plant-image');
             const file = fileInput.files[0];
             const reader = new FileReader();

             reader.onload = async function(event) {
                 console.log("Image loaded");
                 const imgElement = document.createElement('img');
                 imgElement.src = event.target.result;
                 imgElement.onload = async function() {
                     console.log("Image element created");
                     const prediction = await model.predict(imgElement);
                     console.log("Prediction made", prediction);
                     displayPrediction(prediction, imgElement.src);
                     searchButton.disabled = false; // Re-enable the search button after prediction
                 }
             }
             reader.readAsDataURL(file);
         }

         // Display prediction results
         function displayPrediction(prediction, imgSrc) {
             // Clear previous results
             document.getElementById('scientific-name').innerText = "N/A";
             document.getElementById('common-name').innerText = "N/A";
             document.getElementById('description').innerText = "N/A";
             document.getElementById('label-container').innerHTML = "";

             // Ensure labelContainer has the correct number of child nodes
             while (labelContainer.childNodes.length < maxPredictions) {
                 labelContainer.appendChild(document.createElement("div"));
             }

             for (let i = 0; i < maxPredictions; i++) {
                 const classPrediction = prediction[i].className + ": " + (prediction[i].probability * 100).toFixed(2) + "%";
                 labelContainer.childNodes[i].innerHTML = classPrediction;
             }

             // Check if the AI is confident in its prediction
             const familyPrediction = prediction.find(p => p.className.includes("Family"));
             const genusPrediction = prediction.find(p => p.className.includes("Genus"));
             const speciesPrediction = prediction.find(p => p.className.includes("Species"));

             const highestProbability = Math.max(familyPrediction?.probability || 0, genusPrediction?.probability || 0, speciesPrediction?.probability || 0);

             if (highestProbability >= 0.5) {
                 // Update the result container with the first prediction
                 document.getElementById('scientific-name').innerText = prediction[0].className;
                 document.getElementById('common-name').innerText = prediction[0].className;
                 document.getElementById('description').innerText = "Description for " + prediction[0].className;
                 document.getElementById('result-image').src = imgSrc;

                 // Add additional information
                 document.getElementById('scientific-name').innerText = "Hopea Odorata";
                 document.getElementById('common-name').innerText = "Chengal Pasir";
                 document.getElementById('description').innerHTML = "Hopea odorata is a large tree reaching height up to 45 m (150 ft) with the base of the trunk reaching a diameter of 4.5 m (15 ft). It grows in forests, preferably near rivers, at elevations to 600 m (2,000 ft). It usually found in places such as West Bengal, the Andaman Islands and southern Vietnam and it is usually planted as shade tree. It is valued for its wood, which is resist to termites, it is a threatened species in its natural habitat.";
             } else {
                 // If the AI is unsure, display a message
                 document.getElementById('scientific-name').innerText = "Unsure of the plant species";
                 document.getElementById('common-name').innerText = "N/A";
                 document.getElementById('description').innerText = "The system could not confidently identify the plant species.";
                 document.getElementById('result-image').src = imgSrc;
             }

             // Show the result wrapper
             document.getElementById('result-wrapper').style.display = 'block';
         }

         // Initialize the model
         init();
     </script>
</body>
</html>