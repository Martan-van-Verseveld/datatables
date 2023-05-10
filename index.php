<!DOCTYPE html>
<html>
<head>
    <title>DataTables Example</title>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable({
                "processing": true,
                "serverSide": false,
                "ajax": "fetchData.php",
                "columns": [
                    { "data": "id" },
                    { "data": "name" },
                    { "data": "phone" },
                    { "data": "email" },
                ]
            });
        });
    </script>
</head>
<body>
    <header class="navbar navbar-dark bg-secondary mb-4 py-4">
        <div class="container d-flex flex-wrap justify-content-center">
            <a class="navbar-brand" href="#"><b>DataTables</b></a>
        </div>
    </header>
    <article style="width: 95%; margin: auto;">
        <table id="table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>phone</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </article>
</body>
</html>
