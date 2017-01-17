![Notify](https://s3.amazonaws.com/s3.codecourse.com/github/banners/notify.png)

## Install

Using Composer

```
composer require codecourse/notify
```

Add the service provider to `config/app.php`

```php
Codecourse\Notify\NotifyServiceProvider::class,
```

Optionally include the Facade in `config/app.php` if you'd like.

```php
'Notify' => Codecourse\Notify\Facades\Notify::class,
```

> Note, there is a notify() function available, so unless you really want to use the Facade, there's no need to include it.

## Usage

### Basic

From your application, call the `flash` method with a message and type.

```php
notify()->flash('Welcome back!', 'success');
```

Within a view, you can now check if a flash message exists and output it.

```php
@if (notify()->ready())
    <div class="alert-box {{ notify()->type() }}">
        {{ notify()->message() }}
    </div>
@endif
```
> Notify is front-end framework agnostic, so you're free to easily implement the output however you choose.

### Options

You can pass additional options to the `flash` method, which are then easily accessible within your view.

```php
notify()->flash('Welcome back!', 'success', [
    'timer' => 3000,
    'text' => 'It\'s really great to see you again',
]);
```

Then, in your view.

```javascript
@if (notify()->ready())
    <script>
        swal({
            title: "{!! notify()->message() !!}",
            text: "{!! notify()->option('text') !!}",
            type: "{{ notify()->type() }}",
            @if (notify()->option('timer'))
                timer: {{ notify()->option('timer') }},
                showConfirmButton: false
            @endif
        });
    </script>
@endif
```

![SweetAlert example](https://s3.amazonaws.com/s3.codecourse.com/github/notify/swal-example.png)

> The above example uses SweetAlert, but the flexibily of Notify means you can easily use it with any JavaScript alert solution.

## Issues and contribution

Just submit an issue or pull request through GitHub. Thanks!
