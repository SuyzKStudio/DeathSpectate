<?php

namespace KStudio\DS;

use KStudio\DS\Main;

use pocketmine\Player;

use pocketmine\scheduler\Task;

use pocketmine\Server;

use pocketmine\event\Listener;



class Respawn extends Task {

	public $timer = 5;

	public function __construct(Main $main, $playerName){
		$this->main = $main;
		$this->playerName = $playerName;
	}

	public function onRun($tick) {
		  $player = $this->main->getServer()->getPlayerExact($this->playerName);
		  if($player instanceof Player){
		  	if($this->timer == 5){
			$player->sendPopup("§aRespawn in §e5");

			}

			if($this->timer == 4){

			$player->sendPopup("§aRespawn in §e4");

			}

			if($this->timer == 3){
			$player->sendPopup("§aRespawn in §63");

			}

			if($this->timer == 2){
			$player->sendPopup("§aRespawn in §c2");

			}

			if($this->timer == 1){
			$player->sendPopup("§aRespawn in §41");

			}

			if($this->timer == 0){
			    
			    $player->sendMessage("§aRespawned!");
			    $player->teleport(Server::getInstance()->getDefaultLevel()->getSafeSpawn());
			    $player->setGamemode(0);
			    $player->setHealth(20);
			    $player->setFood(20);
			    
			}
          $this->timer--;
      } else {
      	$this->main->getScheduler()->cancelTask($this->getTaskId());
    	}
	}
}