<?php

namespace PCT\Core\SecurBundle\Security\Auth;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use PCT\Core\UserBundle\Entity\User;
use PCT\Core\SecurBundle\Security\Token\Token as WsseToken;
use Symfony\Component\Security\Core\Authentication\Token\AnonymousToken;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Session\Session;
use FOS\UserBundle\Doctrine\UserManager;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;

/**
 * Class to authorize an user with login
 *
 */
class UserPassAuth
{

    /**
     * Session
     *
     * @var type
     */
    private $session;

    /**
     * Security Context
     *
     * @var type
     */
    private $securityContext;

    /**
     * Username
     *
     * @var type
     */
    private $username;

    /**
     * Password
     *
     * @var type
     */
    private $plainPassword;

    /**
     * User Mananger
     *
     * @var FOSUserManager
     */
    private $userManager;

    /**
     * Token
     *
     * @var Token
     */
    private $token;

    /**
     * User Provider
     *
     * @var type
     */
    private $userProvider;

    /**
     * Encoder Service
     *
     * @var EncoderFactory
     */
    private $encoderService;

    /**
     * Construct
     *
     * @param SecurityContext $securityContext
     * @param Session         $session
     * @param UserManager     $userManager
     */
    public function __construct(
        SecurityContext $securityContext,
        Session $session,
        UserManager $userManager,
        $userProvider,
        EncoderFactory $encoderService
    ) {
        $this->securityContext = $securityContext;
        $this->session = $session;
        $this->userManager = $userManager;
        $this->userProvider = $userProvider;
        $this->encoderService = $encoderService;
    }

    /**
     * Authorize function
     *
     * @return token
     */
    public function authorize()
    {
        $user = $this->getUser();
        $this->createToken($user);

        return $this->token;
    }

    /**
     * Logout
     */
    public function logout()
    {
        $token = new AnonymousToken(null, new User());
        $token->setAuthenticated(false);
        $this->securityContext->setToken($token);
        $this->session->invalidate();
    }

    /**
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Set password
     *
     * @param string $plainPassword
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }

    /**
     * Create a new Token
     *
     * @param User $user
     */
    private function createToken(User $user)
    {
        $this->checkPlainPassword();
        $secret = $user->getPassword();
        $token = new WsseToken();
        $token->nonce = substr(md5(uniqid('nonce_', true)), 0, 16);
        $token->created = date('c');
        $token->digest = base64_encode(sha1($token->nonce . $token->created . $secret, true));
        $token->setUser($user);
        $this->token = $token;
    }

    /**
     * Get the user by username
     *
     * @throws AccessDeniedException
     * @return User
     */
    private function getUser()
    {
        $user = $this->userManager->findUserByUsernameOrEmail($this->username);
        if (!$user instanceof User) {
            throw new AccessDeniedException("Wrong user");
        }

        return $user;
    }

    /**
     * Check the password
     *
     * @throws AccessDeniedException
     */
    private function checkPlainPassword()
    {
        $user = $this->getUser($this->username);
        $encoder = $this->encoderService->getEncoder($user);
        $encodedPass = $encoder->encodePassword($this->plainPassword, $user->getSalt());
        if ($encodedPass !== $user->getPassword()) {
            throw new AccessDeniedException("Wrong password encoding");
        }

    }
}
