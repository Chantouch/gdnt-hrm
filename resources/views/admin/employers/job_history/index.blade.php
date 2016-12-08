<?php
/**
 * Created by PhpStorm.
 * Author: Chantouch
 * Date: 08-Dec-16
 * Time: 3:58 PM
 */
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion-public" href="#job-history"
               aria-expanded="false" class="collapsed">
                ៣.ប្រវត្តិការងារ (សូមបំពេញតាមលំដាប់ ពីថ្មីទៅចាស់)
            </a>
        </h4>
    </div>
    <div id="job-history" class="panel-collapse collapse">
        @include('admin.employers.job_history.public')
        @include('admin.employers.job_history.private')
    </div>
</div>
