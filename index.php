<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page avec 3 blocs verticaux</title>
    <link rel="stylesheet" href="page.css">
    <link href="https://fonts.googleapis.com/css2?family=Jersey+10&display=swap" rel="stylesheet">
</head>
<body>
<div>
<nav>
    <ul id="navbar">
        <li><a href="team.html">La team</a></li>
        <li><a href="">q</a></li>
        <li><a href="">d</a></li>
        <li><a href="">m</a></li>
        <li><a href="">p</a></li>
    </ul>
</nav>
</div>
<div class="container">

    <!-- Premier bloc : Image statique -->
    <div class="block block1">
        <img src="Media/video.gif" alt="Image statique">
    </div>
    <div>
    <h1>Vivez la ferveur 222222222 d’une rentrée en école d’informatique !</h1>
        <p> Dans EPSI School Adventure, mettez-vous dans la peau d’un étudiant en première année d’études informatiques et découvrez un campus plein de vie !
        Explorez les différents services de l’école grâce à une galerie de personnages hauts en couleur, et relevez les défis qui se dresseront sur votre chemin pour obtenir votre carte d’étudiant !</p>
    </div>

    <!-- Deuxième bloc : Carrousel avec flèches -->
    <div class="block block2">

        <div class="slideshow-container">
            <img src="Media/image1.jpeg" alt="Image défilante 1">
            <img src="Media/image2.jpg" alt="Image défilante 2">
            <img src="Media/image3.jpeg" alt="Image défilante 3">
        </div>

        <!-- Flèches de navigation -->
        <div class="arrow left" onclick="moveSlide(-1)">&#10094;</div>
        <div class="arrow right" onclick="moveSlide(1)">&#10095;</div>
    </div>

    <!-- Troisième bloc : Texte et bouton de téléchargement -->
    <div class="block block3">
        <p >Jeu disponible sur</p>
    </div>
    <div class="image-container">
        <img src="Media/windows.webp">
        <img src="Media/apple.jpg">
        <img src="Media/linux.jpg">
    </div>
    <div>
        <h2>Télecharger le jeu </h2>
    </div>
    <div>
            <a id="download-link" href="#" class="download-btn">Télécharger SuperGame</a>
    </div>

</div>
<!--Pour le boutton telecharger-->
<script>
    // Détection du système d'exploitation de l'utilisateur
    var os = navigator.platform.toLowerCase();
    var downloadLink = document.getElementById('download-link');

    if (os.indexOf('win') !== -1) {
        downloadLink.href = "https://monserveur.com/supergame-windows.exe";
        downloadLink.innerText = "Télécharger pour Windows";
    } else if (os.indexOf('mac') !== -1) {
        downloadLink.href = "https://monserveur.com/supergame-macos.dmg";
        downloadLink.innerText = "Télécharger pour macOS";
    } else if (os.indexOf('linux') !== -1) {
        downloadLink.href = "https://monserveur.com/supergame-linux.tar.gz";
        downloadLink.innerText = "Télécharger pour Linux";
    } else {
        downloadLink.href = "#";
        downloadLink.innerText = "Système d'exploitation non pris en charge";
        downloadLink.style.backgroundColor = "#dc3545";
        downloadLink.style.cursor = "not-allowed";
    }

    // Message de confirmation lorsque le téléchargement commence
    downloadLink.addEventListener('click', function(event) {
        if (downloadLink.href !== "#") {
            alert("Le téléchargement de SuperGame a commencé !");
        }
    });
</script>
<!--Pour les images deffillantes-->
<script>
    let slideIndex = 0;
    const slides = document.querySelectorAll('.slideshow-container img');
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === index) {
                slide.classList.add('active');
            }
        });
    }

    function moveSlide(direction) {
        slideIndex = (slideIndex + direction + totalSlides) % totalSlides;
        showSlide(slideIndex);
    }

    // Initial display
    showSlide(slideIndex);

    // Optionnel : défilement automatique toutes les 5 secondes
    setInterval(() => moveSlide(1), 5000);

</script>

</body>


<footer>
    <p>&copy; 2024 SuperGame. Tous droits réservés. | <a href="#">Conditions d'utilisation</a> | <a href="#">Support technique</a></p>
</footer>
</html><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page avec 3 blocs verticaux</title>
    <link rel="stylesheet" href="page.css">
    <link href="https://fonts.googleapis.com/css2?family=Jersey+10&display=swap" rel="stylesheet">
</head>
<body>
<div>
<nav>
    <ul id="navbar">
        <li><a href="team.html">La team</a></li>
        <li><a href="">q</a></li>
        <li><a href="">d</a></li>
        <li><a href="">m</a></li>
        <li><a href="">p</a></li>
    </ul>
</nav>
</div>
<div class="container">

    <!-- Premier bloc : Image statique -->
    <div class="block block1">
        <img src="Media/video.gif" alt="Image statique">
    </div>
    <div>
    <h1>Vivez la ferveur d’une rentrée en école d’informatique !</h1>
        <p> Dans EPSI School Adventure, mettez-vous dans la peau d’un étudiant en première année d’études informatiques et découvrez un campus plein de vie !
        Explorez les différents services de l’école grâce à une galerie de personnages hauts en couleur, et relevez les défis qui se dresseront sur votre chemin pour obtenir votre carte d’étudiant !</p>
    </div>

    <!-- Deuxième bloc : Carrousel avec flèches -->
    <div class="block block2">

        <div class="slideshow-container">
            <img src="Media/image1.jpeg" alt="Image défilante 1">
            <img src="Media/image2.jpg" alt="Image défilante 2">
            <img src="Media/image3.jpeg" alt="Image défilante 3">
        </div>

        <!-- Flèches de navigation -->
        <div class="arrow left" onclick="moveSlide(-1)">&#10094;</div>
        <div class="arrow right" onclick="moveSlide(1)">&#10095;</div>
    </div>

    <!-- Troisième bloc : Texte et bouton de téléchargement -->
    <div class="block block3">
        <p >Jeu disponible sur</p>
    </div>
    <div class="image-container">
        <img src="Media/windows.webp">
        <img src="Media/apple.jpg">
        <img src="Media/linux.jpg">
    </div>
    <div>
        <h2>Télecharger le jeu </h2>
    </div>
    <div>
            <a id="download-link" href="#" class="download-btn">Télécharger SuperGame</a>
    </div>

</div>
<!--Pour le boutton telecharger-->
<script>
    // Détection du système d'exploitation de l'utilisateur
    var os = navigator.platform.toLowerCase();
    var downloadLink = document.getElementById('download-link');

    if (os.indexOf('win') !== -1) {
        downloadLink.href = "https://monserveur.com/supergame-windows.exe";
        downloadLink.innerText = "Télécharger pour Windows";
    } else if (os.indexOf('mac') !== -1) {
        downloadLink.href = "https://monserveur.com/supergame-macos.dmg";
        downloadLink.innerText = "Télécharger pour macOS";
    } else if (os.indexOf('linux') !== -1) {
        downloadLink.href = "https://monserveur.com/supergame-linux.tar.gz";
        downloadLink.innerText = "Télécharger pour Linux";
    } else {
        downloadLink.href = "#";
        downloadLink.innerText = "Système d'exploitation non pris en charge";
        downloadLink.style.backgroundColor = "#dc3545";
        downloadLink.style.cursor = "not-allowed";
    }

    // Message de confirmation lorsque le téléchargement commence
    downloadLink.addEventListener('click', function(event) {
        if (downloadLink.href !== "#") {
            alert("Le téléchargement de SuperGame a commencé !");
        }
    });
</script>
<!--Pour les images deffillantes-->
<script>
    let slideIndex = 0;
    const slides = document.querySelectorAll('.slideshow-container img');
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === index) {
                slide.classList.add('active');
            }
        });
    }

    function moveSlide(direction) {
        slideIndex = (slideIndex + direction + totalSlides) % totalSlides;
        showSlide(slideIndex);
    }

    // Initial display
    showSlide(slideIndex);

    // Optionnel : défilement automatique toutes les 5 secondes
    setInterval(() => moveSlide(1), 5000);

</script>

</body>


<footer>
    <p>&copy; 2024 SuperGame. Tous droits réservés. | <a href="#">Conditions d'utilisation</a> | <a href="#">Support technique</a></p>
</footer>
</html>