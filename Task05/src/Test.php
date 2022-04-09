<?php

namespace Rodushkinve\Task05;

function runTest()
{
    $truncater = new Truncater();
    echo $truncater->truncate('Длинный текст', ['length' => 5 ]) . PHP_EOL;
    echo $truncater->truncate('') . PHP_EOL;
    echo $truncater->truncate('Родюшкин Владислав Евгеньевич') . PHP_EOL;
    echo $truncater->truncate('Родюшкин Владислав Евгеньевич', ['length' => 10]) . PHP_EOL;
    echo $truncater->truncate('Родюшкин Владислав Евгеньевич', ['length' => 50]) . PHP_EOL;
    echo $truncater->truncate('Родюшкин Владислав Евгеньевич', ['length' => -10]) . PHP_EOL;
    echo $truncater->truncate('Родюшкин Владислав Евгеньевич', ['length' => 10, 'separator' => '*']) . PHP_EOL;
    echo $truncater->truncate('Родюшкин Владислав Евгеньевич', ['separator' => '*']) . PHP_EOL;
}
