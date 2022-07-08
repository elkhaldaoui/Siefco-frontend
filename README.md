<img style="width: 100px;" src="https://user-images.githubusercontent.com/93930380/177550298-9d15c601-3087-49ab-9f8f-3d5ebae0288e.png">


# Contexte du projet
La société SEFACO nous a demander de réaliser un site web qui consiste à organiser les opérations des échanges de devise pour chaque client ou ils peuvent consulter l’état de leur compte et imprimer des factures de format PDF qui contient les détails de chaque opération réalisée, ce site web va permet aussi aux administrateurs de gérer les comptes et de les valider toute en donnant l’accès aux employés de la société d’actualiser l’état des bilans de chaque client. Pour construire ce site web il faut utiliser certaines fonctionnalités tels que :
  1.	Les conditionnels.
  2.	Les fonctions.
  3.	Les Framework. 
  4.	La validation de formulaire.
  5.	Construction d’une base de données.
  
  
# Les pages requises sont les suivantes :
    • Page d'accueil.
    • Pages de connexion et d'inscription.
    • Page d’affichage des clients.
    • Page d’affichage des employés.
    • Page pour l’affichage des opérations.
    • Page pour l’affichage des devises.
    • Des pages pour l’ajout des nouveaux clients, devises et utilisateurs(employés).
    
    
# Mise en page 
La mise en page est la suivante :

## La page d'accueil :
Contient une barre de navigation horizontale avec le nom et logo de société, les liens réseaux sociaux et liens cible pour l’inscription et la connexion, pour le corps de site contient des informations sur les services garantis et la catégorie clientèle visée, et contient aussi des cordonnées de messagerie et la localisation de la société sous le pied de la page.

## Page de connexion 
La page de connexion doit être contenir deux input de types texte :
- La connexion est basée sur l’email/numéro de téléphone et le mot de passe, le contenu est donc un simple formulaire de connexion, avec des champs pour l’email et le mot de passe, et un bouton de connexion. Avec une paragraphe au-dessus du formulaire pour rediriger l’utilisateur vers la page d’inscription s’il est un nouvel utilisateur.
Après s'être connecté, l'utilisateur est redirigé vers la page considéré selon le rôle son compte.
Si le rôle :
- Admin : l’utilisateur se va rediriger vers une Dashboard avec les liens cibles de chaque opération susmentionnée.  
- Client : doit être rediriger vers la page de consultation du bilan général.
- Employés (Staff) : ce rôle va rediriger l’utilisateur vers une Dashboard précis pour les employés.


## Page d'inscription
Le formulaire d'inscription doit contenir 5 champs :

    • Email.
    • Mot de passe.
    • Confirmation du mot de passe.
    • Nom et prénom
    • Rôle (bouton de type select).
    
L’utilisateur doit entrez un email valide et ne pas créez plusieurs comptes par la même adresse email. Le mot de passe doit comporter au moins six caractères et doit être vérifié par un deuxième mot de passe lors de l'inscription. Toute erreur de formulaire doit être affichée sous l'entrée d'où proviennent les données,
Après l’inscription l’utilisateur doit être rediriger vers une page de connexion après la réception d’un email de confirmation, cette page doit être contient un message d’explication de la pédagogie de la société et que l’utilisateur doit attendre une appelle téléphonique avec le responsable de communication avant l’activation le compte.


## Page de saisi de cordonnée pour le devise.
Cette page contiendra un formulaire pour ajouter des nouvelles devises, ces cordonnées sont :

    - Le nom de devise.
    - La valeur à la bourse mondiale.
    - Pays qui utilisent cette devise.


## Page d’affichage des clients.
Cette page doit contenir tableau avec des champs divisés pour afficher chaque information saisie par le client. Les mêmes informations doivent être afficher pour les employés mais chaqu’un à une autorisation différente :

    - Pour les employés : ils ont l’accès de d’ajouter, modifier ou supprimer les comptes des clients.
    - Pour l’admin : ont une autorisation supplémentaire d’ajouter, modifier ou supprimer les comptes des employées ainsi que les comptes des clients. 
    - Page pour consulter les nouvelles inscriptions et activer les comptes.
    - Cette page doit être contenir la liste des nouveaux comptes qu’ils sont stockés dans une base de données dépendante, et quels seront stockées dans une table principales pour les compte clients officiels après la confirmation après cliquer sur un bouton quel sera placé à droite de chaque ligne de compte pour l’activation ainsi qu’un bouton de suppression pour enlever les comptes qui non pas confirmés par l’administration pour libérer de l’espace de base de données.  
    - Page pour consulter la liste des devises disponible.
    Cette page doit contenir un tableau des devises avec les informations nécessaires pour chaque opérations d’échange.
    - Page pour consulter le bilan des opérations.
    Cette page contiendra un bilan général de toutes les opérations effectuées dès la première connexion avec la possibilité d’impression d’une copie de la facture en format 
  
# Technologies utilisés :
        •	Conception UML (diagramme use case, séquence et classe)
        •	Bootstrap pour le front
        •	PHP LARAVEL  pour le backend .
        •	JavaScript pour la validation des formulaires, modal ...
        •	Base de donnée relationnelle pour le type de base de donnée (MySQL)
