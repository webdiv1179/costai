@extends('Dashboard.Layouts.master')


@section('content')

<div class="app-content">
    <div class="content-wrapper">
        <div class="row">
            <div class="col">
                <div class="page-description">
                    <h1> سجل النشاطات</h1>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">


                {{-- <form id="deleteAllForm" action="{{ route('ActivityLog.destroyAll') }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-danger" id="deleteAllBtn">Delete All Record</button>
                </form> --}}

                {{-- <form action="" method="POST" enctype="multipart/form-data">

                    <a href="" type="button" class="btn btn-secondary"> ActivityLog</a>


                </form> --}}

            </div>

            <div class="card-body">

                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Administrator</th>
                            <th>Process</th>
                            <th>Details</th>
                            <th>IP</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Device</th>
                            <th>OS</th>
                            <th>Browser</th>
                            <th>History</th>

                    </thead>
                    <tbody>

                        @if($logs->count() > 0)
                        @foreach ($logs as $log)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $log->user->name ?? 'guest' }}</td>
                            <td>{{ $log->action }}</td>


                            <td><a class="btn btn-dark" href="{{ route('ActivityLog.show', $log->id) }}">View</a></td>
                            <td>{{ $log->ip_address }}</td>
                            <td>{{ $log->country ?? '-' }}</td>
                            <td>{{ $log->city ?? '-' }}</td>
                            <td>{{ $log->device_type ?? '-' }}</td>
                            <td>{{ $log->platform ?? '-' }}</td>
                            <td>{{ $log->browser ?? '-' }}</td>
                            <td>{{ $log->created_at }}</td>

                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="6" class="text-center">Nothing in record</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            @if ($logs->hasPages())
            <ul class="pagination pagination-rounded mb-0">
                <li class="page-item {{ $logs->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $logs->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                    </a>
                </li>

                @foreach ($logs->links()->elements as $element)
                @if (is_array($element))
                @foreach ($element as $page => $url)
                <li class="page-item {{ $page == $logs->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
                @endforeach
                @endif
                @endforeach

                <li class="page-item {{ !$logs->hasMorePages() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $logs->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">»</span>
                    </a>
                </li>
            </ul>
            @endif
        </div>
    </div>

    @endsection
