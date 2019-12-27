<?php

namespace kardespro;

use pocketmine\plugin\pluginBase;
use pocketmine\plugin\plugin;
use pocketmine\command\commandSender;
use pocketmine\command\command;
use pocketmine\server;
use pocketmine\player;

 class main extends pluginBase{
   public function onEnable{
     $this->getLogger()->info('WebTools-Plugin Aktif-kardespro')
   public function onDisable{
     $this->getLogger()->info('WebTools-plugin De-aktif')
   public function onCommand(commandSender $sender,command $kmt,string $label, array $args): bool{
       if($kmt->getName()=="webtools")){
         if($sender->hasPermission("webtools.kmt")){
           if($sender instanceof Player){
             $sender->sendMessage('Web Onay Kodun ');
           }
         }else{
           $sender->sendMessage('§4Yetkin Yok')
           }
       }
       
             
       