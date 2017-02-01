# PhpGmaps
This repo aims to keep appitventures/phpgmaps alive, hopefully filling in temporarily until they make their repo
available again, or else continuing its maintenance going forward and keeping it working with future versions of
Laravel.

Currently only Laravel 5.* is supported.

## Installation Changes
Add the repo to composer.json under this new namespace:
```
  "require": {
      "genealabs/phpgmaps": "~0.3.0"
  }
```

Then add the service provider entry to `config/app.php`:
```php
        'GeneaLabs\Phpgmaps\PhpgmapsServiceProvider',
```

And the Facade in the alias section (further down in `config/app.php`):
```php
        'Gmaps' => 'GeneaLabs\Phpgmaps\Facades\PhpgmapsFacade',
```

#Original README
## Phpgmaps
A none CI implementation of BIOINSTALL's [CodeIgniter library](http://github.com/BIOSTALL/CodeIgniter-Google-Maps-V3-API-Library).

---
I found this library to be incredibly useful when I was working in CodeIgniter. However a little bit of work needed to be done to use it in a Laravel project. I can't take any of the credit for the actual "heavy lifting" going on in the class.
---

### Example
The following code will prompt the user for access to their geolocation and then creates a map centered on their lat/lng

    Route::get('/', function(){
        $config = array();
        $config['center'] = 'auto';
        $config['onboundschanged'] = 'if (!centreGot) {
                var mapCentre = map.getCenter();
                marker_0.setOptions({
                    position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
                });
            }
            centreGot = true;';

        Gmaps::initialize($config);

        // set up the marker ready for positioning
        // once we know the users location
        $marker = array();
        Gmaps::add_marker($marker);

        $map = Gmaps::create_map();
        echo "<html><head><script type="text/javascript">var centreGot = false;</script>".$map['js']."</head><body>".$map['html']."</body></html>";
    });

### More Examples
BIOINSTALL has a great website showing how to do all the things with the class. No reason to reinvent the wheel, so [here](http://biostall.com/demos/google-maps-v3-api-codeigniter-library/) it is. The only thing to note is that `$this->googlemaps` is now `Gmaps::`.
