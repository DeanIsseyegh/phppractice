<?php

class OOPMember {

    function bookLimit(): int {
        return 2;
    }

}

class VIPMember extends OOPMember {

    function bookLimit(): int {
        return 99;
    }

}

class FreeMember extends OOPMember {

    function bookLimit(): int {
        return 1;
    }

}

class UnregisteredUser extends OOPMember {

    function bookLimit(): int {
        return 0;
    }

}

class PremiumMember extends OOPMember {

    function bookLimit(): int {
        return 50;
    }

}

function runOOPCode() {
    $member1 = new OOPMember;
    $member2 = new VIPMember;
    $member3 = new FreeMember;
    $member4 = new UnregisteredUser;
    
    echo "Book limit: " . $member1->bookLimit() . "\n";
    echo "Book limit: " . $member2->bookLimit() . "\n";
    echo "Book limit: " . $member3->bookLimit() . "\n";
    echo "Book limit: " . $member4->bookLimit() . "\n";
    
    echo "\n";
}
?>