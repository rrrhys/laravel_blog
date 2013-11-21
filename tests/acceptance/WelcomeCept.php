<?php
$I = new WebGuy($scenario);
$I->wantTo('see the homepage');
$I->amOnPage('/');
$I->see("Home");
$I->wantTo('sign in');
$I->amOnPage('/signin');
$I->fillField('signin[email]','rrrhys@gmail.com');
$I->fillField('signin[password]','Rrrhys01');
$I->click('Sign in');
$I->see('Signed in as rrrhys@gmail.com');
