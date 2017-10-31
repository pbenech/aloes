Testé avec version PHP 5.5/5.6

1 - Installer la base de donnée :
=================================

aloes.sql (Base de données vierge)
aloes-demo.sql (Base de données démo)


2 - Configurer les paramètres de l'application se trouve dans le    
===================================================================

Fichier : aloes/app/config/parameters.yml

parameters:
    database_driver: pdo_mysql
    database_host: localhost
    database_port: null
    database_name: aloes
    database_user: user
    database_password: password
    mailer_transport: smtp
    mailer_host: smtp.xxxx.fr 
    mailer_user: null
    mailer_password: null
    locale: fr
    secret: yyyy
    database_path: null
    fr3d_ldap_host: ldap.XXX.fr
    fr3d_ldap_dn: ou=people, dc=XXX, dc=fr


3 - Changer le mot de passe de l'administrateur :
==================================================

A la racine du projet aloes, éxécuter la commande suivante

php app/console fos:user:chage-password admin


4 - Nettoyer le cache :
=======================
A la racine du projet aloes, éxécuter la commande suivante

php app/console cache:clear

5 -  URL du site :
==================
/aloes/web/app.php/aloes-public/tableaux/niveau
