<?php
namespace skyss0fly\PocketShield;

class ShieldAPI {
public function getShieldConfig():{
return $this->getServer()->getConfig();

}
public function getShieldVersion(): {
  return $this->getShieldConfig("ShieldVer");
  
}
  

<?
