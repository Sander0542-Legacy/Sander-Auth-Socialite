# Sander Auth Socialite
Sander Auth provider for Laravel Socialite

---

### Usage

```PHP
Socialite::with('sander-auth')->redirect();
```

## Development

### Requirements

- **PHP 7.2** or higher
- **Laravel 6.0** or higher

### Installation

1. Add this repository to composer.json
```PHP
"repositories": [
  {
    "type": "vcs",
    "url":  "git@github.com:sander0542/sanderauthsocialite.git"
  }
]
```
2. Add the repository to composer: `composer require sander0542/sanderauthsocialite`
3. Add the `SocialiteWasCalled` to `app/Providers/EventServiceProvider.php`
```PHP
protected $listen = [
  // a whole bunch of listeners
  \SocialiteProviders\Manager\SocialiteWasCalled::class => [
    // add your listeners (aka providers) here
    'SocialiteProviders\\Kodular\\SanderAuthExtendSocialite@handle',
  ],
];
```
4. Add the Sander Auth settings to `config/services.php`
```PHP
'sander-auth' => [
  'client_id' => env('SANDER_AUTH_CLIENT_ID'),
  'client_secret' => env('SANDER_AUTH_CLIENT_SECRET'),
  'redirect' => env('SANDER_AUTH_REDIRECT_URI'),
],
```
