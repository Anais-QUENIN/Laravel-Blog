// Le guide d'installation de votre projet (avec toutes les commandes à exécuter et les fichiers à configurer)

Il faut tout d'abord lancer la commande dans le terminal de Visual Studio Code : php artisan serve pour démarrer le serveur. Taper dans un navigateur l'URL http://localhost:8000

2- Création de vues, contrôleurs, modèles et routes


Nous arrivons sur la vue welcome.blade.php, contrôlée par le contrôleur HomeController. Il s'agit de la page utilisateur de bienvenue, ou l'utilisateur peut voir un message de bienvenue ainsi que les 3 dernières séries ajoutées sur le site par l'administateur. Toutes les routes pour les URL sont indiquées dans le fichier web.php.
Ensuite dans le menu nous avons l'élément du menu Séries : Il faut cliquer dessus pour aller à l'URL http://localhost:8000/series : Nous arrivons alors sur la vue series.blade.php, contrôlée par le contrôleur SeriesController et liée au modèle Série et


