<?php

class SearchCest
{
  public function frontpageWorks(AcceptanceTester $i)
  {
    $i->amOnPage('/search/солкосерил/title/');
    
    // выбрать город
    $i->waitForElementVisible('.cityInfoButton', 10);
    $i->click('.cityInfoButton');
    
    // найдено шесть результатов
    $i->see('Найдено 6 товаров', ['css' => '.pages']);
    $i->seeNumberOfElements('.products.catalog > div', 6);
    
    // у всех товаров в названии селкосерил
    
    $i->see('солкосерил', ['css' => 'span[itemprop="name"]']);
  }
}
