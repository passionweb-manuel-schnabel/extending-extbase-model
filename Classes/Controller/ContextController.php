<?php

namespace Passionweb\ContextApi\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Context\Context;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ContextController extends ActionController
{
    public function __construct(
        protected Context $context
    ) {
    }

    public function listAction(): ResponseInterface {

        $currentTimestamp = $this->context->getPropertyFromAspect('date', 'timestamp');
        $languageOfCurrentPage = $this->context->getPropertyFromAspect('language', 'id');
        $loggedInFeUser = $this->context->getPropertyFromAspect('frontend.user', 'isLoggedIn');
        $backendUserUid = $this->context->getPropertyFromAspect('backend.user', 'id');

        if($backendUserUid !== 0) {
            $backendUsername = $this->context->getPropertyFromAspect('backend.user', 'username');
            $this->view->assign('backendUsername', $backendUsername);
        }

        $this->view->assign('currentTimestamp', $currentTimestamp);
        $this->view->assign('languageOfCurrentPage', $languageOfCurrentPage);
        $this->view->assign('loggedInFeUser', $loggedInFeUser);
        $this->view->assign('backendUserUid', $backendUserUid);

        return $this->htmlResponse();
    }
}
