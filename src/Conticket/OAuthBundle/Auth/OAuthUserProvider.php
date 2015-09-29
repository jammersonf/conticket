<?php

namespace Conticket\OAuthBundle\Auth;

use HWI\Bundle\OAuthBundle\Security\Core\User\EntityUserProvider;
use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use Conticket\ApiBundle\Document\User;

class OAuthUserProvider extends EntityUserProvider
{
    protected $session;
    protected $doctrine;

    public function __construct($session, $doctrine)
    {
        $this->session = $session;
        $this->doctrine = $doctrine;
    }

    public function loadUserByUsername($username)
    {

    }

    public function loadUserByOAuthUserResponse(UserResponseInterface $response)
    {
        $id = $response->getUsername();
        $email = $response->getEmail();
        $nickname = $response->getNickname();
        $realname = $response->getRealName();
        $avatar = $response->getProfilePicture();
        echo "<img src='$avatar'>";
        echo $email.'-'.$nickname.'-'.$realname;
        exit;
    }

}
