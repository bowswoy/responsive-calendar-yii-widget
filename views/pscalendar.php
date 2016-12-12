<!-- Responsive calendar - START -->
<div id="<?php echo $this->id; ?>" class="responsive-calendar">
    <div class="calendar-border">
        <div class="controls">
            <a class="pull-left" data-go="prev">&laquo;</a>
            <span data-head-month></span> <span data-head-year></span>
            <a class="pull-right" data-go="next">&raquo;</a>
        </div>
        <div class="day-headers">
            <?php foreach($this->day as $d) { ?>
            <div class="day header"><?php echo $d; ?></div>
            <?php } ?>
        </div>
        <div class="days" data-group="days">
        </div>
    </div>
</div>
<!-- Responsive calendar - END -->