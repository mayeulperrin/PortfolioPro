<!doctype html>

<?php
    require 'functions/browser_detection.php';
?>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c|Marck+Script|Spartan&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap" rel="stylesheet">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="<?php echo $body; ?>">
    <div class="<?php echo $div_menu_photo; ?>">
        <div class="<?php echo $div_header; ?>" id="div_header">
            <table class="table_menu">
            <td class="td_menu"><a class="a_menu" href="#div_summary">A propos</a></td>
                <td><a class="a_menu" href="#div_education_experience">Education et expérience</a></td>
                <td><a class="a_menu" href="#div_languages_skills">Compétences et langages</a></td>
                <td><a class="a_menu" href="#div_interests">Centres d'intérets</a></td>
            </table>
        </div>
        <div class="<?php echo $div_summary_left; ?>">
            <span class="paragraph_name_left">
                Mayeul Perrin
                <p class="paragraph_studies_left">
                    Epitech, European Institute of Technologies
                </p>
            </span>
        </div>
    </div>
        <div class="<?php echo $div_summary_right; ?>">
            <?php if (mobile == TRUE) echo "<br><br>"; ?>
            <div class="sub_div_summary_right">
                <img class="<?php echo $avatar; ?>" src="images/avatar.jpg">
                <br>
                <span class="name_right">Mayeul PERRIN</span>
                <br>
                <span class="age_right">21 ans</span>
                <span class="studies_right">Epitech, European Institute of Technologies, Toulouse</span>
                <br>
                <span class="contacts_right">
                    <a class="link_mail" href="mailto: mayeul.perrin@epitech.eu">mayeul.perrin@epitech.eu</a><br><br>
                    <a class="link_mail">06 95 22 46 22</a>
                </span>
                <br>
                <table class="socials_right">
                    <td><a title="Linkedin" href="https://www.linkedin.com/in/mayeul-perrin"><img src="images/linkedin.webp"></a></td>
                    <td><a title="Instagram" href="https://www.instagram.com/mayeulperrin/"><img src="images/instagram.webp"></a></td>
                    <td><a title="Facebook" href="https://www.facebook.com/mayeulperrin/"><img src="images/facebook.webp"></a></td>
                </table>
                <br>
                <a href="datas/CV.pdf"><span class="download_cv">Télécharger le CV</span></a>
            </div>
            <?php if (mobile == TRUE) echo "<br><br>"; ?>
        </div>
    </div>
    <div id="div_summary" class="div_body_grey" id="div_about">
        <div class="<?php echo $div_body_one_column; ?>">
            <h1>
                A propos
            </h1>
            <p class="body_text">
            Étudiant en informatique à Epitech, j'entretiens une passion pour l'informatique depuis le collège.
            Un an après mon intégration, je suis capable de réaliser des projets seul comme en groupe autour
            de plusieurs technologies. Avec un intérêt particuler pour la programmation des langages internet,
            j'ai déjà réalisé plusieurs sites web.<br>
            Par ailleurs, je suis passionné de photographie laquelle représente pour moi l'outil d'une expression
            artistique mais aussi, au même titre que l'informatique, un domaine très vaste ou tout peut se réaliser. 
            </p>
        </div>
    </div>
    <div id="div_education_experience" class="div_body_white">
        <div class="<?php echo $div_body_two_column_left; ?>">
            <h1>
                Education
            </h1>
            <p class="body_text">
                <em class="sub_title">Epitech, European Institute of Technologies</em><br>
                <em class="date">Octobre 2019 – présent</em><br>
                Système d’apprentissage par projet (seul ou en groupe).
                Méthode Agile.<br><br>
                <em class="sub_title">Lycée Saliège</em><br>
                <em class="date">Septembre 2018 – Juin 2019</em><br>
                Classe préparatoire aux Grandes Ecoles de Commerce<br><br>
                <em class="sub_title">Lycée Etoile-du-Matin</em><br>
                <em class="date">Juin 2018</em><br>
                Baccalauréat Scientifique Spécialité Physique-Chimie<br>
            </p>
        </div>
        <div class="div_body_two_column_right">
            <h1>
                Experience
            </h1>
            <p class="body_text">
                <em class="sub_title">Travaux sur des technologies particulières</em><br>
                • Intelligence artificielle : les bases de l’IA<br>
                • Développement mobile : apprendre à créer des applications sur Android et iOS.<br><br>
                <em class="sub_title">Projets en groupe</em><br>
                • Projets en C: recherche d'itinéraires, gestion de signaux, réalisation d'un terminal<br>
                • Inter-écoles (groupe IONIS) : Start-up: Assistance au personnes âgées.<br>
            </p>
        </div>
    </div>
    <div id="div_languages_skills" class="div_body_white">
        <div class="<?php echo $div_body_two_column_left; ?>">
            <h1>
                Compétences
            </h1>
            <p class="body_text">
                Environnement de travail :<br>
                • Système Unix, Linux<br>
                • Windows<br>
                <br>
                Langages de programmation :<br>
                • Maîtrise du C<br>
                • Maîtrise du PHP, HTML, CSS<br>
                • Intermédiaire en Python,
                SQL<br>
            </p>
        </div>
        <div class="div_body_two_column_right">
            <h1>
                Langues
            </h1>
            <p class="body_text">
                • Anglais L1<br>
                • Espagnol L2<br>
                • Latin : collège et Lycée
            </p>
        </div>
    </div>
    <div id="div_interests" class="div_body_grey">
        <div class="<?php echo $div_body_one_column; ?>">
            <h1>
                Centres d'intérêts
            </h1>
            <p class="body_text">
                • Voyages : Italie, Espagne, Autriche.<br>
                • Photographie, football<br>

            </p>
        </div>
    </div>
    <div class="div_footer" id="div_footer">

    </div>
</body>