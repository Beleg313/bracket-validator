<?php

use PHPUnit\Framework\TestCase;

use function App\Engine\bracketsValidator;

class Test extends TestCase
{
        public function testValid1()
        {
          $result = bracketsValidator('()');
          $this->assertEquals('Brackets ok!', $result);
        }

        public function testValid2()
        {
          $result = bracketsValidator('(1 + 3) + (3 - 3)');
          $this->assertEquals('Brackets ok!', $result);
        }

        public function testValid3()
        {
          $result = bracketsValidator('(()()())');
          $this->assertEquals('Brackets ok!', $result);
        }

        public function testInvalid1()
        {
          $result = bracketsValidator('(');
          $this->assertEquals('Brackets mistake!', $result);
        }

        public function testInvalid2()
        {
          $result = bracketsValidator('(1 + 3) + (3 - 3');
          $this->assertEquals('Brackets mistake!', $result);
        }

        public function testInvalid3()
        {
          $result = bracketsValidator(')()()(');
          $this->assertEquals('Brackets mistake!', $result);
        }

        public function testEmpty()
        {
          $result = bracketsValidator('');
          $this->assertEquals('Brackets ok!', $result);
        }

        public function testOnlyOpeningBracket()
        {
            $result = bracketsValidator('(');
            $this->assertEquals('Brackets mistake!', $result);
        }
    
        public function testOnlyClosingBracket()
        {
            $result = bracketsValidator(')');
            $this->assertEquals('Brackets mistake!', $result);
        }
}
