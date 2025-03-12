<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="Images\Pierre.ico">
    <title>Pierre Gervais</title>
  </head>
  <body>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="MathJax/MathJax.js?config=TeX-AMS_CHTML"></script>
  </script>
    <header>
      <h1>Pierre Gervais</h1>
      <span id="citation">
        <?php
          $citations = array(
            "Celui qui trouve sans chercher est celui qui a longtemps cherché sans trouver - Gaston Bachelard",
            "En mathématiques, on ne comprend pas les choses, on s'y habitue - John Von Neumann",
            "Si l'esprit d'un homme s'égare, faites-lui étudier les mathématiques car dans les démonstrations, pour peu qu'il s'écarte, il sera obligé de recommencer - Francis Bacon",
            "La logique est l'hygiène des mathématiques - André Weil",
            "Un mathématicien est quelqu'un qui prenant une tasse de thé est capable d'en faire une théorie - Paul Erdös",
            "J’aimais et j’aime encore les mathématiques pour elles-mêmes comme n’admettant pas l’hypocrisie et le vague, mes deux bêtes d’aversion - Stendhal",
            "La mathématique est l'art de donner le même nom à des choses différentes - Henri Poincaré",
            "Les mathématiques sont une science dans laquelle on ne sait jamais de quoi on parle, et où l'on ne sait jamais si ce que l'on dit est vrai - Bertrand Russel",
            "Ma cohabitation passionnée avec les mathématiques m'a laissé un amour fou pour les bonnes définitions, sans lesquelles il n'y a que des à-peu-près - Gustave Flaubert",
            "La vie n'est bonne qu'à étudier et à enseigner les mathématiques - Blaise Pascal",
            "La mathématique est une science dangereuse : elle dévoile les supercheries et les erreurs de calcul - Galilée",
            "L'étude des mathématiques est comme le Nil, qui commence en modestie et finit en magnificence - Charles Caleb Colton",
            "L'arithmétique, c'est être capable de compter jusqu'à vingt sans enlever ses chaussures - Walt Disney",
            "Good mathematics is not about how many answers you know... It's how you behave when you don't know - Inconnu",
            "Ce qui est affirmé sans preuve peut être nié sans preuve - Euclide",
            "Les idées naturelles sont toujours celles qui viennent en dernier - Jacques Hadamard",
            "Il est doux de voir pousser dans le jardin d’autrui les plantes dont on a semé les graines - Joseph Louis Lagrange",
            "Je ne comprends pas qu’on ne comprenne pas les mathématiques - Henri Poincaré",
            "Les mathématiques comparent des phénomènes les plus diversifiés et découvrent les analogies secrètes qui les unissent - Joseph Fourier",
            "Toutes les mathématiques consistent à organiser une série d’outils venant en aide à l’imagination dans le processus du raisonnement - John Henry Constantine Whitehead",
            "La géométrie est l'art de bien raisonner sur des figures mal faites - Henri Poincaré",
            "C’est une erreur de croire que la rigueur dans une démonstration est l’ennemie de la simplicité… L’effort même de la rigueur nous force à découvrir les méthodes de démonstration les plus simples - David Hilbert",
            "C’est par la logique que nous prouvons, c’est par l’intuition que nous inventons - Henri Poincaré",
            "De toutes les disciplines mathématiques, la théorie des équations différentielles est la plus importante. Elle fournit l’explication de toutes ces manifestations élémentaires de la nature qui dépendent du temps - Marius Sophus Lie",
            "L’analyse mathématique est une symphonie cohérente de l’infini - David Hilbert",
            "Découvrir, c’est voir les mêmes éléments dans une autre configuration - Carl Friedrich Gauss (celui qui a calculé 1+2+...+n, pas l'autre)",
            "Si l’on veut atteindre la vérité, il est nécessaire, une fois dans sa vie, de mettre tout en doute, aussi complètement que possible - René Descartes",
            "Cet article est d’une lecture ardue, et je ne l’aurais jamais lu si je ne l’avais écrit moi-même - John Littlewood",
            "Le seul enseignement qu’un professeur peut donner, à mon avis, est de penser devant ses étudiants - Henri Lebesgue",
            "Un enfant de cinq ans comprendrait cela ! Allez me chercher un enfant de cinq ans !  - Groucho Marx",
            "En mathématiques, les noms sont arbitraires. Libre à chacun d'appeler un opérateur auto-adjoint un éléphant et une décomposition spectrale une trompe. On peut alors démontrer un théorème suivant lequel tout éléphant a une trompe. Mais on n'a pas le droit de laisser croire que ce résultat a quelque chose à voir avec de gros animaux gris - Gerald Sussman",
            "Un mathématicien est une machine à transformer le café en théorèmes - Paul Erdös",
            "Il n'est pas possible d'être mathématicien sans avoir l'âme d'un poète - Sofia Vasilyevna Kovalevskaya"
          );
          echo $citations[rand(0, count($citations) -1) ];
        ?>
      </span>
      <div id="bandeau">
        <a href="index.php?page=accueil">Accueil</a>
        <a href="index.php?page=enseignement">Enseignement</a>
        <a href="index.php?page=recherche">Recherche</a>
        <?php
        /*<div id="fouillis">
          <div>Fouillis</div>
          <div id="fouillis_liste">
            <a href="index.php?page=musique">Musique</a>
            <a href="index.php?page=videos">Vidéos</a>
          </div>
        </div>
        */?>
      </div>
    </header>
    <div id="contenu">
      <?php
        if (isset($_GET["page"]) && ($_GET["page"]=="enseignement"||$_GET["page"]=="recherche"||$_GET["page"]=="musique"||$_GET["page"]=="videos"))
        {
          include($_GET["page"].".php");
        }
        else
        {
          include("accueil.php");
        }?>
    </div>
    <footer>
      <p>Inria Lille - Nord Europe, Bâtiment B — 6 Rue Heloïse (Villeneuve-d'Ascq) — pierre.gervais [ at ] inria.fr<p>
    </footer>
  </body>
</html>
