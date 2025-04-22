@extends('Dashboard.Layouts.master')


@section('content')
<div class="app-content">
    <div class="content-wrapper">


    <style>


        .container {
            max-width: 800px;
            background: white;
            padding: 20px;
            margin: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        td {
            background-color: #f9f9f9;
        }

        pre {
            background: #282c34;
            color: #61dafb;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
            font-size: 14px;
        }


    </style>


<div class="container">
    <h2>Activity Log Details</h2>
    <table>
        <tr>
            <th>User:</th>
            <td>{{ $activityLog->user->name  ?? 'guest'}}</td>
        </tr>
        <tr>
            <th>Action:</th>
            <td>{{ $activityLog->action }}</td>
        </tr>
        <tr>
            <th>Details:</th>
            <td>
                <pre>{{ json_encode(json_decode($activityLog->details), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}</pre>
            </td>
        </tr>
        <tr>
            <th>IP Address:</th>
            <td>{{ $activityLog->ip_address }}</td>
        </tr>
        <tr>
            <th>Country:</th>
            <td>{{ $activityLog->country }}</td>
        </tr>
        <tr>
            <th>City:</th>
            <td>{{ $activityLog->city }}</td>
        </tr>
        <tr>
            <th>Device Type:</th>
            <td>{{ $activityLog->device_type }}</td>
        </tr>
        <tr>
            <th>Operating System:</th>
            <td>{{ $activityLog->platform }}</td>
        </tr>
        <tr>
            <th>Browser:</th>
            <td>{{ $activityLog->browser }}</td>
        </tr>

        <tr>
            <th>Date:</th>
            <td>{{ $activityLog->created_at }}</td>
        </tr>
    </table>
    <a href="{{ route('ActivityLog.index') }}" class="btn btn-secondary">Back</a>
</div>

</div></div>

@endsection
