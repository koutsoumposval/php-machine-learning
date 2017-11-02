PHP Machine Learning
=============================
PHP Machine Learning Examples for learning purposes.
Provide data, train the models and check the results! 

Library
--------
All examples are using the [PHP-ML - Machine Learning library for PHP][0]

Association rule learning
-------
* [Apriori Associator][1]
```
# Apriori Associator
php association-rule-learning/apriori.php
```
Classification
-------
* [Support Vector Classification][2]
* [KNearestNeighbors Classifier][3]
* [NaiveBayes Classifier][4]
```
# Support Vector Classification
php classification/svc.php

# KNearestNeighbors Classifier
php classification/KNearestNeighbors.php

# NaiveBayes Classifier
php classification/NaiveBayes.php
```

Regression
-------
* [LeastSquares Linear Regression][5]
* [Support Vector Regression][6]

```
# LeastSquares Linear Regression
php regression/leastSquares.php

# Support Vector Regression
php regression/svr.php
```

Installation
--------
```
composer install
```

[0]: http://php-ml.readthedocs.io/en/latest/
[1]: http://php-ml.readthedocs.io/en/latest/machine-learning/association/apriori/
[2]: http://php-ml.readthedocs.io/en/latest/machine-learning/classification/svc/
[3]: http://php-ml.readthedocs.io/en/latest/machine-learning/classification/k-nearest-neighbors/
[4]: http://php-ml.readthedocs.io/en/latest/machine-learning/classification/naive-bayes/
[5]: http://php-ml.readthedocs.io/en/latest/machine-learning/regression/least-squares/
[6]: http://php-ml.readthedocs.io/en/latest/machine-learning/regression/svr/