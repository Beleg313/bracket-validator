install:
	composer install
validate:
	composer validate
autoload:
	composer dump-autoload
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
run:
	./bin/run.php

test:
	./vendor/bin/phpunit tests/Test.php

testPro:
	./vendor/bin/phpunit tests/Test.php --coverage-html coverage --coverage-filter src
