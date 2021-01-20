<?php

use PHPUnit\Framework\TestCase;

class StringsTest extends TestCase
{
    /**
     * @see https://www.php.net/manual/en/language.types.string.php
     */
    public function testVariableParsing()
    {
        $foo = 'world';

        // Double quotes.
        $this->assertEquals('Hello world', "Hello $foo");

        // Single quotes.
        $this->assertEquals('Hello $foo', 'Hello $foo');

        // TODO "Hello ${foo}"
        $this->assertEquals('Hello world', "Hello ${foo}");

        // TODO "Hello " . $foo
        $this->assertEquals('Hello world', "Hello " . $foo);

        // TODO Heredoc
        $foo = 'bar';

        $here = <<<HERE
Im here, $foo !
HERE;
        $this->assertEquals('Im here, bar !', $here);
        // TODO Nowdoc
        $now = <<<'NOW'
Im here, $foo !
NOW;
        $this->assertEquals('Im here, $foo !', $now);
    }

    /**
     * @see https://www.php.net/manual/en/ref.strings.php
     */
    public function testStringFunctions()
    {
        // trim — Strip whitespace (or other characters) from the beginning and end of a string
        $this->assertEquals('Hello', trim('Hello         '));
        $this->assertEquals('Hello', trim('Hello......', '.'));

        // ltrim — Strip whitespace (or other characters) from the beginning of a string
        // TODO to be implemented
        $this->assertEquals('Hello', ltrim(' Hello'));

        // rtrim — Strip whitespace (or other characters) from the end of a string
        // TODO to be implemented
        $this->assertEquals(' Hello', rtrim(' Hello '));

        // strtoupper — Make a string uppercase
        $this->assertEquals('HELLO', strtoupper('hello'));

        // strtolower — Make a string lowercase
        $this->assertEquals('hello', strtolower('HeLlO'));

        // ucfirst — Make a string's first character uppercase
        // TODO to be implemented
        $this->assertEquals('Hello', ucfirst('hello'));

        // lcfirst — Make a string's first character lowercase
        // TODO to be implemented
        $this->assertEquals('hELLO', lcfirst('HELLO'));

        // strip_tags — Strip HTML and PHP tags from a string
        // TODO to be implemented
        $this->assertEquals('HELLO', strip_tags('<p>HELLO</p>'));

        // htmlspecialchars — Convert special characters to HTML entities
        // TODO to be implemented
        $this->assertEquals("&lt;a href='test'&gt;Test&lt;/a&gt;", htmlspecialchars("<a href='test'>Test</a>"));

        // addslashes — Quote string with slashes
        // TODO to be implemented
        $this->assertEquals("Ваше имя O\'Reilly?", addslashes("Ваше имя O'Reilly?"));

        // strcmp — Binary safe string comparison
        // TODO to be implemented
        $this->assertEquals(-1, strcmp("PHP", "php"));

        // strncasecmp — Binary safe case-insensitive string comparison of the first n characters
        // TODO to be implemented
        $this->assertEquals(0, strncasecmp("PHP", "php", 2));

        // str_replace — Replace all occurrences of the search string with the replacement string
        // TODO to be implemented
        $this->assertEquals("<body text='black'>", str_replace("%body%", "black", "<body text='%body%'>"));

        // strpos — Find the position of the first occurrence of a substring in a string
        // TODO to be implemented
        $this->assertEquals(0, strpos('abc', 'a'));

        // strstr — Find the first occurrence of a string
        // TODO to be implemented
        $this->assertEquals('bc', strstr('abc', 'b'));

        // strrchr — Find the last occurrence of a character in a string
        // TODO to be implemented
        $this->assertEquals('/page.html', strrchr('site.com/folder1/folder2/page.html', '/'));

        // substr — Return part of a string
        // TODO to be implemented
        $this->assertEquals('bcd', substr("abcdef", 1, 3));

        // sprintf — Return a formatted string
        // TODO to be implemented
        $this->assertEquals('There are 5 monkeys in the tree', sprintf('There are %d monkeys in the %s', 5, 'tree')); 
    }
}