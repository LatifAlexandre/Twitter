#Memo gitHub

## Git et GitHub

git est un ensemble de commandes linux qui permettent de gérer un repository localement. Ne pas confondre **git**, les commandes que l'on peux faire pour gérer l'avancement d'un projet, et **gitHub** qui sert de *remote* a notre repository, cad de lieux de sauvegarde centralisé.

## Commandes de bases

### créer un repository

- `git init` : permet de transformer un dossier (celui dans lequelle on est dans le shell) en repository git

- `git clone *lien_git_hub* ` : permet d'installer un repository sur son ordinateur on en clonant un depuis gitHub, gitHub est alors le remote par defaut.

### recevoir et envoyer

#### recevoir

- `git pull *remote* *branche*` : permet de recuperer tout les commits fait sur le repository depuis le *remote* (ici on mettra *origin* pour *gitHub*) et depuis la bonne *branche*, *master* par defaut. usuelement, `git pull origin master`

#### envoyer

- `git add *fichier* ` : permet de rajouter ce fichier a *l'index* (si on en créé un nouveau ou si l'on modifie un ancien).ainsi, git le reconnais et va pouvoir le commiter

- `git commit -m "message"` : permet de faire un **commit**, c a d une mise a jour de certain fichier listé accompagné d'une message

- `git push *remote* *branche* ` : permet de mettre sur le dépot le commit fait. le *remote*, c'est l'endroit ou l'on sauvegarde notre repository (ici, c'est gitHub, donc par defaut on mettra toujours **origin**).par defaut, mettre *master* pour la branche. Donc utiliser : `git push origin master`

### remonter dans le temps

- `git checkout *sha* ` : permet de retourner l'état du repository au moment d'un ancien commit, *n'annule pas les nouveaux commit*. `git checkout *branche*` permet de revenir au dernier commit

### afficher des infos

- `git *status* ` : liste les fichiers qui sont listé et ceux qui ne sont pas listés dans le repository

- `git log` : permet de lister les commits effectué sur le depot. Chaque commit a un code **unique**, appelé *sha*. se lit de bas en haut chronologiquement

### Les branches

## gérer les branches

si l'on veux tester quelque chose sans toucher a notre code de base, on peut créer **une branche**

- `git branch` : affiche toutes les branche existante, * montre celle ou l'on est

- `git branch ma_branche` : créé une nouvelle branche nommé *ma_branche*

- `git checkout *nom_de_branche*` : permet de passer sur une autre branche

##Fusionner les branches

- `git merge *branche*` : permet de rajouter a la branche dans laquelle on est, la branche en parametre

si il y a un **conflit** (le même fichier a été modifié différement dans les 2 branches), git va juste ajouter afficher dans le fichier les 2 versions a la suite avec la syntaxe `<<<<< HEAD` et `>>>>>> modif`. Il faut alors *résoudre le conflit*, c'est a dire l'ouvrir avec un éditeur de texte et régler le problème. Une fois cela fait, il est necessaire de l'*add* et de le *commit* pour spécifier a git que l'on a résolut le conflit.
