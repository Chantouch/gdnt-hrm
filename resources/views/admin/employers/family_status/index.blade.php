<?php
/**
 * Created by PhpStorm.
 * Author: Chantouch
 * Date: 09-Dec-16
 * Time: 9:40 AM
 */
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion-public" href="#family_status"
               class="collapsed" aria-expanded="false">
                ៧.ស្ថានភាពគ្រួសារ
            </a>
        </h4>
    </div>
    <div id="family_status" class="panel-collapse collapse">
        @include('admin.employers.family_status.parents')
        @include('admin.employers.family_status.siblings')
        @include('admin.employers.family_status.spouse')
        @include('admin.employers.family_status.children')
    </div>
</div>
