first fall install laravel
- composer create-project --prefer-dist laravel/laravel blog

// install passport system
composer require laravel/passport

// set username and password .env file 

//after that check character in mysql
config/database.php file 
FROM ->

'charset' => 'utf8mb4',

'collation' => 'utf8mb4_unicode_ci',

TO ->

'charset' => 'utf8',

'collation' => 'utf8_unicode_ci',

 //agar esse ho jaye to thik
 //app service provider me 

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


public function boot()
{
    Schema::defaultStringLength(191);
}

// next command
php artisan passport:install


//php artisan vendor:publish --tag=passport-views 
	or 

// php artisan passport:client --password


url :- http://localhost/passport/oauth/token
Method :- Post
Parameter :- 
	grant_type:password
	client_id:3
	client_secret:w89LOHebiIeWmknToOopSUMSbUYKK7DpbjEgY3U7
	username:dks@gmail.com
	password:123456

Reponse :-

{
    "token_type": "Bearer",
    "expires_in": 31536000,
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjYxZGVmMjlmZDFhY2E4MDI5ODg3MmZkM2FkZWMxYTc2NzAxMTVjMDc5Y2VkMWI5MTRjMDliNTQ1MDUzZDEwYzQ2MTM2ZGZhMDZlYTZkMjljIn0.eyJhdWQiOiIzIiwianRpIjoiNjFkZWYyOWZkMWFjYTgwMjk4ODcyZmQzYWRlYzFhNzY3MDExNWMwNzljZWQxYjkxNGMwOWI1NDUwNTNkMTBjNDYxMzZkZmEwNmVhNmQyOWMiLCJpYXQiOjE1NDI0NjAyOTgsIm5iZiI6MTU0MjQ2MDI5OCwiZXhwIjoxNTczOTk2Mjk4LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.lKsR3mBe04osQ7ci9MGYj_P7meQm7G6PdzQ8tV8c1yguZdpfBmLZ26KX2Tg0UD5Y9_0Mfg9O0OjJ2I0eAWJI2HEIY4iczkVvhDdNYzsF282g5Ee4Z8P8qxNHtGnI-lzBu9L8chwmglh-XUOWxCRKsJshlpGW_yugKCYYPrtvRrqHGFHx7xQH5P3DkjfIURmpzIKySDGTkcs27VXD-DaV4AWW41yM1Kt-DEExEBX0QAGEfaIdTRMb_wrw5sUMcDkooYYbId0r7LHxlulnq8x2Qs1HtB-QrYFKaTyyYSp6sg01lwNz3SHL91DkB4NlJdJ7WQR7XwbzXUjJVU1ZWWfleV4qyisiajqahrHAAUUJe4-rvwHnACFZudNBC8Z4ybrmqQtR2NMXvl8PLuQzGCf3w1RxMBKcUViegByMh0UblGiy_W_VMf65QdFgfnfUrNh4x0ptO3ZKRur4_wyN366ay5V9qwii-V_8Vw_v0tGXgqNyBTbzm0Hz-r4jESfAS8VA6vu4vlt8S5cx463WCD_tZMBCwN6RgBV-7rl0m7ht6EqufjPuRFolgfuRQoOxfdxivcozZ-hv_KaaOdEyPN8_IGM0xgmbj3uFe3_j1heo54pehQBh_LMhhp2bPpxbhgbvBxkUQUMQeThlSMphYd6eQZy7yATxEPVH2UETCTKANRo",
    "refresh_token": "def50200cdefdecadf0edf6a80f5fec655d1ed853a2a23122a9a51626024757f73966649148fb5ef42935a3da7c37de5a51f26b84cb20dc3f56eeb2f101593077f85a0ae9ac508353e06051f26a955297e97cfeede85696397f2f9910c551a7263e371962829cb0d5ff977ee36d030ac829f7ffed12779b3bb36357d8e197f7c1d58edbeb33cfd52f7067884636df81bffed54e5115538e080d158ad0d6844b295010f12142d83c666093e5ffc73a49ebf02b4d15d130e720871d8ff03fb041df93138f50474aa8b9841dd19429004c3a68823d8189bb21af60cf6a81268b69c8c0a5beb91b2428872cc23dacee8a5fb1f8a766287f6f6b5c31eaf5fbb15c6b75e76443b8ef198bc9714bc19772650619745b3572fcaf00c5ef414aa14bc1dc18bac2fe4c0052f7645c44634b5e8632a9da41812cb85be4e5deefb91384e0db2b00eb69415143768824aa9018c57381722ab7af24ed70c5452a564a4fa4c23c447"
}


url :- http://localhost/passport/api/user
Method :- get
Parameter :-
header menu:-

Accept:application/json
Authorization:Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjYxZGVmMjlmZDFhY2E4MDI5ODg3MmZkM2FkZWMxYTc2NzAxMTVjMDc5Y2VkMWI5MTRjMDliNTQ1MDUzZDEwYzQ2MTM2ZGZhMDZlYTZkMjljIn0.eyJhdWQiOiIzIiwianRpIjoiNjFkZWYyOWZkMWFjYTgwMjk4ODcyZmQzYWRlYzFhNzY3MDExNWMwNzljZWQxYjkxNGMwOWI1NDUwNTNkMTBjNDYxMzZkZmEwNmVhNmQyOWMiLCJpYXQiOjE1NDI0NjAyOTgsIm5iZiI6MTU0MjQ2MDI5OCwiZXhwIjoxNTczOTk2Mjk4LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.lKsR3mBe04osQ7ci9MGYj_P7meQm7G6PdzQ8tV8c1yguZdpfBmLZ26KX2Tg0UD5Y9_0Mfg9O0OjJ2I0eAWJI2HEIY4iczkVvhDdNYzsF282g5Ee4Z8P8qxNHtGnI-lzBu9L8chwmglh-XUOWxCRKsJshlpGW_yugKCYYPrtvRrqHGFHx7xQH5P3DkjfIURmpzIKySDGTkcs27VXD-DaV4AWW41yM1Kt-DEExEBX0QAGEfaIdTRMb_wrw5sUMcDkooYYbId0r7LHxlulnq8x2Qs1HtB-QrYFKaTyyYSp6sg01lwNz3SHL91DkB4NlJdJ7WQR7XwbzXUjJVU1ZWWfleV4qyisiajqahrHAAUUJe4-rvwHnACFZudNBC8Z4ybrmqQtR2NMXvl8PLuQzGCf3w1RxMBKcUViegByMh0UblGiy_W_VMf65QdFgfnfUrNh4x0ptO3ZKRur4_wyN366ay5V9qwii-V_8Vw_v0tGXgqNyBTbzm0Hz-r4jESfAS8VA6vu4vlt8S5cx463WCD_tZMBCwN6RgBV-7rl0m7ht6EqufjPuRFolgfuRQoOxfdxivcozZ-hv_KaaOdEyPN8_IGM0xgmbj3uFe3_j1heo54pehQBh_LMhhp2bPpxbhgbvBxkUQUMQeThlSMphYd6eQZy7yATxEPVH2UETCTKANRo

response:- 
{
    "id": 1,
    "name": "dks",
    "email": "dks@gmail.com",
    "email_verified_at": "2018-11-15 00:00:00",
    "created_at": "2018-11-16 06:12:00",
    "updated_at": "2018-11-16 06:12:00"
}
