<?php
/**
 * This file is part of the PrestaGoogleAnalyticsDashboardBundle
 *
 * (c) PrestaConcept <http://www.prestaconcept.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Presta\GoogleAnalyticsDashboardBundle\Controller\Admin;

use Sonata\AdminBundle\Admin\AdminInterface;
use Presta\GoogleAnalyticsDashboardBundle\Controller\Admin\BaseController as AdminController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @author Nicolas Bastien <nbastien@prestaconcept.net>
 */
class DefaultController extends AdminController
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        $viewParams = array(
            'today_visit' => 'todo',
            'today_page_view' => 'todo',
            'today_page_per_visit' => 'todo',
            'today_avg_time_on_site' => 'todo',
            'yesterday_visit' => 'todo',
            'yesterday_page_view' => 'todo',
            'yesterday_page_per_visit' => 'todo',
            'yesterday_avg_time_on_site' => 'todo',
        );

        return $this->renderResponse('PrestaGoogleAnalyticsDashboardBundle:Admin/Default:index.html.twig', $viewParams);
    }
}
