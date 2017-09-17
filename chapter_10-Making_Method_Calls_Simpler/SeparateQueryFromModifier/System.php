<?php

class System {
    public function foundMiscreant(array $people): string {
        for ($i = 0; $i < count($people); $i++) {
            if ($people[$i] === 'Don') {
                $this->sendAlert();
                return 'Don';
            }

            if ($people[$i] === 'John') {
                $this->sendAlert();
                return 'John';
            }
        }

        return '';
    }

    public function checkSecurity(array $people): void {
        $found = $this->foundMiscreant($people);

        echo $found;
    }
}


