<?php

use Slim\App;
use Source\Infra\Http\Controllers\Web\BattleResultController;
use Source\Infra\Http\Controllers\Web\RoundResultController;
use Source\Infra\Http\Controllers\Web\SelectCardCollectionController;
use Source\Infra\Http\Controllers\Web\StartBattleController;
use Source\Infra\Http\Controllers\Web\StartedBattleController;
use Source\Infra\Http\Controllers\Web\ToBattleController;

return function (App $app) {

    $app->get(
        '/select-card-collection',
        [SelectCardCollectionController::class, 'handle']
    )->setName('selectCardCollection');

    $app->post(
        '/start-battle',
        [StartBattleController::class, 'handle']
    )->setName('startBattle');

    $app->get(
        '/started-battle',
        [StartedBattleController::class, 'handle']
    )->setName('startedBattle');

    $app->post(
        '/to-battle',
        [ToBattleController::class, 'handle']
    )->setName('toBattle');

    $app->get(
        '/round-result',
        [RoundResultController::class, 'handle']
    )->setName('roundResult');

    $app->get(
        '/battle-result',
        [BattleResultController::class, 'handle']
    )->setName('battleResult');

};
