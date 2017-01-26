<?php
/**
 * Created by PhpStorm.
 * User: wohlers
 * Date: 25.01.17
 * Time: 21:15
 */

namespace de\chilan\WebsiteBundle\Menu;


use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class MenuBuilder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    /**
     * Generate the menu for the website
     * @param FactoryInterface $factory
     * @param array $options
     * @return \Knp\Menu\ItemInterface
     */
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');
        $em = $this->container->get('doctrine')->getManager();

        $menu->addChild('News', ['route' => '_news_index'])->setAttribute('icon', 'glyphicon glyphicon-home');
        $menu->addChild('Gallery', [])->setAttribute('dropdown', true)->setAttribute('icon', 'glyphicon glyphicon-camera');
        $menu['Gallery']->addChild('Overview', ['route' => '_gallery_index']);
        $menu['Gallery']->addChild('Reviews', ['route' => '_gallery_toplist']);
        $menu->addChild('Projects', ['uri' => '#'])->setAttribute('dropdown', true)->setAttribute('icon', 'glyphicon glyphicon-piggy-bank');
        $menu['Projects']->addChild('Java Projects', ['uri' => '#']);
        $menu['Projects']->addChild('PHP Projects', ['uri' => '#']);
        $menu['Projects']->addChild('C++ Projects', ['uri' => '#']);


        #$menu->addChild('Legal notice', ['route' => 'mainpage']);

        return $menu;
    }

    public function userMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav navbar-right');

        $menu->addChild('Contact', ['uri' => 'mailto:webmaster@chilan.de'])->setAttribute('icon', 'glyphicon glyphicon-envelope');
        $menu->addChild('Login', ['route' => '_login'])->setAttribute('icon', 'glyphicon glyphicon-log-in');
        /*
        You probably want to show user specific information such as the username here. That's possible! Use any of the below methods to do this.
        if($this->container->get('security.context')->isGranted(array('ROLE_ADMIN', 'ROLE_USER'))) {} // Check if the visitor has any authenticated roles
        $username = $this->container->get('security.context')->getToken()->getUser()->getUsername(); // Get username of the current logged in user
        */
//        $menu->addChild('User', array('label' => 'Hi visitor'))
//            ->setAttribute('dropdown', true)
//            ->setAttribute('icon', 'fa fa-user');
//        $menu['User']->addChild('Edit profile', array('route' => 'mainpage'))
//            ->setAttribute('icon', 'fa fa-edit');
        return $menu;
    }
}