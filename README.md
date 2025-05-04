🎯 Site de Quiz avec Système de Difficulté et Classement
📋 Description
Ce projet est un site de quiz interactif proposant deux niveaux de difficulté : facile et difficile.
Les utilisateurs doivent se connecter ou s'inscrire pour accéder aux quiz et leurs performances sont enregistrées pour générer un classement (ranking) selon la difficulté choisie.

⚙️ Fonctionnalités
🔐 Connexion / Inscription des utilisateurs

❓ Quiz avec deux niveaux de difficulté : facile et difficile

🏆 Classement des utilisateurs selon les scores et la difficulté choisie

🗃️ Base de données centralisant les utilisateurs, les questions, et les scores

💾 Installation
1. Prérequis
Le site nécessite un serveur local compatible PHP et MySQL comme WAMP (Windows) ou LAMP (Linux/Mac).

🔗 Liens utiles :
Installer WAMP (Windows)

Installer LAMP (Linux)

2. Cloner le projet
bash
Copier
Modifier
git clone https://github.com/ton-utilisateur/nom-du-repo.git
3. Importer la base de données
Démarrer votre serveur (WAMP ou LAMP)

Ouvrir phpMyAdmin depuis le navigateur (http://localhost/phpmyadmin)

Créer une base de données (ex : qcm)

Importer le fichier qcm.sql qui se trouve à la racine du projet GitHub

4. Configuration
Si nécessaire, configure les identifiants de connexion à la base de données dans le fichier PHP correspondant (ex : config.php) :

php
Copier
Modifier
$host = 'localhost';
$dbname = 'qcm';
$user = 'root';
$password = '';
Note : Pour LAMP, l’utilisateur par défaut est aussi root, avec mot de passe vide, sauf si vous en avez défini un.

5. Lancer le projet
Placer les fichiers du projet dans le dossier www (WAMP) ou htdocs (LAMP), puis accéder à :

arduino
Copier
Modifier
http://localhost/nom-du-dossier
🧠 Utilisation
Créez un compte ou connectez-vous.

Choisissez une difficulté : facile ou difficile.

Répondez aux questions.

Consultez votre classement par difficulté à la fin du quiz.

🔍 Remarques supplémentaires

Assurez-vous que les extensions PHP pour MySQLi ou PDO sont activées dans votre serveur local.

Le site ne comprend pas de système d’administration pour ajouter des questions : celles-ci doivent être ajoutées manuellement dans la base de données via phpMyAdmin ou via un script d’administration si prévu.

Pour renforcer la sécurité, pensez à ajouter un système de validation des inputs utilisateur (contre les injections SQL et XSS).

🙋‍♂️ Auteur
Projet développé par snk9341 dans le cadre de son BTS SIO SLAM.
N'hésitez pas à contribuer ou proposer des améliorations via Pull Request !
