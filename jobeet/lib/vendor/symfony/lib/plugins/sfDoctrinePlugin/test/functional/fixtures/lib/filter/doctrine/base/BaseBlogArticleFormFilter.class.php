<?php

/**
 * BlogArticle filter form base class.
 *
 * @package    symfony12
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBlogArticleFormFilter extends ArticleFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('blog_article_filters[%s]');
  }

  public function getModelName()
  {
    return 'BlogArticle';
  }
}
