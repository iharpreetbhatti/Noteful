<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <title>{{ $title ?? 'Noteful - Your Personal Notetaking App' }}</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 min-h-screen">
  <x-header />

  @if (session('success'))
    <x-alert type="success" message="{{ session('success') }}" />
  @endif
  @if (session('error'))
    <x-alert type="error" message="{{ session('error') }}" />
  @endif
  {{ $slot }}

</body>

</html>
