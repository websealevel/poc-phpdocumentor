# poc : phpDocumentor

Un poc pour experimenter phpDocumentor, une librairie qui permet de générer de la documentation de manière automatique à partir de commentaires respectant la norme de phpDoc, en cours de normalisation dans le [PSR-5](https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md) (aka *PHP Stantards Recommandations*) du [FIG](https://www.php-fig.org/) (aka *Framework Interop Group*).

## Pré requis

- docker
- docker-compose

## Lancer le projet

~~~bash
docker-compose up -d
~~~

## Arrêter le projet

~~~bash
docker run --rm -v $(pwd):/data phpdoc/phpdoc:3 phpdoc -t doc
~~~

## Générer la documentation

Commande à utiliser est la suivante

~~~bash
$ phpdoc run -d <SOURCE_DIRECTORY> -t <TARGET_DIRECTORY>
~~~

Via le conteneur docker

~~~bash
docker run --rm -v $(pwd)/doc:/data phpdoc/phpdoc:3
~~~


## Resources

- [phpDocumentor: Getting started](https://docs.phpdoc.org/3.0/guide/getting-started/index.html)
- [PSR-5](https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md)
- [Site officiel du FIG-PHP](https://www.php-fig.org/)
- [Liste des PSRs](https://www.php-fig.org/psr/)
- [Image officielle de phpDocumentor](https://hub.docker.com/r/phpdoc/phpdoc)
- # poc-phpdocumentor
