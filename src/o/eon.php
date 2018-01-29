<?php
namespace o;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;
class eon extends PluginBase implements Listener {
    public function onEnable(){
      $this->getLogger()->info("ORANGEPLUGINS LOADED");
        
     }
   
}
