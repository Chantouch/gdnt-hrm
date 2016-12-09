<?php
/**
 * Created by PhpStorm.
 * Author: Chantouch
 * Date: 09-Dec-16
 * Time: 8:30 AM
 */
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion-public" href="#g-t-edu"
               aria-expanded="false" class="collapsed">
                ៥.កំរិតវប្បធម៏ទូទៅ ការបណ្តុះបណ្តាលវិជ្ជាជីវៈ និងការបណ្តុះបណ្តាលបន្ត
            </a>
        </h4>
    </div>
    <div id="g-t-edu" class="panel-collapse collapse">
        @include('admin.employers.education_level.general')
        @include('admin.employers.education_level.degree_specialize')
        @include('admin.employers.education_level.short_course')
    </div>
</div>
