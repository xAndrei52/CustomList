<?php

namespace CustomList;

use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\PlayerChatEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
class Main extends PluginBase implements Listener {
    
public function onEnable(){
                $this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info(TEXTFORMAT::BLUE . "[STAFF]" .TEXTFORMAT::RED. " >>" .TEXTFORMAT::AQUA.  " CustomList running version 1.0.0-ALPHA");
	}
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
        $cmd = strtolower($command->getName());
        switch ($cmd){
            case "vmlist":
                if (!($sender instanceof Player)){
                    foreach($this->getServer()->getOnlinePlayers() as $player) {
		            $maxPlayers = $this->getServer()->getMaxPlayers();
			    $onlineList = $this->getServer()->getLoggedInPlayers();
                            $sender->sendMessage(TEXTFORMAT::GOLD . "§bThere are currently §3$onlineList §bonline! §aHere are the online players.\n§dimplode("," $player");
                            return true;
		    } else {
			    $sender->sendMessage("Please use this command in game");
            }
        }
    }
}
