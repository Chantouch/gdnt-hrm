<?php
/**
 * Created by PhpStorm.
 * Author: Chantouch
 * Date: 08-Dec-16
 * Time: 11:34 AM
 */
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion-public" href="#public_status"
               class="collapsed" aria-expanded="false">
                ២.ព័ត៏មានស្ថានភាពមុខងារសាធារណៈ
            </a>
        </h4>
    </div>
    <div id="public_status" class="panel-collapse collapse">
        @include('admin.employers.public_status.first_state_job')
        @include('admin.employers.public_status.current_job_status')
        @include('admin.employers.public_status.addon_current_job')
        @include('admin.employers.public_status.out_basic_frame_status')
        @include('admin.employers.public_status.free_no_salary_status')
    </div>
</div>
