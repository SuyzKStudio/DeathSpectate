<?php

namespace KStudio\DS;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

use pocketmine\event\entity\EntityDamageEvent;

use pocketmine\scheduler\Task;

class main extends PluginBase implements Listener {

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onDamage(EntityDamageEvent $event){
	    $player = $event->getEntity();
	    
	    if($player instanceof Player and $player->getHealth() - $event->getBaseDamage() <= 0) {
	        
	        $player->sendTitle("§cYou died!");
	        
	        $player->
	        
	        
	        $player->setHealth(20);
	        $player->setFood(20);
	        
	        
	        $player->getInventory()->clearAll();
	        $player->getArmorInventory()->clearAll();
	        $player->getCursorInventory()->clearAll();
	        $player->removeAllEffects();
	        
	        
	        $player->setGamemode(3);
	        
	        
	        $this->getScheduler()->scheduleRepeatingTask(new Respawn($this, $player->getName()), 20);
	        
	    }
	}
}