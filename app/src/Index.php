<?php

use SilverStripe\FullTextSearch\Solr\SolrIndex;

class Index extends SolrIndex
{
    public function init()
    {
        $this->addClass(Page::class);
        $this->addFulltextField('Title');
    }
}
