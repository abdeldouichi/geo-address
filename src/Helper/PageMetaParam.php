<?php
/**
 * Created by PhpStorm.
 * User: abdeldouichi
 * Date: 01/10/18
 * Time: 09:42
 */

namespace App\Helper;


class PageMetaParam
{

    /** type string
     * @var
     */
    private $title;
    /** type string
     * @var
     */
    private $description;
    /** type string
     * @var
     */
    private $image_page;
    /** type string
     * @var
     */
    private $twitter_acount;
    /** type string
     * @var
     */
    private $uri;
    /** type boolean
     * @var
     */
    private $is_paginator;
    /**type boolean
     * @var
     */
    private $url_prev;
    /** type string
     * @var
     */
    private $url_next;
    /** type boolean
     * @var
     */
    private $is_canonical;
    /** type boolean
     * @var
     */
    private $is_noindex;
    /** type string
     * @var
     */
    private $schema_script;
    /** type string
     * @var
     */
    private $tracker_script;
    /** type boolean
     * @var
     */
    private $is_amp;

    /**
     * PageMetaParam constructor.
     */
    public function __construct()
    {
        $this->title = '';
        $this->description = '';
        $this->image_page = '';
        $this->twitter_acount = '';
        $this->uri = '';
        $this->is_paginator = false;
        $this->url_prev = '';
        $this->url_next = '';
        $this->is_canonical = false;
        $this->is_noindex = false;
        $this->schema_script = '';
        $this->is_amp = false;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getImagePage()
    {
        return $this->image_page;
    }

    /**
     * @param mixed $image_page
     */
    public function setImagePage($image_page): void
    {
        $this->image_page = $image_page;
    }

    /**
     * @return mixed
     */
    public function getTwitterAcount()
    {
        return $this->twitter_acount;
    }

    /**
     * @param mixed $twitter_acount
     */
    public function setTwitterAcount($twitter_acount): void
    {
        $this->twitter_acount = $twitter_acount;
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param mixed $uri
     */
    public function setUri($uri): void
    {
        $this->uri = $uri;
    }

    /**
     * @return mixed
     */
    public function getIsPaginator()
    {
        return $this->is_paginator;
    }

    /**
     * @param mixed $is_paginator
     */
    public function setIsPaginator($is_paginator): void
    {
        $this->is_paginator = $is_paginator;
    }

    /**
     * @return mixed
     */
    public function getUrlPrev()
    {
        return $this->url_prev;
    }

    /**
     * @param mixed $url_prev
     */
    public function setUrlPrev($url_prev): void
    {
        $this->url_prev = $url_prev;
    }

    /**
     * @return mixed
     */
    public function getUrlNext()
    {
        return $this->url_next;
    }

    /**
     * @param mixed $url_next
     */
    public function setUrlNext($url_next): void
    {
        $this->url_next = $url_next;
    }

    /**
     * @return mixed
     */
    public function getIsCanonical()
    {
        return $this->is_canonical;
    }

    /**
     * @param mixed $is_canonical
     */
    public function setIsCanonical($is_canonical): void
    {
        $this->is_canonical = $is_canonical;
    }

    /**
     * @return mixed
     */
    public function getIsNoindex()
    {
        return $this->is_noindex;
    }

    /**
     * @param mixed $is_nointex
     */
    public function setIsNoindex($is_nointex): void
    {
        $this->is_noindex = $is_nointex;
    }

    /**
     * @return mixed
     */
    public function getSchemaScript()
    {
        return $this->schema_script;
    }

    /**
     * @param mixed $schema_script
     */
    public function setSchemaScript($schema_script):void
    {
            $this->schema_script = $schema_script;
    }

    /**
     * @return mixed
     */
    public function getIsAmp()
    {
        return $this->is_amp;
    }

    /**
     * @param mixed $is_amp
     */
    public function setIsAmp($is_amp): void
    {
        $this->is_amp = $is_amp;
    }

    /**
     * @return mixed
     */
    public function getTrackerScript()
    {
        return $this->tracker_script;
    }

    /**
     * @param mixed $tracker_script
     */
    public function setTrackerScript($tracker_script): void
    {
        $this->tracker_script = $tracker_script;
    }

}