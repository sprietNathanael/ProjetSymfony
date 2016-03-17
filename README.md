# ProjetSymfony
Gestion des notes du département Informatique (AOCS)

# Notes concernant le sujet

## Visualisation des résultats pour le jury
On peut vouloir visualiser que AP ou que AT

## Authentification
Réutiliser l'authentification de l'utilisateur sur l'intranet, mais durant la réalisation du projet, utiliser notre propre système d'authentification (très simple, quelque soit le mot de passe ou le login, s'authentifier)

## Intégration avec l'intranet
Ne pas utiliser Symfony 3, utiliser 2.7 ou 2.8. Faire du projet un bundle
Exemple d'arborecence :
- Appli
  - app
  - src
    - IUT
      - CreationNotesBunble
  - web
    - intranet
    - gestionNotes (public)
      - js
      - css
      - html
      - img
