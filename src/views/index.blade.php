<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .hide {
            display: none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>My Plan Manager</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <a href="{!! route('download') !!}" target="_blank" id="downloadCSV" class="btn btn-danger hide">Download CSV</a>
            <a href="javascript:;" id="exportToCSV" class="btn btn-primary">Export To CSV</a>
        </div>
        <div class="col-md-12" style="height: 20px;"></div>
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Number of employees</th>
                    <th scope="col">Created</th>
                </tr>
                </thead>
                <tbody>
                @forelse($companies as $company)
                    <tr>
                        <td>{!! $company->id !!}</td>
                        <td>{!! $company->name !!}</td>
                        <td>{!! $company->employees->count() !!}</td>
                        <td>{!! $company->created_at->toDateString() !!}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No data yet</td>
                    </tr>

                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    document.getElementById('exportToCSV').addEventListener('click', function() {
        document.getElementById('downloadCSV').classList.remove('hide');
    });

</script>
</body>
</html>