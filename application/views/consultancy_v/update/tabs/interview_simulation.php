<div role="tabpanel" class="tab-pane in active fade" id="tab-1">
    <div class="row">
        <div class="form-group col-md-12">
            <label>Mülakat Simülasyonu</label>
            <textarea name="interview" class="m-0" data-plugin="summernote" data-options="{height: 250}">
            <?php echo isset($form_error) ? set_value("interview") : $item->interview_simulation; ?>
            </textarea>
        </div>
    </div>
</div><!-- .tab-pane  -->