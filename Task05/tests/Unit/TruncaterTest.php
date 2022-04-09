<?php

namespace Rodushkinve\Tests;
use \PHPUnit\Framework\TestCase;
use Rodushkinve\Task05\Truncater;

class TruncaterTest extends TestCase
{
    
    /** @test */
    public function Reduction()
    {
        $truncater = new Truncater();
        $this->assertSame('Длинн...', $truncater->truncate('Длинный текст', ['length' => 5 ]));
        $this->assertSame('...', $truncater->truncate(''));
        $this->assertSame('Родюшкин Владислав Евгеньевич...', $truncater->truncate('Родюшкин Владислав Евгеньевич'));
        $this->assertSame('Родюшкин В...', $truncater->truncate('Родюшкин Владислав Евгеньевич', ['length' => 10]));
        $this->assertSame('Родюшкин Владислав Евгеньевич...', $truncater->truncate('Родюшкин Владислав Евгеньевич', ['length' => 50]));
        $this->assertSame('Родюшкин Владислав Евгеньевич...', $truncater->truncate('Родюшкин Владислав Евгеньевич', ['length' => -10]));
        $this->assertSame('Родюшкин В*', $truncater->truncate('Родюшкин Владислав Евгеньевич', ['length' => 10, 'separator' => '*']));
        $this->assertSame('Родюшкин Владислав Евгеньевич*', $truncater->truncate('Родюшкин Владислав Евгеньевич', ['separator' => '*']));
    }
}
