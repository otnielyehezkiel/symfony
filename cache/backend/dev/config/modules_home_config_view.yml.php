<?php
// auto-generated by sfViewConfigHandler
// date: 2016/02/26 03:59:12
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Symfony - Training', false, false);

  $response->addStylesheet('bootstrap.min.css', '', array ());
  $response->addStylesheet('logo-nav.css', '', array ());
  $response->addJavascript('jquery.js', '', array ());
  $response->addJavascript('bootstrap.min.js', '', array ());

