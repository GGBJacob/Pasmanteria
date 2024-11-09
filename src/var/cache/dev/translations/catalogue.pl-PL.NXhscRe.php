<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('pl-PL', array (
));

$cataloguePl = new MessageCatalogue('pl', array (
));
$catalogue->addFallbackCatalogue($cataloguePl);

return $catalogue;
