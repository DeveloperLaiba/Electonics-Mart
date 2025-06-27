<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Admin/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="../Admin/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="../Admin/css/style.css" />


    <title>AdminPanel</title>
  </head>
  <body>
  @include('AdminPanel.Layout.header')
    @yield('content')
    @include('AdminPanel.Layout.sidebar')
  <script src="../Admin/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../Admin/js/jquery-3.5.1.js"></script>
    <script src="../Admin/js/jquery.dataTables.min.js"></script>
    <script src="../Admin/js/dataTables.bootstrap5.min.js"></script>
    <script src="../Admin/js/script.js"></script>
  </body>
</html>
