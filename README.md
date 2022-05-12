# Programmation Web 2 - L2S4 - 2020

J'ai decider de travailler sur un projet personnel. C'est un site pour un magasin Ethiopien qui vendra donc des produit d'origine Ethiopienne. Le magasin n'etant pas ouvert j'ai mis l'adresses de la fac dans les coordonnees ainsi que sur le map.  


## Site multi-pages avec 4 pages
  
* Page d'acceuil : `index.php`  
* Une page de contact  
* Une page pour les habits traditionnel  
* Une page avec les epices  


# Construction des pages
Les pages sont construites de cette manière :

    Naviguation - Langues

    Contenu de la page


Pour eviter d'avoir trop de fichiers j'ai mis tout le CSS dans le meme fichier en ajoutant des commentaires pour separer chaque partie du CSS pour montrer a quelle page celle-ci s'applique.  


# Description des pages  

## Page d'acceuil:  
Dans la page d'acceuil il y aura une description du magasin ainsi que un produits de marque `epices` et un produit de marque `habits` avec tout les deux un boutton `voir plus` pour nous ramener vers les pages respectivent de ces produit. Vous trouverez aussi nos coordoonees ainsi que nos horaires. Pour simplifier la tahce on a mis un map pour que le client puisse voir ou exactement se trouve le magasin.  

## Page Epices:  
Dans la page epices vous trouverez trois photo d'epices avec une description.  

## Pages Habits Traditionnel:  
Dans la page habits vous trouverez trois photos different d'habits traditionnel.  

## Page Contact:  
Dans la page contact il y aura un formulaire de contact a remplire. Il vous est demander de donner obligatoirement votre Nom, Prenom et message. Vous avez aussi le choix d'ajouter un url d'une photo ou d'un epice que vous desirez mais ne trouvais pas dans notre magasin. Cela nous donnera une idee sur ce que le client cherche.  

# Description de la BDD  
J'ai utiliser une bdd en sqlite qui contient un tableau "formulaire". Dans ce tableau on a les champs id, prenom, nom, url et messages. Dans le formulaire de contact les champs nom, prenom et messages sont obligatoire a remplir tandis que le champs url peut rester vide. 


# Problemes  
J'ai rencontrer des problemes sur la partie Back- utilisation de bdd ainsi que pour faire les appels ajax. Vous trouverez des bouts de code pour cette partie la dans le rendu.  

