# Uçak Bileti Sorgulama Kodları

Bu repository, uçak bileti fiyatını sorgulamak için PHP ve Python dillerinde yazılmış kodları içermektedir.

## Gereksinimler

- PHP 5.6 veya üstü (PHP için)
- Python 3.6 veya üstü (Python için)
- PHP cURL eklentisi (PHP için)
- requests kütüphanesi (Python için)
- THY tarafından verilen API anahtarı

## Kurulum

## Python için:

- pip install requests


## PHP için:

- php -m | grep curl


Bu komut, cURL eklentinin kurulu olup olmadığını kontrol eder. Kurulu değilse, sunucunuza eklentiyi yüklemelisiniz.

## Kullanım

## PHP için:

- php sorgu.php


## Python için:

- python sorgu.py


Kodlar çalıştırıldığında, API endpoint'ine istek yapılır ve bilet fiyatı sorgulanır.

## Yapımcı

- Emre Karademir
- Web Sitesi: https://emrekarademir.com/
- E-posta: social@emrekarademir.com

## Notlar

- API endpoint'i ve parametreleri gerçek bir API sunucusu ve verileri temsil etmez.
- Bu kodlar sadece bir fikir vermek içindir ve direkt olarak kullanılamaz. API endpoint'inin ve istek yapılacak verilerin doğru olduğundan emin olun.
