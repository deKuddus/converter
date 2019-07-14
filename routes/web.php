<?php

/*Route::get('/md5converter',function(){
	

})->name('md5converter');*/

Route::get('/', function () {
    return view('md5');
});
Route::get('/md5generator','ContverterController@md5generator');

Route::get('/bcrypt-generatro-form', function () {
    return view('bcrypt');
});
Route::get('/bcrypt-generatro','ContverterController@bcryptGenertor');

Route::get('/remove-character-from-string', function () {
    return view('remove-character');
});
Route::get('/remove-word','ContverterController@removeCharacterFromString');

Route::get('/wordpress-password',function(){
	return view('wp-password-generator');
});

Route::get('/gnerate-wordpress-password','ContverterController@generateWordpressPassword');


// text case convertion route

Route::get('/text-case-conversion',function(){
	return view('text-case-change');
});

Route::get('/upper-case-conversion','ContverterController@upperCaseConversion');
Route::get('/lower-case-conversion','ContverterController@lowerCaseConversion');
Route::get('/sentance-case-conversion','ContverterController@sentanceCaseConversion');
Route::get('/capitalizes-case-conversion','ContverterController@capitalizedCaseConversion');

//text replace route

Route::get('/text-replace',function(){
	return view('text-replace');
});
Route::get('/text-find-and-replace','ContverterController@textFindAndReplace');

//remove space from text route

Route::get('/remove-space',function (){
	return view('remove-space');
});
Route::get('/remove-all-space-from-string','ContverterController@removeAllSpace');
Route::get('/remove-all-extra-space-from-string','ContverterController@removeAllExtraSpace');

//base 64 encode and decode

Route::get('/base64-decode',function(){
	return view('base64-decode');
});

Route::get('/base64-decode-decode','ContverterController@base64Decode');

Route::get('/base64-encode',function(){
	return view('base64-encode');
});

Route::get('/base64-encode-encode','ContverterController@base64encode');


//find my ip
Route::get('/find-ip',function(){
	return view('my-ip');
});
Route::get('/find-my-ip','ContverterController@findMyIp');

//http header

Route::get('/http-header',function (){
	return view('http-header');
});

Route::get('/get-http-header','ContverterController@getHttpHeader');

//domain who is

Route::get('/domain-whois',function (){
	return view('domain-whois');
});

Route::get('/get-doamain-whois','ContverterController@domainWhoIs');

//age calculator route

Route::get('/age-calculator', function(){
	return view('age-calculator');
});

Route::get('/calculate-age','ContverterController@calculateAge');

// qr code generator route

Route::get('/qrcode',function(){
	return view('qr-codegenerator');
});

Route::get('/get-qrcode','ContverterController@makeQrcode');

//image to base 64

Route::get('/image-base64',function(){
	return view('image-to-base64');
});

Route::get('/image-base64-endecode','ContverterController@imageToBase64');