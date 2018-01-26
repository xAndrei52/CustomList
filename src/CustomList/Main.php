<?php
namespace CustomList;

use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
class Main extends PluginBase implements Listener {
    
public function onEnable(){

                $this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info(TEXTFORMAT::BLUE . "[STAFF]" .TEXTFORMAT::RED. " >>" .TEXTFORMAT::AQUA.  " CustomList running version 1.0.0-ALPHA");
	}
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        $cmd = strtolower($command->getName());
        switch ($cmd){
            case "list":
                if (!($sender instanceof Player)){
                    $getOnlinePlayers = $this->getServer()->getOnlinePlayers($sender->getName());
                    $getMaxPlayers = $this->getServer()->getMaxPlayers($sender->getName());
                    $playerNames = $this->getServer()->getPlayerNames($playerNames->getName());
                    $sender->sendMessage(TEXTFORMAT::GOLD . "§aThere is currently §b$getOnlinePlayers §aout of §b$getMaxPlayers §aonline.");
                    $sender->sendMessage(implode("§c, §7", $playerNames));
                    return true;
            }
        }
    }
}

