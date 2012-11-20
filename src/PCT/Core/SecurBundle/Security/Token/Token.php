<?php

namespace PCT\Core\SecurBundle\Security\Token;

use Mopa\Bundle\WSSEAuthenticationBundle\Security\Authentication\Token\WsseToken;

/**
 * Wsse Token class
 *
 */
class Token extends WsseToken
{

    /**
     * Wsse String Token
     * @var type
     */
    private $usernameToken;

    /**
     * Get the usernameToken
     *
     * @return string
     */
    public function getUsernameToken()
    {
        $this->usernameToken = $this->createUsernameToken();

        return $this->usernameToken;
    }

    /**
     * Create a Wsse UsernameToken
     *
     * @return string
     */
    private function createUsernameToken()
    {
        $nonceHigh = base64_encode($this->nonce);

        return "UsernameToken Username=\"{$this->getUsername()}\"," .
            " PasswordDigest=\"{$this->digest}\"," .
            " Nonce=\"{$nonceHigh}\"," .
            " Created=\"{$this->created}\"";
        
    }
}
