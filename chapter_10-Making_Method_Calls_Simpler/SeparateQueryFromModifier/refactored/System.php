<?php

class System {
    public function sendAlert(array $people): void
    {
        if ($this->foundPerson($people) !== '') {
            echo "enviar alerta!";
        }
    }

    public function foundPerson(array $people): string {
        for ($i = 0; $i < count($people); $i++) {
            if ($people[$i] === 'Don') {
                return 'Don';
            }

            if ($people[$i] === 'John') {
                return 'John';
            }
        }

        return '';
    }

    public function checkSecurity(array $people): void {
        $this->sendAlert($people);
        $found = $this->foundPerson($people);

        echo $found;
    }
}


