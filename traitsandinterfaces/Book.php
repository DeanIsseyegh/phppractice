<?php

class Book {

    private string $name;
    private string $content;

    function __construct(string $name, string $content)
    {
        $this->content = $content;
        $this->name = $name;
    }

    function read() {
        echo "Time to read " . $this->name . "\n";
        echo $this->content;
    }

}

?>