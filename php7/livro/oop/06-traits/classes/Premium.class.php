<?php

namespace classes;

use classes\Person;

class Premium extends Person {

    public function getMonthlyFee(): float {
        return 10.0;
    }

    public function getAmountToBorrow(): int {
        return 10;
    }

    public function getType(): string {
        return 'Premium';
    }

}
