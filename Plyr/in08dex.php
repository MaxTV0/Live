<?php
$secret = 'mohamed202011+@09';
$filePath = 'https://hlsafcon.flashframenetwork.com/upfiles/source/hls/132/317739/manifest/0.m3u8?token=NUxGaU1naDMvWmJxWEVhNHVMa29paWtwYjA1UE1YUWh3bjFJdmZndTc4VT06VXBGaWxlcy9pbXBvcnRhbnQvMTMyLzIwMjYvNi8yMi8zMTc3MzkvMC5tM3U4OiUyRiUyRmhsc2FmY29uLmZsYXNoZnJhbWVuZXR3b3JrLmNvbSUyRjo2MzkxNzY5OTM5NTc3OTMyNTc=&keypair=ZUEzV09rUUJCV2xtZGJVQ3pjQVNaNXkydUJTMWFrUmVxbGFoSEYzZGs3QT06VXBGaWxlcy9pbXBvcnRhbnQvMTMyLzIwMjYvNi8yMi8zMTc3MzkvOiUyRiUyRmhsc2FmY29uLmZsYXNoZnJhbWVuZXR3b3JrLmNvbSUyRjo2MzkxNzY5OTM5NTc3OTMyNTc=';
$expires = time() + 3600; // صالح لمدة ساعة

// إنشاء الهاش
$hash = hash_hmac('sha256', $filePath . $expires, $secret, true); // raw binary
$signature = base64_encode($hash); // للجزء الأول

// تكوين التوكن
$token = $signature . ':' . $filePath . ':' . $expires;

// تشفير التوكن بالكامل بـ Base64 (اختياري)
$encodedToken = base64_encode($token);
?>
