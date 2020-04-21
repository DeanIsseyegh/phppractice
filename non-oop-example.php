<?php

class NonOOPMember {

    public string $memberType;

    function __construct($memberType)
    {   
        $this->memberType = $memberType;    
    }

    function bookLimit(): int {
        if ($this->memberType == "Member") {
            return 2;
        } else if ($this->memberType == "VIP") {
            return 99;
        } else if ($this->memberType == "Free") {
            return 1;
        } else if ($this->memberType == "Unregistered") {
            return 0;
        } else if ($this->memberType == "PremiumMember") {
            return 6;
        } else {
            die("Unrecongized member type - exiting");
        }
    }


}

function runNonOOPCode() {
    $member1 = new NonOOPMember("Member");
    $member2 = new NonOOPMember("VIP");
    $member3 = new NonOOPMember("Free");
    $member4 = new NonOOPMember("Unregistered");
    
    echo "Book limit: " . $member1->bookLimit() . "\n";
    echo "Book limit: " . $member2->bookLimit() . "\n";
    echo "Book limit: " . $member3->bookLimit() . "\n";
    echo "Book limit: " . $member4->bookLimit() . "\n";
    
    echo "\n";
}


?>