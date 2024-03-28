<?php

namespace Passionweb\ExtendingExtbaseModel\Domain\Model;

use GeorgRinger\News\Domain\Model\FileReference;
use GeorgRinger\News\Domain\Model\News as GeorgRingerNews;

class News extends GeorgRingerNews
{
    protected FileReference $authorImage;

    public function getAuthorImage(): FileReference
    {
        return $this->authorImage;
    }
    public function setAuthorImage(FileReference $authorImage): void
    {
        $this->authorImage = $authorImage;
    }
}
