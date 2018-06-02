<link rel="stylesheet" type="text/css" href="{{ asset('components/alertify.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('components/alertify.bootstrap.min.css') }}">
<script src="{{ asset('components/alertify.min.js') }}"></script>
@inject('ShowErrorsPresenter','\App\Presenters\ShowErrorsPresenter')
{!! $ShowErrorsPresenter->show_errors($errors) !!}