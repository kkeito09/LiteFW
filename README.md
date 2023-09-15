# convenient-functions


## nginxの設定(未確認)
server {
    # ... 他の設定 ...

    location / {
        try_files $uri $uri/ @rewrite;
    }

    location @rewrite {
        rewrite ^/(.*)$ /index.php/$1 last;
    }

    location ~ ^/(webroot|resource)/ {
        try_files $uri $uri/ =404;
    }

    location ~ \.php$ {
        # PHPの処理設定、例えば：
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_index index.php;
        include fastcgi_params;
    }

    # ... 他の設定 ...
}

##apacheの設定
# convenient-functions(未確認)
AllowOverride All
Require all granted