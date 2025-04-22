@extends('Dashboard.Layouts.master')


@section('content')

<div class="app-content">
    <div class="content-wrapper">

        <div class="row">
            <div class="col">
                <div class="page-description">
                    <h1> الزوار</h1>
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

                    <a href="" type="button" class="btn btn-secondary"> الزوار</a>


                </form> --}}

            </div>

            <div class="card-body">

                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Gender</th>


                    </thead>
                    <tbody>

                        @if($User->count() > 0)
                        @foreach ($User as $log)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $log->name ?? 'ضيف' }}</td>
                            <td>{{ $log->email ?? 'لا يوجد' }}</td>
                            <td>{{ $log->phone ?? '-' }}</td>
                            <td>{{ $log->gender ?? '-' }}</td>


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
            @if ($User->hasPages())
            <ul class="pagination pagination-rounded mb-0">
                <li class="page-item {{ $User->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $User->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                    </a>
                </li>

                @foreach ($User->links()->elements as $element)
                @if (is_array($element))
                @foreach ($element as $page => $url)
                <li class="page-item {{ $page == $User->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
                @endforeach
                @endif
                @endforeach

                <li class="page-item {{ !$User->hasMorePages() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $User->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">»</span>
                    </a>
                </li>
            </ul>
            @endif
        </div>
    </div>

    @endsection
