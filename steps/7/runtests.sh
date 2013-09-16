#!/bin/sh
#phpunit ./tests
#phpunit --log-junit reports/log ./tests
#phpunit --log-junit reports/log --testdox-html testdox.html ./tests
phpunit --log-junit reports/log	--coverage-html reports/cc	--testdox-html reports/testdox.html	./tests
