# Application web de chiffrement 

Cette application web permet de chiffrer et de déchiffrer des messages . Les fonctions de chiffrement et de déchiffrement sont basés sur le chiffrement de césar, de polybe et le chiffrement affine.

Fait par DONCOSSY Saïd.

## Tables des matières

1. [Description de l'interface](#description)
2. [Démarrer l'application web](#démarrage-et-accès-à-lapplication)


## Description 

L'interface présente une navbar contenant trois liens menant vers les formulaires de chiffrement basés sur les chiffrements précédents .

## Démarrage et accès à l'application

Pour démarrer l'application : 
- Il faudra avoir php installé et mis en variable d'environnement

- Ouvrir le terminal , se rendre dans le répertoire du projet et taper la commande: 

```bash 

php -S 127.0.0.1:8000

```
Spécifier un numéro de port (par exemple, 8000) après l'option -S. Vous pouvez également spécifier l'adresse IP du serveur (par exemple, 127.0.0.1).
Si l'adresse IP n'est pas spécifié, le serveur sera accessible uniquement localement. Si vous spécifiez 0.0.0.0 comme adresse IP, le serveur sera accessible depuis d'autres appareils connectés au même réseau.

- Ouvrir le navigateur et accéder à l'adresse indiquée dans la sortie de commande