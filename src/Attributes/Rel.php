<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * Трейт Rel
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Rel
{

    protected mixed $rel = null;

    /**
     * Отношения между ссылаемым и текущим документами.
     * @param string $rel
     * @return self
     */
    public function rel(string $rel): self
    {
        $this->rel = match ($rel) {
            'pronunciation' => 'pronunciation',
            'pronunciation' => 'pronunciation',
            'accessibility' => 'accessibility',
            'acquaintance' => 'acquaintance',
            'admin' => 'admin',
            'ajax' => 'ajax',
            'alternate' => 'alternate',
            'answer' => 'answer',
            'application-manifest' => 'application-manifest',
            'archives' => 'archives',
            'author' => 'author',
            'bookmark' => 'bookmark',
            'canonical' => 'canonical',
            'canonical-domain' => 'canonical-domain',
            'canonical-first' => 'canonical-first',
            'canonical-human' => 'canonical-human',
            'canonical-organization' => 'canonical-organization',
            'canonical-wwwnone' => 'canonical-wwwnone',
            'chapter' => 'chapter',
            'child' => 'child',
            'co-resident' => 'co-resident',
            'co-worker' => 'co-worker',
            'colleague' => 'colleague',
            'contact' => 'contact',
            'contributor' => 'contributor',
            'crush' => 'crush',
            'date' => 'date',
            'dns-prefetch' => 'dns-prefetch',
            'edit' => 'edit',
            'edituri' => 'edituri',
            'enclosure' => 'enclosure',
            'enlarged' => 'enlarged',
            'external' => 'external',
            'extension' => 'extension',
            'first' => 'first',
            'friend' => 'friend',
            'gallery' => 'gallery',
            'glossary' => 'glossary',
            'help' => 'help',
            'hub' => 'hub',
            'i18nrules' => 'i18nrules',
            'icon' => 'icon',
            'index' => 'index',
            'jump' => 'jump',
            'kin' => 'kin',
            'lang-alt-[ISO 639-1 code]' => 'lang-alt-[ISO 639-1 code]',
            'lang-orig-[ISO 639-1 code] ' => 'lang-orig-[ISO 639-1 code] ',
            'last' => 'last',
            'latest-version' => 'latest-version',
            'license' => 'license',
            'login' => 'login',
            'logout' => 'logout',
            'longdesc' => 'longdesc',
            'map' => 'map',
            'me' => 'me',
            'met' => 'met',
            'meta' => 'meta',
            'muse' => 'muse',
            'neighbor' => 'neighbor',
            'next' => 'next',
            'next-archive ' => 'next-archive ',
            'nofollow' => 'nofollow',
            'noreferrer' => 'noreferrer',
            'noprefetch' => 'noprefetch',
            'note' => 'note',
            'openid.delegate' => 'openid.delegate',
            'openid.server ' => 'openid.server ',
            'openid2.local_id' => 'openid2.local_id',
            'openid2.provider' => 'openid2.provider',
            'parent' => 'parent',
            'payment' => 'payment',
            'pgpkey' => 'pgpkey',
            'pingback' => 'pingback',
            'prefetch' => 'prefetch',
            'prerender' => 'prerender',
            'presentation' => 'presentation',
            'prev' => 'prev',
            'prev-archive' => 'prev-archive',
            'print' => 'print',
            'profile' => 'profile',
            'question' => 'question',
            'related' => 'related',
            'reply' => 'reply',
            'resource-package' => 'resource-package',
            'resources' => 'resources',
            'reviewer' => 'reviewer',
            'script' => 'script',
            'search' => 'search',
            'self' => 'self',
            'service' => 'service',
            'shortlink' => 'shortlink',
            'sibling' => 'sibling',
            'sidebar' => 'sidebar',
            'spouse' => 'spouse',
            'statechart' => 'statechart',
            'stylesheet' => 'stylesheet',
            'subresource' => 'subresource',
            'sweetheart' => 'sweetheart',
            'tag' => 'tag',
            'technicalauthor' => 'technicalauthor',
            'thread' => 'thread',
            'timesheet' => 'timesheet',
            'topic' => 'topic',
            'translatedfrom' => 'translatedfrom',
            'translator' => 'translator',
            'up' => 'up',
            'us' => 'us',
            'webmaster' => 'webmaster',
            'widget' => 'widget',
            'wlwmanifest' => 'wlwmanifest',
            default => null
        };
        return $this;
    }

}
