<?php

namespace Nawaf_Craft1b;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\level\Level;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use MiniGamesTree\PlayerSettings\PlayerAPI as GamesAPI;

class LuckyWars extends PluginBase implements Listener{
  
  public function getGamesAPI(){
  return GamesAPI::getInstance();
  }
  
  public function onEnable(){
  #register
  
  $this->getServer()->getPluginManager()->registerEvents($this,$this);
  
  }
  
}
