<?php
namespace skyss0fly\PocketShield;

class ShieldAPI {

  private const $bedrockPort;
  private const $javaPort;
  private const $ipv4;
  
public function registerConstants(): {
$this->$bedrockPort = 19132;
  $this->$javaPort = 25565;
  $this->$ipv4 = 0.0.0.0;
}
public function getShieldConfig():{
return $this->getServer()->getConfig();

}
public function getShieldVersion(): {
  return $this->getShieldConfig("ShieldVer");
  
}
public function isDevelopmentBuild(): bool {
return true;
}

public function getPocketmineAPIVer(): bool {
return $this->getShieldConfig("PMAPI");
}



  
}
<?
