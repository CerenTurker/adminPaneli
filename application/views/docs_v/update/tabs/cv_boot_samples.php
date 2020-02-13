<div role="tabpanel" class="tab-pane fade" id="tab-2">
    <div class="row">
        <div class="form-group col-md-12">
            <label>CV Önyazı Örnekleri</label>
            <textarea name="boot" class="m-0" data-plugin="summernote" data-options="{height: 250}">
            <?php echo isset($form_error) ? set_value("boot") : $item->cv_boot_samples; ?>
            </textarea>
        </div>
    </div>
</div><!-- .tab-pane  -->