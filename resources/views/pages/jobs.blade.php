@extends('layout')

@section('title')
    Jobs List
@endsection

@section('page_name')
    Jobs
@endsection

@section('list_jobs')
    <div class="wrap">
        <table class="jobTable">
            <tr>
                <th>Job Title</th>
                <th>Min Salary</th>
                <th>Max Salary</th>
            </tr>
            @foreach($jobs as $job)
                <tr>
                    <td>{{ $job->job_title }}</td>
                    <td>{{ $job->min_salary }}</td>
                    <td>{{ $job->max_salary }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
