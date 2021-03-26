<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" type="text/css">
</head>
<body class="antialiased">


<form class="form-horizontal" method="POST" action="{{ route('import_process') }}">
    {{ csrf_field() }}
    <input type="hidden" name="csv_data_file_id" value="{{ $csv_data_file->csv_id }}" />

    <table class="table">
        @if (isset($csv_header_fields))
            <tr>
                @foreach ($csv_header_fields as $csv_header_field)
                    <th>{{ $csv_header_field }}</th>
                @endforeach
            </tr>
        @endif
        @foreach ($csv_data as $row)
            <tr>
                @foreach ($row as $key => $value)
                    <td>{{ $value }}</td>
                @endforeach
            </tr>
        @endforeach
        <tr>
            @foreach ($csv_data[0] as $key => $value)
                <td>
                    <select name="fields[{{ $key }}]">
                        @foreach (config('app.db_fields') as $db_field)
                            <option value="{{ (\Request::has('header')) ? $db_field : $loop->index }}"
                                    @if ($key === $db_field) selected @endif>{{ $db_field }}</option>
                        @endforeach
                    </select>
                </td>
            @endforeach
        </tr>
    </table>

    <button type="submit" class="btn btn-primary">
        Import Data
    </button>
</form>


</body>
</html>