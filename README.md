# Laravel11のバックエンドAPIのサンプル  
Laravel11を利用したバックエンドAPIのサンプルです。  

## 使用技術  
Laravel         "11.7.0"  
PHP             "8.3.7"  
phpunit/phpunit "10.5.17"  
pestphp/pest-plugin-laravel "2.4.0"  
Docker  
docker-compose  

## APIの開発環境構築  
①環境変数ファイル「.env」を配置  
  
<br/>
  
②ビルド  
```  
$ docker compose build --no-cache
```  

<br/>

③コンテナ起動  
```  
$ docker compose up -d
```  

<br/>

④依存関係をインストール  
```
$ docker compose exec api composer install
```  

<br/>

⑤testの実行  
```
$ docker compose exec api php artisan test
```   
  
## 参考記事  
[・Laravel11の変更点を踏まえてバックエンドAPIを開発する方法まとめ](https://tomoyuki65.com/how-to-develop-api-with-laravel11)  
  