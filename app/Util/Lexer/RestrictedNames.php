<?php

namespace App\Util\Lexer;

class RestrictedNames
{
    public static $blacklist = [
     'about',
     'abuse',
     'administrator',
     'app',
     'autoconfig',
     'blog',
     'broadcasthost',
     'contact',
     'contact-us',
     'contact_us',
     'copyright',
     'download',
     'domainadmin',
     'domainadministrator',
     'email',
     'errors',
     'events',
     'example',
     'faq',
     'faqs',
     'features',
     'ftp',
     'guest',
     'guests',
     'hostmaster',
     'hostmaster',
     'imap',
     'info',
     'info',
     'is',
     'isatap',
     'it',
     'localdomain',
     'localhost',
     'mail',
     'mailer-daemon',
     'mailerdaemon',
     'marketing',
     'me',
     'mis',
     'mx',
     'no-reply',
     'nobody',
     'noc',
     'noreply',
     'ns0',
     'ns1',
     'ns2',
     'ns3',
     'ns4',
     'ns5',
     'ns6',
     'ns7',
     'ns8',
     'ns9',
     'owner',
     'pop',
     'pop3',
     'postmaster',
     'pricing',
     'root',
     'sales',
     'security',
     'signin',
     'signout',
     'smtp',
     'src',
     'ssladmin',
     'ssladministrator',
     'sslwebmaster',
     'sys',
     'sysadmin',
     'system',
     'tutorial',
     'tutorials',
     'usenet',
     'uucp',
     'webmaster',
     'wpad',
   ];

    public static $reserved = [
     // Reserved for instance admin
     'admin',
     'administrator',

     // Static Assets
     'assets',
     'storage',

     // Laravel Horizon
     'horizon',

     // Reserved routes
     'a',
     'account',
     'api',
     'audio',
     'auth',
     'b',
     'bartender',
     'broadcast',
     'broadcaster',
     'booth',
     'bouncer',
     'c',
     'css',
     'circle',
     'circles',
     'checkpoint',
     'community',
     'communities',
     'collection',
     'collections',
     'costar',
     'costars',
     'cdn',
     'd',
     'dashboard',
     'deck',
     'dev',
     'developer',
     'developers',
     'discover',
     'discovers',
     'dj',
     'doc',
     'docs',
     'docs',
     'drive',
     'driver',
     'error',
     'explore',
     'feed',
     'font',
     'fonts',
     'g',
     'gdpr',
     'group',
     'groups',
     'home',
     'help',
     'helpcenter',
     'help-center',
     'help_center',
     'help_center_',
     'help-center-',
     'help-center_',
     'help_center-',
     'i',
     'img',
     'imgs',
     'image',
     'images',
     'invite',
     'invites',
     'js',
     'lab',
     'labs',
     'legal',
     'live',
     'login',
     'logout',
     'm',
     'media',
     'menu',
     'music',
     'n',
     'news',
     'new',
     'news',
     'news',
     'newsfeed',
     'oauth',
     'official',
     'p',
     'page',
     'pages',
     'photo',
     'photos',
     'password',
     'privacy',
     'reset',
     'report',
     'results',
     'reports',
     'robot',
     'robots',
     'search',
     'send',
     'settings',
     'status',
     'statuses',
     'site',
     'sites',
     'stage',
     'static',
     'story',
     'stories',
     'support',
     'svg',
     'svgs',
     'terms',
     'telescope',
     'timeline',
     'timelines',
     'tour',
     'user',
     'users',
     'username',
     'usernames',
     'v',
     'video',
     'videos',
     'vendor',
     'waiter',
     'wall',
     'whats-new',
     'whatsnew',
     'whatnew',
     'whats-news',
     'ws',
     'wss',
     'www',
     'valet',
     '400',
     '401',
     '403',
     '404',
     '500',
     '503',
     '504',
  ];

    public static function get()
    {
        $reserved = $blacklist = [];

        if (true == config('pixelfed.restricted_names.use_blacklist')) {
            $blacklist = self::$blacklist;
        }

        if (true == config('pixelfed.restricted_names.reserved_routes')) {
            $reserved = self::$reserved;
        }

        return array_merge($blacklist, $reserved);
    }
}
