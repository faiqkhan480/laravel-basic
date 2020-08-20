<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class jobController extends Controller
{
    public function fetchJobs() {
        $jobs = Job::all();

//        foreach($jobs as $job) {
//            echo $job->job_title;
//            echo "<br>";
//        }

        return View('pages.jobs', ['jobs'=>$jobs]);
    }
}
