<?php

namespace JAILTeleport;

use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
use pocketmine\math\Vector3;

class JAILTeleport extends PluginBase implements Listener{

	public function onEnable(){
		$this->getLogger()->info("§aJAILTeleport§eを読み込みました。");
		$this->getLogger()->info("§c二次配布は禁止です。§b製作者 ikatyo");
		$this->getServer()->getPluginManager()->registerEvents($this,$this);	
	}

	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
		switch(strtolower($command->getName())){
			case "jail":
				switch(strtolower($args[0])){
					case "go1":
						if($sender->isOp()){

								//Configから値を取得する
								$config = new Config($this->getDataFolder() . "/config.yml", Config::YAML);
						        $g_id = $config->get("g_id");
						        $switch = $config->get("switch");
						        $x = $config->get("x1");
						        $y = $config->get("y1");
						        $z = $config->get("z1");

						        //Playerの操作
								$username = strtolower($args[1]);
								$player = $sender->getServer()->getPlayer($username);
								$player->setGamemode(2);
								$vector = new Vector3($x,$y,$z);
								$player->teleport($vector);

								//送信
								$sender->sendMessage("§a[Jail INFO]".$username."を牢屋1に転送しました。");
								$message = 'Alert:'.$username.'が牢屋No.1に投獄されました。必要に応じ処罰を執行して下さい。';
						        $this->post($g_id, $message, $shout = $switch);
							}else{
								$sender->sendMessage("[Error]§c運営コマンドのため一般プレイヤーは利用できません。");
						}
					break;
					
					case "go2":
						if($sender->isOp()){

								//Configから値を取得する
								$config = new Config($this->getDataFolder() . "/config.yml", Config::YAML);
						        $g_id = $config->get("g_id");
						        $switch = $config->get("switch");
						        $x = $config->get("x2");
						        $y = $config->get("y2");
						        $z = $config->get("z2");

						        //Playerの操作
								$username = strtolower($args[1]);
								$player = $sender->getServer()->getPlayer($username);
								$player->setGamemode(2);
								$vector = new Vector3($x,$y,$z);
								$player->teleport($vector);

								//送信
								$sender->sendMessage("§a[Jail INFO]".$username."を牢屋2に転送しました。");
								$message = 'Alert:'.$username.'が牢屋No.2に投獄されました。必要に応じ処罰を執行して下さい。';
						        $this->post($g_id, $message, $shout = $switch);
							}else{
								$sender->sendMessage("[Error]§c運営コマンドのため一般プレイヤーは利用できません。");
						}
					break;
					
					case "go3":
						if($sender->isOp()){

								//Configから値を取得する
								$config = new Config($this->getDataFolder() . "/config.yml", Config::YAML);
						        $g_id = $config->get("g_id");
						        $switch = $config->get("switch");
						        $x = $config->get("x3");
						        $y = $config->get("y3");
						        $z = $config->get("z3");

						        //Playerの操作
								$username = strtolower($args[1]);
								$player = $sender->getServer()->getPlayer($username);
								$player->setGamemode(2);
								$vector = new Vector3($x,$y,$z);
								$player->teleport($vector);

								//送信
								$sender->sendMessage("§a[Jail INFO]".$username."を牢屋3に転送しました。");
								$message = 'Alert:'.$username.'が牢屋No.3に投獄されました。必要に応じ処罰を執行して下さい。';
						        $this->post($g_id, $message, $shout = $switch);
							}else{
								$sender->sendMessage("[Error]§c運営コマンドのため一般プレイヤーは利用できません。");
						}
					break;
					
					case "go4":
						if($sender->isOp()){

								//Configから値を取得する
								$config = new Config($this->getDataFolder() . "/config.yml", Config::YAML);
						        $g_id = $config->get("g_id");
						        $switch = $config->get("switch");
						        $x = $config->get("x4");
						        $y = $config->get("y4");
						        $z = $config->get("z4");

						        //Playerの操作
								$username = strtolower($args[1]);
								$player = $sender->getServer()->getPlayer($username);
								$player->setGamemode(2);
								$vector = new Vector3($x,$y,$z);
								$player->teleport($vector);

								//送信
								$sender->sendMessage("§a[Jail INFO]".$username."を牢屋4に転送しました。");
								$message = 'Alert:'.$username.'が牢屋No.4に投獄されました。必要に応じ処罰を執行して下さい。';
						        $this->post($g_id, $message, $shout = $switch);
							}else{
								$sender->sendMessage("[Error]§c運営コマンドのため一般プレイヤーは利用できません。");
						}
					break;
					
					case "go5":
						if($sender->isOp()){

								//Configから値を取得する
								$config = new Config($this->getDataFolder() . "/config.yml", Config::YAML);
						        $g_id = $config->get("g_id");
						        $switch = $config->get("switch");
						        $x = $config->get("x5");
						        $y = $config->get("y5");
						        $z = $config->get("z5");

						        //Playerの操作
								$username = strtolower($args[1]);
								$player = $sender->getServer()->getPlayer($username);
								$player->setGamemode(2);
								$vector = new Vector3($x,$y,$z);
								$player->teleport($vector);

								//送信
								$sender->sendMessage("§a[Jail INFO]".$username."を牢屋5に転送しました。");
								$message = 'Alert:'.$username.'が牢屋No.5に投獄されました。必要に応じ処罰を執行して下さい。';
						        $this->post($g_id, $message, $shout = $switch);
							}else{
								$sender->sendMessage("[Error]§c運営コマンドのため一般プレイヤーは利用できません。");
						}
					break;
					
					case "go6":
						if($sender->isOp()){

								//Configから値を取得する
								$config = new Config($this->getDataFolder() . "/config.yml", Config::YAML);
						        $g_id = $config->get("g_id");
						        $switch = $config->get("switch");
						        $x = $config->get("x6");
						        $y = $config->get("y6");
						        $z = $config->get("z6");

						        //Playerの操作
								$username = strtolower($args[1]);
								$player = $sender->getServer()->getPlayer($username);
								$player->setGamemode(2);
								$vector = new Vector3($x,$y,$z);
								$player->teleport($vector);

								//送信
								$sender->sendMessage("§a[Jail INFO]".$username."を牢屋6に転送しました。");
								$message = 'Alert:'.$username.'が牢屋No.6に投獄されました。必要に応じ処罰を執行して下さい。';
						        $this->post($g_id, $message, $shout = $switch);
							}else{
								$sender->sendMessage("[Error]§c運営コマンドのため一般プレイヤーは利用できません。");
						}
					break;
				}
			break;
		}
	}

	public function login(){
    	$config = new Config($this->getDataFolder() . "/config.yml", Config::YAML);
    	$logintype = $config->get("logintype");
    	$api = new LobiAPI();

        if ($logintype == 'mail') { //Config[logintype]の判定(mailだった場合)
                $mail = $config->get("mail");
                $pass = $config->get("pass");
                if ($api->Login($mail, $pass)) {//twitter認証の場合はTwitterLoginを使用する
                    $this->getLogger()->info(TextFormat::AQUA . 'ログイン成功');
                } else {
                    $this->getLogger()->info(TextFormat::RED . 'ログイン失敗');
                    $this->getLogger()->info(TextFormat::RED . 'Configを確認してください');
                }
                //mailだった場合の処理はここまで

            } else {//twitterだった場合(正確に言えばconfigの値がmail以外だった場合)
                if ($logintype == 'twitter') {
                $mail = $config->get("mail");
                $pass = $config->get("pass");
                if ($api->TwitterLogin($mail, $pass)) {//twitter認証の場合はTwitterLoginを使用する
                    $this->getLogger()->info(TextFormat::AQUA . 'ログイン成功');
                } else {
                    $this->getLogger()->info(TextFormat::RED . 'ログイン失敗');
                    $this->getLogger()->info(TextFormat::RED . 'Configを確認してください');
                }

                } else {
                $this->getLogger()->info(TextFormat::RED . '入力形式が不正です');
                $this->getLogger()->info(TextFormat::RED . 'メール認証の場合はmailと入力');
                $this->getLogger()->info(TextFormat::RED . 'Twitter認証の場合はtwitterと入力');
            }
        }
    }

	public function post($g_id,$message,$swich){
        $api = new LobiAPI();
        $this->login();
    	$api->MakeThread($g_id, $message, $shout = $swich);
    	$this->getLogger()->info(TextFormat::AQUA . 'PostSucces!');
    }
}
?>