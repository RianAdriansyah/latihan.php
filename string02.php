<?php
$str = <<<EOD
Example of String
Spinning Multiple Lines
Using Heredocs Syntax.
EOD;

/*More Complex Example, With Variables.*/
class foo{
    var $foo;
    var $bar;

    function foo()
    {
$this->foo = 'Foo';
$this->bar = array ('Bar1','Bar2','Bar3');
    }
}
$foo = new foo();
$name = 'Achmatim';

echo <<<EOT
<u>$str</u><br>
My Name Is"<b>$name</b>". I am Printing some <b>$foo->foo</b>.
Now, I am printing some <b>{$foo->bar[1]}</b>.
This Should Print a Capital'A': \X41
EOT;
?>