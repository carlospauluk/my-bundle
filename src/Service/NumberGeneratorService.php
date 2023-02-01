<?php

namespace MyBundleNamespace\Service;

class NumberGeneratorService
{

    public function generate(int $max) {
        return random_int(0, $max) + 2000000000;
    }

}
