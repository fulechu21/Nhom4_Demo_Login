<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{

    public function _before(AcceptanceTester $I)
    {
        
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->see('Laravel');
    }
    
}
