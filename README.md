#🎯 Site de Quiz avec Système de Difficulté et Classement

#📋 Description
Ce projet est un site de quiz interactif proposant deux niveaux de difficulté : facile et difficile.
Les utilisateurs doivent se connecter ou s'inscrire pour accéder aux quiz et leurs performances sont enregistrées pour générer un classement (ranking) selon la difficulté choisie.

#⚙️ Fonctionnalités

🔐 Connexion / Inscription des utilisateurs

❓ Quiz avec deux niveaux de difficulté : facile et difficile

🏆 Classement des utilisateurs selon les scores et la difficulté choisie

🗃️ Base de données centralisant les utilisateurs, les questions, et les scores

#💾 Installation
#1. Prérequis
Le site nécessite un serveur local compatible PHP et MySQL comme WAMP (Windows) ou LAMP (Linux/Mac).

#🔗 Liens utiles :
Installer WAMP (Windows)

Installer LAMP (Linux)

#2. Cloner le projet
git clone https://github.com/ton-utilisateur/nom-du-repo.git
#3. Importer la base de données
Démarrer votre serveur (WAMP ou LAMP)

Ouvrir phpMyAdmin depuis le navigateur (http://localhost/phpmyadmin)

Créer une base de données (ex : qcm)

Importer le fichier qcm.sql qui se trouve à la racine du projet GitHub

#4. Configuration
Si nécessaire, configure les identifiants de connexion à la base de données dans le fichier PHP correspondant (ex : config.php) :

``` php
$host = 'localhost';
$dbname = 'qcm';
$user = 'root';
$password = '';
Note : Pour LAMP, l’utilisateur par défaut est aussi root, avec mot de passe vide, sauf si vous en avez défini un.
```

#5. Lancer le projet
Placer les fichiers du projet dans le dossier www (WAMP) ou htdocs (LAMP), puis accéder à :

http://localhost/nom-du-dossier

#🧠 Utilisation
Créez un compte ou connectez-vous.

Choisissez une difficulté : facile ou difficile.

Répondez aux questions.

Consultez votre classement par difficulté à la fin du quiz.

#🔍 Remarques supplémentaires

Assurez-vous que les extensions PHP pour MySQLi ou PDO sont activées dans votre serveur local.

Le site ne comprend pas de système d’administration pour ajouter des questions : celles-ci doivent être ajoutées manuellement dans la base de données via phpMyAdmin ou via un script d’administration si prévu.

Pour renforcer la sécurité, pensez à ajouter un système de validation des inputs utilisateur (contre les injections SQL et XSS).

#🙋‍♂️ Auteur
Projet développé par snk9341 dans le cadre de son BTS SIO SLAM.
N'hésitez pas à contribuer ou proposer des améliorations via Pull Request !

---

🎯 Quiz Website with Difficulty Levels and Ranking System
📋 Description
This project is an interactive quiz website offering two difficulty levels: easy and hard.
Users must log in or sign up to access the quizzes. Their performance is tracked and used to generate a ranking system based on the selected difficulty level.

⚙️ Features
🔐 User registration and login

❓ Quizzes with two difficulty modes: easy and hard

🏆 User ranking based on scores and chosen difficulty

🗃️ Centralized database for users, questions, and scores

💾 Installation
1. Requirements
The website requires a local server compatible with PHP and MySQL, such as WAMP (for Windows) or LAMP (for Linux/Mac).

🔗 Useful links:
Install WAMP (Windows)

Install LAMP (Linux)

2. Clone the project
git clone https://github.com/your-username/your-repo-name.git
3. Import the database
Start your WAMP or LAMP server

Open phpMyAdmin in your browser (http://localhost/phpmyadmin)

Create a new database (e.g., qcm)

Import the qcm.sql file located in the root of the GitHub project

4. Configure the database connection
Edit your database connection file (e.g., config.php) to match your local setup:

$host = 'localhost';
$dbname = 'qcm';
$user = 'root';
$password = '';
Note: For LAMP, the default user is also root, with an empty password, unless you've set one.

5. Launch the project
Move the project files into the www folder (WAMP) or htdocs (LAMP), then access it via:

http://localhost/project-folder-name
🧠 Usage
Create an account or log in.

Choose a difficulty level: easy or hard.

Answer the quiz questions.

View your ranking based on your score and chosen difficulty.

🙋‍♂️ Author
Project developed by snk9341 as part of his BTS SIO SLAM curriculum.
Feel free to contribute or suggest improvements through Pull Requests!
