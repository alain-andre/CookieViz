# Cookieviz

Analysez les interactions entre votre ordinateur, votre navigateur et des sites et serveurs distants !

*   Une vidéo présentant le fonctionnement de l'outil est disponible sur [Youtube][1]
*   Le [site][2] de la CNIL vous en dit plus.

# Pour Installer CookieViz sur Windows

Télécharger le fichier [setup.exe][3].

# Déploiement sur Linux ou sur MAC

## Prérequis :

*   Un serveur web
*   Un serveur de base de données mysql
*   PHP5

## Installation

Il existe deux versions du logiciel de détection des cookies. La première version du logiciel s'appuie sur le binaire **tshark**. La seconde s'appuie sur le binaire **mitmdump**. Seule la version mitmdump permet de surveiller l'utilisation des cookies par des sites tiers utilisant le protocole https.

#### Installation basée sur tshark pour OSX

Il faut commencer par installer tshark. 

Il faut ensuite charger le repository à la racine de votre serveur web

Enfin, il est nécessaire de modifier les paramètres de connexion à la base de données dans les fichiers suivants :

*   /var/www/cookieviz/soft/monitor_tshark_osx.php
*   /var/www/cookieviz/connect.php

Pour lancer la surveillance de l'utilisation des cookies, il faut alors exécuter les commandes suivantes dans un terminal :

Pour la version tshark :

    php /chemin vers le répertoire soft/monitor_tshark_osx.php <index de la carte réseau utilisée pour communiquer sur internet>

Vous pouvez ensuite naviguer comme auparavant sur des sites web. 
Vous pouvez constater le résultat en vous connectant avec un navigateur sur votre serveur web http://localhost/cookieviz/

#### Installation basée sur mitmdump pour Linux (exemple sur une Debian/Ubuntu)

Il faut commencer par installer mitmdump.

    sudo apt-get install mitmproxy
    
Il faut ensuite charger le repository dans votre dossier de projets et créer un lien à la racine de votre serveur web.

    cd ~/01_projects/
    git clone https://github.com/LaboCNIL/CookieViz
    sudo ln -s CookieViz /var/www/cookieviz
    

Enfin, il est nécessaire de modifier les paramètres de connexion à la base de données dans le fichier suivant :

- /var/www/cookieviz/soft/.install

Pour lancer la surveillance de l'utilisation des cookies, il suffit de lancer http://localhost/cookieviz/ dans un onglet de votre navigateur.

Vous pouvez ensuite naviguer comme auparavant sur des sites web sur les autres onglets de votre navigateur. 

## TODO
- [x] Faire en sorte de ne lancer que l'index.php de CookieViz et non lancer l'app en deux fois
- [] Faire en sorte que la DB s'installe à la première utilisation.
- [] Modifier les fichiers suivants afin de ne se connecter qu'une fois
  - /var/www/cookieviz/soft/monitor_mitmdump.php
  - /var/www/cookieviz/connect.php

 [1]: http://www.youtube.com/watch?v=5UJGlDPRLCw
 [2]: http://www.cnil.fr/vos-droits/vos-traces/les-cookies/telechargez-cookieviz/
 [3]: https://github.com/LaboCNIL/CookieViz/releases/download/1.0/Setup.exe
