\<?php
$I = new WebGuy($scenario);
$I->wantTo('see the homepage');
$I->amOnPage('/');
$I->see("Home");
$I->wantTo('sign in');
$I->fillField('email','rrrhys@gmail.com');
$I->fillField('password','Rrrhys01');
$I->click('#signin_button');
$I->see('Signed in as rrrhys@gmail.com');
