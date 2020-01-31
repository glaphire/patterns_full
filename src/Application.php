<?php

namespace App;

use App\Classes\ComponentWithBackReference;
use App\Classes\Prototype;

class Application
{
    public function run()
    {
        $this->clientCode();
    }

    private function clientCode()
    {
        $p1 = new Prototype();
        $p1->primitive = 245;
        $p1->component = new \Datetime;
        $p1->circularReference = new ComponentWithBackReference($p1);

        $p2 = clone $p1;
        if ($p1->primitive === $p2->primitive) {
            echo "Primitive field values have been carried over to a clone.\n";
        } else {
            echo "Primitive field values have not been copied.\n";
        }

        if ($p1->component === $p2->component) {
            echo "Simple component has not been cloned.\n";
        } else {
            echo "Simple component has been cloned.\n";
        }

        if ($p1->circularReference === $p2->circularReference) {
            echo "Component with back reference has not been cloned.\n";
        } else {
            echo "Component with back reference has been cloned.\n";
        }

        if ($p1->circularReference->prototype === $p2->circularReference->prototype) {
            echo "Component with back reference is linked to original object.\n";
        } else {
            echo "Component with back reference is linked to the clone.\n";
        }
    }
}
