Tgniter
=======

Tgniter is an opinionated MVC framework that we use at TravelGround, developed to fit into an existing ecosystem.

Tgniter, for now, provides [M]VC functionality ([M] for now as models have not been developed at this stage). Controllers and Views work perfectly well.

### Where can I find my stuff?

Config file:
```tgniter/application/core/config.php```

Where do I put my controllers:
```tgniter/application/controllers/```

Note: Controllers must inherit from the base controller found in ```core```

Where do I put my views:
```tgniter/application/views/```

### Requirements

- Nginx (or Apache with the correct rewrites)
- PHP

### Installation

Add ```127.0.0.1 tgniter``` to your /etc/hosts file.

Then edit your nginx.conf file (```/usr/local/etc/nginx/nginx.conf``` on OSX) to include the following:

	server {
		listen       80;
		server_name  tgniter;

		root /Users/jono/Sites/tgniter/src;
		index index.php index.html;

		location / {
		    autoindex on;

		    try_files $uri $uri/ /index.php?id=$uri&args=$args;
		}

		location ~ \.php$ {
		    fastcgi_pass   127.0.0.1:9000;
		    fastcgi_index  index.php;
		    fastcgi_param  SCRIPT_FILENAME  /scripts$fastcgi_script_name;
		    include        fastcgi_params;
		}
	}

That should be it

### Notes

- The default controller is 'home', which is found in ```tgniter/application/controllers/home```. Change or delete at will, but make sure you also update the config file, otherwise your requests will always filter back to the main controller!

- The default 404 page is found at ```tgniter/application/views/404.php```. Change, don't change, you decide.. Try give it a cool parallax effect like at [github.com](http://github.com/404)