# test
test 

les technologie utilisees sont : php7.3, symfony4 , bundle KnpUOAuth2ClientBundle pour l'authentification avec google , python3 pour l api de la nasa et mariadb 10.3.2 pour la base de donnée

j ai eu des soucis avec l api de la nasa car l api est en python . mais javais compris le principe :

lancer une commande pour recuperer les json de la nasa , mettre ce json dans une base de donnée

donc comme vous pouvez le constater j ai creer une base de donnée appeler nasa et une table image avec les information que le json nous donne

toute la partie donnée en base a été fait avec doctrine .

j ai créé deux pages , image_nasa et new_image

image_nasa est pour l'authentification et l'autre new image permet de voir l image du jour

l'authentification ne marche pas car j'ai des soucis de redirection avec google , j ai utilisé un tuto 

dans le dossier src , il y a un dossier security pour authentifier avec google

dans le fichier config>package>knpu_oauth2_client.yaml une route a été creer pour la partie google authentification









