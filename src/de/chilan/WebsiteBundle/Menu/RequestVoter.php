<?php
namespace de\chilan\WebsiteBundle\Menu;

use Knp\Menu\ItemInterface;
use Knp\Menu\Matcher\Voter\VoterInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Class RequestVoter
 * @package de\chilan\WebsiteBundle\Menu
 * @see https://gist.github.com/nateevans/9958390
 */
class RequestVoter implements VoterInterface
{
    private $container;
    private $request;

    public function __construct(ContainerInterface $container, RequestStack $requestStack)
    {
        $this->request = $requestStack->getCurrentRequest();;
        $this->container = $container;
    }
    public function matchItem(ItemInterface $item)
    {
        if ($item->getUri() === $this->request->getRequestUri()) {
            // URL's completely match
            return true;
        } else if($item->getUri() !== $this->request->getBaseUrl().'/' && (substr($this->request->getRequestUri(), 0, strlen($item->getUri())) === $item->getUri())) {
            // URL isn't just "/" and the first part of the URL match
            return true;
        }
        return null;
    }
}