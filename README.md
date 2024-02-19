# BricoleMe
Contexte du projet
La société BricoleMe aspire à développer une plateforme en ligne dédiée aux services de bricolage, établissant une connexion entre les clients ayant des besoins de réparation ou d'entretien et divers artisans qualifiés, tels que plombiers, électriciens, jardiniers, etc. Vous êtes chargé(e) de développer cette plateforme en utilisant le framework Laravel.

​

### Fonctionnalités Requises:

​

++Authentification et Autorisation:++

-Les utilisateurs peuvent s'inscrire en tant que clients ou artisans.

-Mettre en place un système d'authentification avec des rôles définis tels que Client, Artisan, et Administrateur.

-L'utilisateur peut se connecter avec des identifiants uniques email, username ou via son compte Gmail, Facebook etc...

-Utiliser les Middlewares pour régir l'accès aux profils et aux fonctionnalités en fonction du rôle de l'utilisateur.

​

++Inscription des Artisans:++

​

​

-Lors de l'inscription, l'artisan choisit son métier et spécifie ses compétences, par exemple, un plombier pourrait se spécialiser dans l'installation de lavabos et la résolution de fuites. Il a également la possibilité d'enrichir son profil en ajoutant des photos de ses réalisations passées.

-L'artisan peut définir un tarif spécifique pour chaque service qu'il propose.

-Les artisans doivent soumettre une demande à l'administrateur pour changer de métier ou ajouter de nouveaux domaines d'expertise. L'administrateur approuve ou refuse ces demandes.

​

​

++Inscription des clients et Sélection des Artisans:++

​

​

-Le client peut s'inscrire en fournissant sa photo, nom, prénom, date de naissance, ville, numéro de téléphone…

-Les clients peuvent sélectionner des artisans en fonction de leur métier, disponibilité et tarif pour l'intervention.

-Le client a la possibilité de télécharger le devis au format PDF, comprenant les détails tels que le nom et prénom du client, le nom et prénom de l'artisan, les pannes sélectionnées, le tarif, la date de création du devis, la validité du devis et l'adresse du client.

-Les clients peuvent recevoir un devis par email au format PDF.

​

++Gestion des Réservations:++

​

-Les clients peuvent annuler une intervention ou changer la date en fonction de la disponibilité de l'artisan avant une heure d’intervention.

-Après la finalisation de l'intervention, les clients peuvent attribuer une note, un commentaire à l'artisan.

​

++Service à la Clientèle:++

​

-Les clients ont la possibilité de déposer des réclamations en cas d'insatisfaction ou de problème avec un artisan.

-Les réclamations peuvent être gérées par l'administrateur pour assurer une résolution efficace.

​

++Signature électronique:++

​

-Les clients peuvent signer le devis électronique et l'artisan concerné le recevra par email.

​

Bonus:

-Une fonction de chat en temps réel via websockets permet une communication instantanée entre le client et l'artisan.

-Les clients peuvent envoyer leur localisation réelle aux artisans pour faciliter l'intervention.

-Repository pattern in Laravel.
