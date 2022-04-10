// Le guide d'installation de votre projet (avec toutes les commandes à exécuter et les fichiers à configurer)

Il faut tout d'abord lancer la commande dans le terminal de Visual Studio Code : php artisan serve pour démarrer le serveur. Taper dans un navigateur l'URL http://localhost:8000

2- Création de vues, contrôleurs, modèles et routes


Accueil : Nous arrivons sur la vue welcome.blade.php, contrôlée par le contrôleur HomeController. Il s'agit de la page utilisateur de bienvenue, ou l'utilisateur peut voir un message de bienvenue ainsi que les 3 dernières séries ajoutées sur le site par l'administateur. 

Routes : Toutes les routes pour les URL sont indiquées dans le fichier web.php. A part lorsque l'on doit aller à un endroit précis, après une action nous nous redirigeons sur la page d'accueil : http://localhost:8000

Séries : Ensuite dans le menu nous avons l'élément du menu Séries : Il faut cliquer dessus pour aller à l'URL http://localhost:8000/series : Nous arrivons alors sur la vue series.blade.php, contrôlée par le contrôleur SeriesController et liée au modèle Série. Cette vue affiche à l'utilisateur toutes les séries crées par l'administrateur.
L'utilisateur (vous) peut cliquer sur le nom de la série : ce qui amènera directement à la vue single.blade.php correspondant à l'URL http://localhost:8000/series/{{$serie->id}}. Il y a aussi une barre de recherche avec un bouton Chercher : J'ai eu des difficultés à la faire fonctionner, elle ne marche normalement pas...

Vue de l'utilisateur d'une série : Dans la vue single.blade.php, on voit le titre et l'auteur de la série, sa description, l'image de la série, la vidéo correspondant à la bande annonce de la série (Exercice supplémentaire 7). L'utilisateur a aussi accès sur cette vue aux commentaires (Exercice supplémentaire 1), il peut laisser un commentaire en remplissant le formulaire avec son pseudo et le contenu de son commentaire, puis l'envoyer. Il a aussi accès aux anciens commentaires laissés. La gestion des commentaires se fait depuis le contrôleur CommentController et avec le modèle Comment.

Contact : Ensuite dans le menu du haut de page, nous avons l'élément du menu Contact : Il faut cliquer dessus pour aller à l'URL http://localhost:8000/contact . Nous arrivons sur la vue contacts.blade.php, contrôlée par le contrôleur ContactsController et liée au modèle Contact. Il y a un formulaire permettant de créer un nouveau contact. L'utilisateur doit rentrer tous les champs du formulaire et envoyer sa requête, ce qui créera un nouveau contact dans la base de données.

Admin : Pour l'exercice 7 concernant le CRUD, j'ai ajouté un layout similaire à main.blade.php, il s'agit de admin.blade.php. Il s'agit du layout pour l'admin. Dans le menu nous avons l'élément de menu Admin, malheureusement, je n'ai pas eu le temps de protéger la connexion pour l'administrateur. Quand nous cliquons sur Admin, nous tombons sur la vue seriesadmin.blade.php correspondant à l'URL http://localhost:8000/admin/series . Toute la partie CRUD est géré dans le contrôleur SerieController (sans S!)
Sur cette vue, l'administrateur a accès à la liste des séries avec ses auteurs. Il peut modifier une série en cliquant sur le bouton "Modifier une série" : en cliquant il tombe sur la vue editserie.blade.php, qui lui montre un formulaire avec les caractéristiques de la série. L'administrateur n'a qu'à changer les champs qu'il désire modifier et appuyer sur le bouton valider. La série sera donc mise à jour.

