<?php
exec("cd ../ && git pull && artisan migrate");
mail('sa-n-ya2013@yandex.ru', 'Deploy success', '');
echo "It's work!!!";