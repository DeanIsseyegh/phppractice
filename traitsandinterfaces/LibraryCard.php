<?php

class LibraryCard {

    private string $name;
    private string $content;

    function __construct(string $name, string $content)
    {
        $this->name = $name;
        $this->content = $content;
    }

    function read() {
        echo "Time to read " . $this->name . "\n";
        echo $this->content;
    }

}

?>