<?php
namespace skyss0fly\PocketShield;

class ShieldAPI {

    private int $bedrockPort; // Use the correct type declaration and remove 'const'
    private int $javaPort; // Use the correct type declaration and remove 'const'
    private string $ipv4; // Use the correct type declaration and remove 'const'

    // Constructor to initialize constants
    public function __construct() {
        $this->bedrockPort = 19132; // Set default values in the constructor
        $this->javaPort = 25565; 
        $this->ipv4 = '0.0.0.0';
    }

    public function getShieldConfig(): array {
        return $this->getServer()->getConfig(); // Ensure getServer() is defined
    }

    public function getShieldVersion(): ?string { // Return type can be null
        return $this->getShieldConfig()["ShieldVer"] ?? null; // Use array syntax
    }

    public function isDevelopmentBuild(): bool {
        return true; // This can remain as is
    }

    public function getPocketmineAPIVer(): ?string { // Return type can be null
        return $this->getShieldConfig()["PMAPI"] ?? null; // Use array syntax
    }
    
    // Ensure a method to get server object is defined
    private function getServer() {
        // This function should return the server instance
        // Implementation needed here
    }
}
?>
