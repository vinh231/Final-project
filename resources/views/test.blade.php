<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Administrator</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

<div class="container">
  <div class="col-md-12 col-lg-10 col-lg-offset-1">
    <div class="page-header">
      <a class="pull-right" href="https://github.com/mistic100/Bootstrap-Confirmation">
        <img src="https://assets.github.com/images/icons/emoji/octocat.png" width=48px height=48px>
      </a>
      <h1>Bootstrap Confirmation</h1>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">Basic</div>
      <div class="panel-body">
        <button class="btn btn-default" data-toggle="confirmation">Confirmation</button>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">Link</div>
      <div class="panel-body">
        <a class="btn btn-default" data-toggle="confirmation" href="https://google.com">Go to Google</a>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">Customize</div>
      <div class="panel-body">
        <button class="btn btn-default" data-toggle="confirmation"
                data-btn-ok-label="Continue" data-btn-ok-icon="glyphicon glyphicon-share-alt"
                data-btn-ok-class="btn-success"
                data-btn-cancel-label="Stoooop!" data-btn-cancel-icon="glyphicon glyphicon-ban-circle"
                data-btn-cancel-class="btn-danger"
                data-title="Is it ok?" data-content="This might be dangerous">
          Confirmation
        </button>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">Directions</div>
      <div class="panel-body">
        <button class="btn btn-default" data-toggle="confirmation" data-placement="left">Confirmation on left</button>
        <button class="btn btn-default" data-toggle="confirmation" data-placement="top">Confirmation on top</button>
        <button class="btn btn-default" data-toggle="confirmation" data-placement="bottom">Confirmation on bottom
        </button>
        <button class="btn btn-default" data-toggle="confirmation" data-placement="right">Confirmation on right</button>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">Singleton</div>
      <div class="panel-body">
        <button class="btn btn-default" data-toggle="confirmation-singleton" data-singleton="true">Confirmation 1
        </button>
        <button class="btn btn-default" data-toggle="confirmation-singleton" data-singleton="true">Confirmation 2
        </button>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">Popout</div>
      <div class="panel-body">
        <button class="btn btn-default" data-toggle="confirmation-popout" data-popout="true">Confirmation 1</button>
        <button class="btn btn-default" data-toggle="confirmation-popout" data-popout="true">Confirmation 2</button>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">Delegation</div>
      <div class="panel-body" id="confirmation-delegate">
        <button class="btn btn-default">Confirmation 1</button>
        <button class="btn btn-default">Confirmation 2</button>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">Custom buttons</div>
      <div class="panel-body">
        <button class="btn btn-default" id="custom-confirmation">Choose your currency</button>
        <button class="btn btn-default" id="custom-confirmation-links">Share to</button>
      </div>
    </div>
  </div>
</div>

<!--<script src="../bower_components/jquery/dist/jquery.js"></script>
<script src="../bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script src="../bootstrap-confirmation.js"></script>
-->
<script src="{{ asset('js/app.js') }}"></script>
<script>
  console.log('Bootstrap ' + $.fn.tooltip.Constructor.VERSION);
  console.log('Bootstrap Confirmation ' + $.fn.confirmation.Constructor.VERSION);

  $('[data-toggle=confirmation]').confirmation({
    rootSelector: '[data-toggle=confirmation]',
    container: 'body'
  });
  $('[data-toggle=confirmation-singleton]').confirmation({
    rootSelector: '[data-toggle=confirmation-singleton]',
    container: 'body'
  });
  $('[data-toggle=confirmation-popout]').confirmation({
    rootSelector: '[data-toggle=confirmation-popout]',
    container: 'body'
  });

  $('#confirmation-delegate').confirmation({
    selector: 'button'
  });

  var currency = '';
  $('#custom-confirmation').confirmation({
    rootSelector: '#custom-confirmation',
    container: 'body',
    title: null,
    onConfirm: function() {
      alert('You choosed ' + currency);
    },
    buttons: [
      {
        class: 'btn btn-danger',
        icon: 'glyphicon glyphicon-usd',
        onClick: function() {
          currency = 'US Dollar';
        }
      },
      {
        class: 'btn btn-primary',
        icon: 'glyphicon glyphicon-euro',
        onClick: function() {
          currency = 'Euro';
        }
      },
      {
        class: 'btn btn-warning',
        icon: 'glyphicon glyphicon-bitcoin',
        onClick: function() {
          currency = 'Bitcoin';
        }
      },
      {
        class: 'btn btn-default',
        icon: 'glyphicon glyphicon-remove',
        cancel: true
      }
    ]
  });

  $('#custom-confirmation-links').confirmation({
    rootSelector: '#custom-confirmation-link',
    container: 'body',
    title: null,
    buttons: [
      {
        label: 'Twitter',
        attr: {
          href: 'https://twitter.com'
        }
      },
      {
        label: 'Facebook',
        attr: {
          href: 'https://facebook.com'
        }
      },
      {
        label: 'Pinterest',
        attr: {
          href: 'https://pinterest.com'
        }
      }
    ]
  });
</script>

<script>
  document.write('<script src="//' + location.host.split(':')[0] + ':35729/livereload.js" async defer><' + '/script>');
</script>

</body>
</html>
