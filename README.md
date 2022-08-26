# Projet 060 - simplon

Contexte du projet
Etape 1

réutiliser les productions du brief 012 comme modèle pour réaliser les pages php suivantes :

​

une page nommée 'registerDisplay.php' qui construit la page de formulaire
une page nommée 'register.php' qui est appelée à la soumission du formulaire et qui écrit son contenu dans un fichier nommé 'registration.csv', sur une seule ligne avec chacune des valeurs saisies séparées par le caractère '|'
une page nommée 'listRegistration.php' qui lit le fichier 'registration.csv' et affiche son contenu sous forme tabulaire avec Bootstrap.
​

Etape 2

​

Premières notions de 'routage' en utilisant 'header location' :

à la fin du travail réalisé par 'register.php', rediriger l'Utilisateur vers 'listRegistration.php'
créer une nouvelle page 'index.php' qui ne fait que rediriger l'Utilisateur vers 'listRegistration.php'
​

Etape 3

​

Extraire les 'clés de dictionnaire' des 2 pages qui 'affichent quelque chose' dans un unique fichier nommé 'dictionnary.php', d'après l'exemple fourni en ressource nommé '060-20220817-sample-of-dictionnary.zip').

​

Etape 4

​

Utiliser la bibliothèque 'Bootstrap' pour :

ajouter un 'bandeau de navigation' (header) et un pied de page (footer) identique sur chaque 'écran'.
soigner le rendu global des pages (réutilisation)
​

Etape 5

​

Structurer le code :

utiliser 'include' pour 'factoriser' les blocs de code identiques de chaque page (cf étape 4)
trouver une alternative plus 'intelligente' à 'include'
​

Etape 6

​

Factoriser le code de lecture et d'écriture de fichier CSV dans des fonctions, puis isoler ces 'fonctions métier' dans un fichier php dédié nommé 'business-csv.php'.

​

Etape 7

​

Sur le modèle de 'registerDisplay/register/listRegistration',

​

réaliser les pages et fichiers de traitement 'addCreditCardTypeDisplay.php', addCreditCardType.php' et 'listCreditCardType.php' qui permettent de créer et afficher des 'Types de Carte de Crédit' (toujours en les 'stockant' dans un fichier CSV dédié, nommé 'creditCardType.csv'.
Adapter le 'bandeau de navigation' en conséquence
​

Etape 8

​

Adapter 'registerDisplay.php' pour que les types de carte de crédit disponibles proviennent de la nouvelle fonctionnalité développée à l'étape 7.

​

​
